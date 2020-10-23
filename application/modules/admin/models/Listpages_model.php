<?php

class Listpages_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    

    public function deletePage($id)
    {
        if (!$this->db->where('page_id', $id)->delete('pharma_static_pages')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

}
