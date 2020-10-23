<?php

class Addsaleoffers_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBrands()
    {
        $result = $this->db->get('brands');
        return $result->result_array();
    }

    public function setBrand($name)
    {
        if (!$this->db->insert('brands', array('name' => $name))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function addSaleOfr($imgname)
    {
        if (!$this->db->insert('pharma_saleoffer', array('sale_title' => $_POST['sale_title'],'sale_tagline' => $_POST['sale_tagline'],'sale_desc' => $_POST['sale_desc'],'sale_order' => $_POST['sale_order'],'sale_status' => $_POST['sale_status'],'sale_image' => $imgname,
        
        'sale_enddate' => strtotime($_POST['sale_enddate'])

        
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }


    public function getSaleOffer($id)
    {
        $query = $this->db->query("select * from pharma_saleoffer where saleoffer_id='".$id."'");
        
     
        return $query->row_array();
    }

  

    public function updateSaleOffer($id,$img) {


        if (isset($_POST['delete_img']) and $_POST['delete_img']!='') {
            if (file_exists(realpath('.\attachments\shop_images\sale_offers\\'.$_POST['delete_img']))) {
             unlink(realpath('.\attachments\shop_images\sale_offers\\'.$_POST['delete_img']));
             }
           }


        if ($id > 0 and isset($_POST['addsaleoffer']) and $img=='') {
          
            if (!$this->db->where('saleoffer_id', $id)->update('pharma_saleoffer', array(
                'sale_title' => $_POST['sale_title'],'sale_tagline' => $_POST['sale_tagline'],'sale_desc' => $_POST['sale_desc'],'sale_order' => $_POST['sale_order'],'sale_status' => $_POST['sale_status'],
        
                'sale_enddate' => strtotime($_POST['sale_enddate'])
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }

        else if ($id > 0 and isset($_POST['addsaleoffer']) and $img!='') {
          
            if (!$this->db->where('saleoffer_id', $id)->update('pharma_saleoffer', array(
                'sale_title' => $_POST['sale_title'],'sale_tagline' => $_POST['sale_tagline'],'sale_desc' => $_POST['sale_desc'],'sale_order' => $_POST['sale_order'],'sale_status' => $_POST['sale_status'],
                'sale_image' => $img,
                'sale_enddate' => strtotime($_POST['sale_enddate'])
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
    }


}
