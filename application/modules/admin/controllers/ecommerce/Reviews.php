<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Reviews extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Reviews_model');
    }

    public function index()
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['name'])) {
            $this->Reviews_model->setBrand($_POST['name']);
            redirect('admin/brands');
        }

        if (isset($_GET['delete'])) {
            $this->Reviews_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $data['brands'] = $this->Reviews_model->getBrands();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/reviews', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

}
