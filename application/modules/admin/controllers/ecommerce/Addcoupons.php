<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addcoupons extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addcoupons_model');
    }

    public function index($id=0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Coupons';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['add_special_offer']) and $id=='' ) {
            $this->Addcoupons_model->AddSpecialOffer($this->uploadImage());
            redirect('admin/discounts');
        }

        $data["button_text"]='Add Special Offer';

        if ($id > 0 && $_POST == null) {
            $data['couponedit'] = $this->Addcoupons_model->getOneCoupon($id);

            $data["button_text"]='Update Special Offer';
        }

        if($id>0 and isset($_POST['add_special_offer'])) {

            if(isset($_FILES["offer_image"]["name"])) {
                $imgname = $this->uploadImage();
            }
           

            $this->Addcoupons_model->updateCoupon($id,$imgname);
            redirect('admin/discounts');
        }


        if (isset($_GET['delete'])) {
            $this->Addcoupons_model->deleteBrand($_GET['delete']);
            redirect('admin/coupons');
        }

        $data['brands'] = $this->Addcoupons_model->getBrands();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addcoupons', $data);
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
