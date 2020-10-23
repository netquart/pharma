<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addcoupons2 extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addcoupons2_model');
    }

    public function index($id=0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Coupons';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['addcoupons']) and $id=='' ) {
            $this->Addcoupons2_model->AddCoupon();
            redirect('admin/listcoupons');
        }
        $data['button_text']='Add Coupon Code';
        if ($id > 0 && $_POST == null) {
            $data['couponedit'] = $this->Addcoupons2_model->getOneCoupon($id);

            $data['button_text']='Update Coupon Code';
        }

        if($id>0 and isset($_POST['addcoupons'])) {
            $this->Addcoupons2_model->updateCoupon($id);
            redirect('admin/listcoupons');
        }


        if (isset($_GET['delete'])) {
            $this->Addcoupons2_model->deleteBrand($_GET['delete']);
            redirect('admin/listcoupons');
        }

        $data['brands'] = $this->Addcoupons2_model->getBrands();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addcoupons2', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to coupons page');
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/special_offers/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('offer_image')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

}
