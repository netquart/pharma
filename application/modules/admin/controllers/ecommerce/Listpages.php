<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Listpages extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Listpages_model');
        $this->load->model('Addpage_model');
    }

    public function index()
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';

       

        if (isset($_GET['delete'])) {
            $this->Listpages_model->deletePage($_GET['delete']);
            redirect('admin/listpages');
        }

        $data['pages'] = $this->Addpage_model->getpageLists();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/listpages', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

}
