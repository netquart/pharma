<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cmscontent extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cmscontent_model');
        
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
            $this->Cmscontent_model->deleteCMS($_GET['delete']);
            redirect('admin/cmscontent');
        }

        $data['pages'] = $this->Cmscontent_model->getcontentLists();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/cmscontent', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

}
