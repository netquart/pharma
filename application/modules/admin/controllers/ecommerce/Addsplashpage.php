<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addsplashpage extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addsplashpage_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';
        
        if (isset($_POST['addsplashpage']) and $id=='') {
            $this->Addsplashpage_model->setPage($this->uploadImage());
            redirect('admin/splashpage');
        }

        $data['page_button']='Add Splash Page';

        if ($id > 0 && $_POST == null) {
            $data['pageedit'] = $this->Addsplashpage_model->getOnePage($id);
            $data['page_button']='Update Splash Page';
        }

        if($id>0 and isset($_POST['addsplashpage'])) {

            if(isset($_FILES["splash_image"]["name"])) {
                $imgname = $this->uploadImage();
            }
            
            $this->Addsplashpage_model->updatePage($id,$imgname);
            redirect('admin/splashpage');
        }


        if (isset($_GET['delete'])) {
            $this->Addsplashpage_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $javascript['addsplashpage_javascript'] = "CKEDITOR.replace('splashpage_description');
        CKEDITOR.config.entities = false;";

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addsplashpage', $data);
        $this->load->view('_parts/footer',$javascript);
        $this->saveHistory('Go to brands page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/splash_images/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('splash_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

}
