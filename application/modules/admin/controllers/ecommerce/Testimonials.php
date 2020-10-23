<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Testimonials extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Testimonials_model');
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
            $this->Testimonials_model->setBrand($_POST['name']);
            redirect('admin/brands');
        }

        if (isset($_GET['delete'])) {
            $this->Testimonials_model->deleteTestimonial($_GET['delete']);
            redirect('admin/testimonials');
        }

        $data['testimonials'] = $this->Testimonials_model->getBrands();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/testimonials', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to brands page');
    }

}
