<?php

class Cmscontent_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getcontentLists()
    {
        $result = $this->db->get('pharma_cms_contents');
        return $result->result_array();
    }

    public function setBrand($name)
    {
        if (!$this->db->insert('brands', array('name' => $name))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function deleteCMS($id)
    {
        if (!$this->db->where('content_id', $id)->delete('pharma_cms_contents')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

}
