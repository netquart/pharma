<?php

class Addtestimonials_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getpageLists()
    {
        $result = $this->db->get('pharma_testimonials');
        return $result->result_array();
    }

    public function setPage($img)
    {
        if (!$this->db->insert('pharma_testimonials', array( 'testimonial_firstname' => $_POST['testimonial_firstname'],'testimonial_desc' => $_POST['testimonial_desc'],'testimonial_image' => $img,'testimonial_order' => $_POST['testimonial_order'],'testimonial_status' => $_POST['testimonial_status'],

        'testimonial_lastname' => $_POST['testimonial_lastname'],
         'testimonial_designation' => $_POST['testimonial_designation'],
         'testimonial_company' => $_POST['testimonial_company'],
         'testimonial_date' => strtotime($_POST['testimonial_date']),
         'testimonial_url' => $_POST['testimonial_url'],
         'testimonial_rating' => $_POST['testimonial_rating']))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOnePage($id)
    {
        $query = $this->db->query("select * from pharma_testimonials where testimonial_id='".$id."'");
        
     
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
            if (file_exists(realpath('.\attachments\shop_images\testimonial_images\\'.$_POST['delete_img']))) {
             unlink(realpath('.\attachments\shop_images\testimonial_images\\'.$_POST['delete_img']));
             }
           }

        if ($id > 0 and isset($_POST['addtestimonial']) and $img!='') {
          
            if (!$this->db->where('testimonial_id', $id)->update('pharma_testimonials', array(
                'testimonial_firstname' => $_POST['testimonial_firstname'],'testimonial_desc' => $_POST['testimonial_desc'],'testimonial_image' => $img,'testimonial_order' => $_POST['testimonial_order'],'testimonial_status' => $_POST['testimonial_status'],

               'testimonial_lastname' => $_POST['testimonial_lastname'],
                'testimonial_designation' => $_POST['testimonial_designation'],
                'testimonial_company' => $_POST['testimonial_company'],
                'testimonial_date' => strtotime($_POST['testimonial_date']),
                'testimonial_url' => $_POST['testimonial_url'],
                'testimonial_rating' => $_POST['testimonial_rating']
               
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
        if ($id > 0 and isset($_POST['addtestimonial']) and $img=='') {
          
            if (!$this->db->where('testimonial_id', $id)->update('pharma_testimonials', array(
                'testimonial_firstname' => $_POST['testimonial_firstname'],'testimonial_desc' => $_POST['testimonial_desc'],'testimonial_order' => $_POST['testimonial_order'],'testimonial_status' => $_POST['testimonial_status'],
                'testimonial_lastname' => $_POST['testimonial_lastname'],
                'testimonial_designation' => $_POST['testimonial_designation'],
                'testimonial_company' => $_POST['testimonial_company'],
                'testimonial_date' => strtotime($_POST['testimonial_date']),
                'testimonial_url' => $_POST['testimonial_url'],
                'testimonial_rating' => $_POST['testimonial_rating']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }

        
       
    }

}
