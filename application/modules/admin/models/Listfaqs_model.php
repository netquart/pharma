<?php

class Listfaqs_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getFaqs()
    {
        $result = $this->db->get('pharma_faqs');
        return $result->result_array();
    }

    public function setBrand($name)
    {
        if (!$this->db->insert('brands', array('name' => $name))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function deletefaqs($id)
    {
        if (!$this->db->where('faq_id', $id)->delete('pharma_faqs')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

}
