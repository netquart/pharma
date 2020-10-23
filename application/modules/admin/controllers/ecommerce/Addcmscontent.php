<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addcmscontent extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addcmscontent_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';
        
        if (isset($_POST['addcontent']) and $id=='') {
            $this->Addcmscontent_model->setPage();
            redirect('admin/cmscontent');
        }


        if ($id > 0 && $_POST == null) {
            $data['pageedit'] = $this->Addcmscontent_model->getOnePage($id);

        }

        if($id>0 and isset($_POST['addcontent'])) {

            $this->Addcmscontent_model->updatePage($id);
            redirect('admin/cmscontent');
        }


        if (isset($_GET['delete'])) {
            $this->Addcmscontent_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        
        $javascript['addbrandpage_javascript']="CKEDITOR.replace('cmscontent_description');
        CKEDITOR.config.entities = false;";

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addcmscontent', $data);
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
