<?php

class Addfaqs_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getpageLists()
    {
        $result = $this->db->get('pharma_faqs');
        return $result->result_array();
    }

    public function setPage()
    {
        if (!$this->db->insert('pharma_faqs', array( 'faq_status' => $_POST['faq_status'],'faq_desc' => $_POST['faq_desc'],'faq_title' => $_POST['faq_title'],
        
        'faq_order' => $_POST['faq_order']
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOnePage($id)
    {
        $query = $this->db->query("select * from pharma_faqs where faq_id='".$id."'");
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
         if ($id > 0 and isset($_POST['addfaq']) ) {
          
            if (!$this->db->where('faq_id', $id)->update('pharma_faqs', array(
                'faq_status' => $_POST['faq_status'],'faq_desc' => $_POST['faq_desc'],'faq_title' => $_POST['faq_title'],'faq_order' => $_POST['faq_order']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
       

        
       
    }

}
