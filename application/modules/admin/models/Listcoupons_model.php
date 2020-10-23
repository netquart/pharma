<?php

class Listcoupons_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getCoupons()
    {
        $result = $this->db->get('pharma_coupons');
        return $result->result_array();
    }

    

}
