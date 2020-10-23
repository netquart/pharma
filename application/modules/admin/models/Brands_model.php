<?php

class Brands_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBrands()
    {
        $query = $this->db->query('SELECT * from pharma_brands order by brand_order ASC');
        $arr = array();
        foreach ($query->result() as $shop_categorie) {
           $arr[] = $shop_categorie;
        }
        return $arr;
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

}
