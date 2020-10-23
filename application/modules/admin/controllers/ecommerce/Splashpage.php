<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Splashpage extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Splashpage_model');
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
            $this->Splashpage_model->setBrand($_POST['name']);
            redirect('admin/brands');
        }

        if (isset($_GET['delete'])) {
            $this->Splashpage_model->deleteSplashPage($_GET['delete']);
            redirect('admin/splashpage');
        }

       

        $data['getsplashpagedata'] = $this->Splashpage_model->getLists();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/splashpage', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

}
