<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Saleoffers extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Saleoffers_model');
    }

    public function index()
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Sales Offers';
        $head['description'] = '!';
        $head['keywords'] = '';

      

        if (isset($_GET['delete'])) {
            $this->Saleoffers_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $data['saleoffers'] = $this->Saleoffers_model->getSaleoffers();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/saleoffers', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Sales Offers page');
    }

   

}
