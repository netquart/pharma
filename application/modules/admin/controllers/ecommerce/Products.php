<?php


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Products extends ADMIN_Controller
{

    private $num_rows = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Products_model', 'Languages_model', 'Categories_model'));
    }

    public function index($page = 0)
    {
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - View products';
        $head['description'] = '!';
        $head['keywords'] = '';

        
        $data['shop_products'] = $this->Products_model->getProducts();

        $this->saveHistory('Go to products');
        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/products', $data);
        $this->load->view('_parts/footer');
    }

    public function UpdateStock(){
        // POST data
        $postData = $this->input->post();
    
        // get data
        $this->Products_model->updateProductStock($postData);
        
        echo 'Stock updated Successfully!';
        
      }

    public function getProductInfo($id, $noLoginCheck = false)
    {
        /* 
         * if method is called from public(template) page
         */
        if ($noLoginCheck == false) {
            $this->login_check();
        }
        return $this->Products_model->getOneProduct($id);
    }

    /*
     * called from ajax
     */

    public function productStatusChange()
    {
        $this->login_check();
        $result = $this->Products_model->productStatusChange($_POST['id'], $_POST['to_status']);
        if ($result == true) {
            echo 1;
        } else {
            echo 0;
        }
        $this->saveHistory('Change product id ' . $_POST['id'] . ' to status ' . $_POST['to_status']);
    }

}
