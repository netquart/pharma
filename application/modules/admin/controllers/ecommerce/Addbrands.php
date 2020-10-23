<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addbrands extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addbrands_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';
        
        if (isset($_POST['addbrands']) and $id=='') {
            $this->Addbrands_model->setBrand($this->uploadImage());
            redirect('admin/brands');
        }

        $data['button_title'] = 'Add Brand';
       

        if ($id > 0 && $_POST == null) {
            $data['brandedit'] = $this->Addbrands_model->getOneBrand($id);
            $data['button_title'] = 'Update Brand';
            
        }

        if($id>0 and isset($_POST['addbrands'])) {

            if(isset($_FILES["brand_image"]["name"])) {
                $imgname = $this->uploadImage();
            }

            $this->Addbrands_model->updateBrand($id,$imgname);
            redirect('admin/brands');
        }


        if (isset($_GET['delete'])) {
            $this->Addbrands_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $data['brands'] = $this->Addbrands_model->getBrands();

        $javascript['addbrandpage_javascript']="CKEDITOR.replace('brandpage_description');
        CKEDITOR.config.entities = false;";

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addbrands', $data);
        $this->load->view('_parts/footer',$javascript);
        $this->saveHistory('Go to brands page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/brand_images/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('brand_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

}
