<?php

class Addsplashpage_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getpageLists()
    {
        $result = $this->db->get('pharma_splashpage');
        return $result->result_array();
    }

    public function setPage($img)
    {
        if (!$this->db->insert('pharma_splashpage', array( 'splash_title' => $_POST['splash_title'],'splash_desc' => $_POST['splash_desc'],'splash_image' => $img,'splash_status' => $_POST['splash_status'],'splash_created_date'=>time(),'splash_url' => $_POST['splash_url'],'splash_new_tab' => $_POST['splash_new_tab'],'splash_type'=>$_POST['splash_type']
        
        
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOnePage($id)
    {
        $query = $this->db->query("select * from pharma_splashpage where splash_id='".$id."'");
        
     
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
            if (file_exists(realpath('.\attachments\shop_images\splash_images\\'.$_POST['delete_img']))) {
             unlink(realpath('.\attachments\shop_images\splash_images\\'.$_POST['delete_img']));
             }
           }


        if ($id > 0 and isset($_POST['addsplashpage']) and $img!='') {
          
            if (!$this->db->where('splash_id', $id)->update('pharma_splashpage', array(
                'splash_title' => $_POST['splash_title'],'splash_desc' => $_POST['splash_desc'],'splash_image' => $img,'splash_status' => $_POST['splash_status'],'splash_url' => $_POST['splash_url'],'splash_new_tab' => $_POST['splash_new_tab'],'splash_type'=>$_POST['splash_type']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
        if ($id > 0 and isset($_POST['addsplashpage']) and $img=='') {
          
            if (!$this->db->where('splash_id', $id)->update('pharma_splashpage', array(
                'splash_title' => $_POST['splash_title'],'splash_desc' => $_POST['splash_desc'],'splash_status' => $_POST['splash_status'],'splash_url' => $_POST['splash_url'],'splash_new_tab' => $_POST['splash_new_tab'],'splash_type'=>$_POST['splash_type']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
       
    }

}
