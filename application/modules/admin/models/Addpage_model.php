<?php

class Addpage_model extends CI_Model
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

    public function setPage($img)
    {
        if (!$this->db->insert('pharma_static_pages', array('page_title' => $_POST['page_title'],'page_metakeyword' => $_POST['page_metakeyword'],'page_meta_desc' => $_POST['page_meta_desc'],'page_desc' => $_POST['page_desc'],'page_status' => $_POST['page_status'],
        
        'page_meta_title' => $_POST['page_meta_title'],

        'page_slug' => $_POST['page_slug'],

        'page_created_date' => time(),

        'page_image' => $img
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOnePage($id)
    {
        $query = $this->db->query("select * from pharma_static_pages where page_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function updatePage($id,$img) {

        if (isset($_POST['delete_img']) and $_POST['delete_img']!='') {
            if (file_exists(realpath('.\attachments\shop_images\page_images\\'.$_POST['delete_img']))) {
             unlink(realpath('.\attachments\shop_images\page_images\\'.$_POST['delete_img']));
             }
           }


        if ($id > 0 and isset($_POST['addpage']) and $img!='' ) {
          
            if (!$this->db->where('page_id', $id)->update('pharma_static_pages', array(
                'page_title' => $_POST['page_title'],'page_metakeyword' => $_POST['page_metakeyword'],'page_meta_desc' => $_POST['page_meta_desc'],'page_desc' => $_POST['page_desc'],'page_status' => $_POST['page_status'],
        
        'page_meta_title' => $_POST['page_meta_title'],

        'page_slug' => $_POST['page_slug'],

       

        'page_image' => $img
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }

        else if ($id > 0 and isset($_POST['addpage']) and $img=='' ) {
          
            if (!$this->db->where('page_id', $id)->update('pharma_static_pages', array(
                'page_title' => $_POST['page_title'],'page_metakeyword' => $_POST['page_metakeyword'],'page_meta_desc' => $_POST['page_meta_desc'],'page_desc' => $_POST['page_desc'],'page_status' => $_POST['page_status'],
        
        'page_meta_title' => $_POST['page_meta_title'],

        'page_slug' => $_POST['page_slug']

       
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
       
    }

}
