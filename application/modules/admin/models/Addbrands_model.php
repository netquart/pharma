<?php

class Addbrands_model extends CI_Model
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

    public function setBrand($imgname)
    {
        if (!$this->db->insert('pharma_brands', array('brand_name' => $_POST['brand_name'],'brand_tagline' => $_POST['brand_tagline'],'brand_desc' => $_POST['brand_desc'],'brand_order' => $_POST['brand_order'],'brand_status' => $_POST['brand_status'],'brand_image' => $imgname))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOneBrand($id)
    {
        $query = $this->db->query("select * from pharma_brands where brand_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function updateBrand($id,$imgname) {

        if (isset($_POST['delete_img']) and $_POST['delete_img']!='') {
            if (file_exists(realpath('.\attachments\shop_images\brand_images\\'.$_POST['delete_img']))) {
             unlink(realpath('.\attachments\shop_images\brand_images\\'.$_POST['delete_img']));
             }
           }


        if ($id > 0 and isset($_POST['addbrands']) and $imgname!='') {
          
            if (!$this->db->where('brand_id', $id)->update('pharma_brands', array(
                'brand_name' => $_POST['brand_name'],'brand_tagline' => $_POST['brand_tagline'],'brand_desc' => $_POST['brand_desc'],'brand_order' => $_POST['brand_order'],'brand_status' => $_POST['brand_status'],'brand_image'=>$imgname
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
        elseif ($id > 0 and isset($_POST['addbrands']) and $imgname=='') {
          
            if (!$this->db->where('brand_id', $id)->update('pharma_brands', array(
                'brand_name' => $_POST['brand_name'],'brand_tagline' => $_POST['brand_tagline'],'brand_desc' => $_POST['brand_desc'],'brand_order' => $_POST['brand_order'],'brand_status' => $_POST['brand_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        } 
    }

}
