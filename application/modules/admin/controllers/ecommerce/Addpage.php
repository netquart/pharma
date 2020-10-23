<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addpage extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addpage_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';
        
        if (isset($_POST['addpage']) and $id=='') {
            $this->Addpage_model->setPage($this->uploadImage());
            redirect('admin/listpages');
        }

        $data['page_button']='Add New Page';
       

        if ($id > 0 && $_POST == null) {
            $data['pageedit'] = $this->Addpage_model->getOnePage($id);

            $data['page_button']='Update Page';
        }

        if($id>0 and isset($_POST['addpage'])) {

            if(isset($_FILES["page_image"]["name"])) {
                $imgname = $this->uploadImage();
            }

            $this->Addpage_model->updatePage($id,$imgname);
            redirect('admin/listpages');
        }


        if (isset($_GET['delete'])) {
            $this->Addpage_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $javascript['addpage_javascript'] = "CKEDITOR.replace('page_description');
        CKEDITOR.config.entities = false;";

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addpage', $data);
        $this->load->view('_parts/footer',$javascript);
        $this->saveHistory('Go to brands page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/page_images/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('page_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

}
