<?php

class Splashpage_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getLists()
    {
        $result = $this->db->get('pharma_splashpage');
        return $result->result_array();
    }

    public function setBrand($name)
    {
        if (!$this->db->insert('brands', array('name' => $name))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function deleteSplashPage($id)
    {
        if (!$this->db->where('splash_id', $id)->delete('pharma_splashpage')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

}
