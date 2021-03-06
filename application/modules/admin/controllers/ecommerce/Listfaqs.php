<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Listfaqs extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Listfaqs_model');
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
            $this->Listfaqs_model->setBrand($_POST['name']);
            redirect('admin/brands');
        }

        if (isset($_GET['delete'])) {
            $this->Listfaqs_model->deletefaqs($_GET['delete']);
            redirect('admin/brands');
        }

        $data['faqs'] = $this->Listfaqs_model->getFaqs();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/listfaqs', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

}
