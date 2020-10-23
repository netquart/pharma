<?php

class Listcouponcode_model extends CI_Model
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

    public function addcouponcode()
    {
        if (!$this->db->insert('pharma_coupons', array('coupon_code' => $_POST['coupon_code'],'coupon_price' => $_POST['coupon_price'],'coupon_type' => $_POST['coupon_type'],'coupon_details' => $_POST['coupon_details'],'coupon_usage' => $_POST['coupon_usage'],'coupon_enddate' => $_POST['coupon_enddate'],
        
        'coupon_status' => $_POST['coupon_status']

        
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

}
