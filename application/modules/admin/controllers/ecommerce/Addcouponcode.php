<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addcouponcode extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addcouponcode_model');
    }

    public function index()
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Sales Offers';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['add_couponcode'])) {
            $this->Addcouponcode_model->addcouponcode();
            redirect('admin/listcouponcode');
        }

        if (isset($_GET['delete'])) {
            $this->Addcouponcode_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $data['brands'] = $this->Addcouponcode_model->getBrands();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addcouponcode', $data);
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
