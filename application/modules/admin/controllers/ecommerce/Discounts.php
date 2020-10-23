<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Discounts extends ADMIN_Controller
{

    private $num_rows = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Discounts_model', 'Home_admin_model'));
    }

    public function index($page = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Discounts';
        $head['description'] = '!';
        $head['keywords'] = '';
        if (isset($_POST['code'])) {
            $this->setDiscountCode();
        }
        
        $data['discounts'] = $this->Discounts_model->getDiscounts();
        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/discounts', $data);
        $this->load->view('_parts/footer');
        if ($page == 0) {
            $this->saveHistory('Go to discounts page');
        }
    }

   

}
