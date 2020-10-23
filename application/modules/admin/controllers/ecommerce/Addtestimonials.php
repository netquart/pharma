<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addtestimonials extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addtestimonials_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';
        
        if (isset($_POST['addtestimonial']) and $id=='') {
            $this->Addtestimonials_model->setPage($this->uploadImage());
            redirect('admin/testimonials');
        }


        if ($id > 0 && $_POST == null) {
            $data['pageedit'] = $this->Addtestimonials_model->getOnePage($id);

        }

        if($id>0 and isset($_POST['addtestimonial'])) {

            if(isset($_FILES["testimonial_image"]["name"])) {
                $imgname = $this->uploadImage();
            }
            
            $this->Addtestimonials_model->updatePage($id,$imgname);
            redirect('admin/testimonials');
        }


        if (isset($_GET['delete'])) {
            $this->Addtestimonials_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $javascript['addsplashpage_javascript'] = "CKEDITOR.replace('testimonial_desc');
        CKEDITOR.config.entities = false;";

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addtestimonials', $data);
        $this->load->view('_parts/footer',$javascript);
        $this->saveHistory('Go to brands page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/testimonial_images/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('testimonial_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

}
