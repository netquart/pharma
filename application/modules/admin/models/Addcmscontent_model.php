<?php

class Addcmscontent_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getpageLists()
    {
        $result = $this->db->get('pharma_static_pages');
        return $result->result_array();
    }

    public function setPage()
    {
        if (!$this->db->insert('pharma_cms_contents', array( 'content_location' => $_POST['content_location'],'content_text' => $_POST['content_text'],
        'content_title' => $_POST['content_title'],
        'content_created_date' => time(),
        'content_status'=>$_POST['content_status']

        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOnePage($id)
    {
        $query = $this->db->query("select * from pharma_cms_contents where content_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function updatePage($id) {


        if ($id > 0 and isset($_POST['addcontent']) ) {
          
            if (!$this->db->where('content_id', $id)->update('pharma_cms_contents', array(
                'content_location' => $_POST['content_location'],'content_text' => $_POST['content_text'],
                'content_title' => $_POST['content_title'],
                'content_status'=>$_POST['content_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
       
    }

}
