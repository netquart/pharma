<?php

class Addcoupons2_model extends CI_Model
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

    public function AddCoupon()
    {
        if (!$this->db->insert('pharma_coupons', array('coupon_code' => $_POST['coupon_code'],'coupon_price' => $_POST['coupon_price'],'coupon_type' => $_POST['coupon_type'],'coupon_details' => $_POST['coupon_details'],'coupon_usage' => $_POST['coupon_usage'],'coupon_enddate' => strtotime($_POST['coupon_enddate']),
        
        'coupon_status' => $_POST['coupon_status']

        
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOneCoupon($id)
    {
        $query = $this->db->query("select * from pharma_coupons where coupon_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function updateCoupon($id) {


        if ($id > 0 and isset($_POST['addcoupons'])) {
          
            if (!$this->db->where('coupon_id', $id)->update('pharma_coupons', array(
                'coupon_code' => $_POST['coupon_code'],'coupon_price' => $_POST['coupon_price'],'coupon_type' => $_POST['coupon_type'],'coupon_details' => $_POST['coupon_details'],'coupon_usage' => $_POST['coupon_usage'],'coupon_enddate' => strtotime($_POST['coupon_enddate']),
        
                'coupon_status' => $_POST['coupon_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
    }

}
