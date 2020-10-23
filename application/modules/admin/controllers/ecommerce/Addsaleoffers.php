<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addsaleoffers extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addsaleoffers_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Sales Offers';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['addsaleoffer']) and $id=='') {
            $this->Addsaleoffers_model->addSaleOfr($this->uploadImage());
            redirect('admin/saleoffers');
        }

       $data['button_text']='Add Sale Offer';

        if ($id > 0 && $_POST == null) {
        $data['saleoffer'] = $this->Addsaleoffers_model->getSaleOffer($id);
        $data['button_text']='Update Sale Offer';
        }

        
        if($id>0 and isset($_POST['addsaleoffer'])) {

            if(isset($_FILES["sale_image"]["name"])) {
                $imgname = $this->uploadImage();
            }


            $this->Addsaleoffers_model->updateSaleOffer($id,$imgname);
            redirect('admin/saleoffers');
        }

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addsaleoffers', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Sales Offer page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/sale_offers/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('sale_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

}
