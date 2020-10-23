<?php

class Adddeliverymethods_model extends CI_Model
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

    public function setDeliverymethod($imgname)
    {
        if (!$this->db->insert('pharma_deliverymethods', array('delivery_title' => $_POST['delivery_title'],'delivery_price' => $_POST['delivery_price'],'delivery_details' => $_POST['delivery_details'],'delivery_type' => $_POST['delivery_type'],'delivery_order' => $_POST['delivery_order'],'delivery_image' => $imgname,
        
        'delivery_status' => $_POST['delivery_status']

        
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getMethod($id)
    {
        $query = $this->db->query("select * from pharma_deliverymethods where delivery_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function updateMethod($id,$img) {

        if (isset($_POST['delete_img']) and $_POST['delete_img']!='') {
            if (file_exists(realpath('.\attachments\shop_images\delivery_options\\'.$_POST['delete_img']))) {
             unlink(realpath('.\attachments\shop_images\delivery_options\\'.$_POST['delete_img']));
             }
           }


        if ($id > 0 and isset($_POST['add_delivery_options']) and $img=='') {
          
            if (!$this->db->where('delivery_id', $id)->update('pharma_deliverymethods', array(
                'delivery_title' => $_POST['delivery_title'],'delivery_price' => $_POST['delivery_price'],'delivery_details' => $_POST['delivery_details'],'delivery_type' => $_POST['delivery_type'],'delivery_order' => $_POST['delivery_order'],
        
                'delivery_status' => $_POST['delivery_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }

        if ($id > 0 and isset($_POST['add_delivery_options']) and $img!='') {
          
            if (!$this->db->where('delivery_id', $id)->update('pharma_deliverymethods', array(
                'delivery_title' => $_POST['delivery_title'],'delivery_price' => $_POST['delivery_price'],'delivery_details' => $_POST['delivery_details'],'delivery_type' => $_POST['delivery_type'],'delivery_order' => $_POST['delivery_order'],
                'delivery_image' => $img,
                'delivery_status' => $_POST['delivery_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
    }

}
