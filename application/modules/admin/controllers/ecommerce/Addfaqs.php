<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Addfaqs extends ADMIN_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Addfaqs_model');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Brands';
        $head['description'] = '!';
        $head['keywords'] = '';
        
        if (isset($_POST['addfaq']) and $id=='') {
            $this->Addfaqs_model->setPage();
            redirect('admin/listfaqs');
        }

        $data['button_title'] = 'Add FAQ,s';

        if ($id > 0 && $_POST == null) {
            $data['pageedit'] = $this->Addfaqs_model->getOnePage($id);

            $data['button_title'] = 'Update FAQ,s';

        }

        if($id>0 and isset($_POST['addfaq'])) {

           
            
            $this->Addfaqs_model->updatePage($id);
            redirect('admin/listfaqs');
        }


        if (isset($_GET['delete'])) {
            $this->Addfaqs_model->deleteBrand($_GET['delete']);
            redirect('admin/brands');
        }

        $javascript['faq_javascript'] = "CKEDITOR.replace('faq_question');
        CKEDITOR.config.entities = false;
        
        CKEDITOR.replace('faq_answer');
        CKEDITOR.config.entities = false;";

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/addfaqs', $data);
        $this->load->view('_parts/footer',$javascript);
        $this->saveHistory('Go to brands page');
    }

    

}
