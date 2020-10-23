<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Listcoupons extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Listcoupons_model');
    }

    public function index()
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Sales Offers';
        $head['description'] = '!';
        $head['keywords'] = '';

      

        $data['coupons'] = $this->Listcoupons_model->getCoupons();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/listcoupons', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Sales Offer page');
    }

  
}
