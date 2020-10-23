<?php

class Discounts_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDiscounts()
    {
        $query = $this->db->query('SELECT * from pharma_specialoffers order by offer_order ASC');
        $arr = array();
        foreach ($query->result() as $array) {
           $arr[] = $array;
        }
        return $arr;
    }

}
