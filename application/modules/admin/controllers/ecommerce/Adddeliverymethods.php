<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Adddeliverymethods extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Adddeliverymethods_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['add_delivery_options']) and $id=='') {
            $this->Adddeliverymethods_model->setDeliverymethod($this->uploadImage());
            redirect('admin/deliverymethods');
        }

        if (isset($_GET['delete'])) {
            $this->Adddeliverymethods_model->deleteBrand($_GET['delete']);
            redirect('admin/deliverymethods');
        }

       $data['button_text']='Add Delivery';

        if($id>0 and isset($_POST['add_delivery_options'])) {
            if(isset($_FILES["delivery_image"]["name"])) {
                $imgname = $this->uploadImage();
            }
            $this->Adddeliverymethods_model->updateMethod($id,$imgname);

            redirect('admin/deliverymethods');
        }

        if ($id > 0 && $_POST == null) {
            $data['button_text']='Update Delivery';
        $data['deliverymethod'] = $this->Adddeliverymethods_model->getMethod($id);
        }
        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/adddeliverymethods', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/delivery_options/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('delivery_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

    

}
