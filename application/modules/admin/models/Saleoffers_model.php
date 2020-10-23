<?php

class Saleoffers_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

   

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getSaleoffers()
    {
        $query = $this->db->query('SELECT * from pharma_saleoffer order by sale_order ASC');
        $arr = array();
        foreach ($query->result() as $shop_categorie) {
           $arr[] = $shop_categorie;
        }
        return $arr;
    }

}
