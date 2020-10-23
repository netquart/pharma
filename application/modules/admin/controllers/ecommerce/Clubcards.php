<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Clubcards extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Clubcards_model');
    }

    public function index()
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Club Cards';
        $head['description'] = '!';
        $head['keywords'] = '';

        if (isset($_POST['name'])) {
            $this->Clubcards_model->setBrand($_POST['name']);
            redirect('admin/brands');
        }

        if (isset($_GET['delete'])) {
            $this->Clubcards_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $data['brands'] = $this->Clubcards_model->getBrands();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/clubcards', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Club Card page');
    }

}
