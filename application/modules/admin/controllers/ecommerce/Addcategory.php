<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addcategory extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addcategory_model');
      
        
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Add Category';
        $head['description'] = '!';
        $head['keywords'] = '';

        $data['button_title']='Add New Category';

        if (isset($_POST['addcategory']) and $id=='') {
            $this->Addcategory_model->setCategory();
            redirect('admin/shopcategories');
        }

        if ($id > 0 && $_POST == null) {
            $data['catedit'] = $this->Addcategory_model->getOneCategory($id);
            $data['button_title']='Update Category';
            
        }

        if (isset($_GET['delete'])) {
            $this->Addcategory_model->deleteBrand($_GET['delete']);
            redirect('admin/coupons');
        }

        if($id>0 and isset($_POST['addcategory'])) {
            $this->Addcategory_model->updateCategory($id);
            redirect('admin/shopcategories');
        }

        $data['brands'] = $this->Addcategory_model->getBrands();

       

        $data['categorylist'] = $this->Addcategory_model->getcategoryList();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addcategory', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to coupons page');
    }

}
