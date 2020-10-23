<?php

class Addcoupons_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBrands()
    {
        $result = $this->db->get('brands');
        return $result->result_array();
    }

    public function setBrand($name)
    {
        if (!$this->db->insert('brands', array('name' => $name))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function AddSpecialOffer($imgname)
    {
        if (!$this->db->insert('pharma_specialoffers', array('offer_title' => $_POST['offer_title'],'offer_tagline' => $_POST['offer_tagline'],'offer_enddate' => strtotime($_POST['offer_enddate']),'offer_desc' => $_POST['offer_desc'],'offer_order' => $_POST['offer_order'],'offer_image' => $imgname,
        
        'offer_status' => $_POST['offer_status']

        
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function getOneCoupon($id)
    {
        $query = $this->db->query("select * from pharma_specialoffers where offer_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function updateCoupon($id,$img) {

        if (isset($_POST['delete_img']) and $_POST['delete_img']!='') {
           if (file_exists(realpath('.\attachments\shop_images\special_offers\\'.$_POST['delete_img']))) {
            unlink(realpath('.\attachments\shop_images\special_offers\\'.$_POST['delete_img']));
            }
          }


        if ($id > 0 and isset($_POST['add_special_offer']) and $img=='') {
          
            if (!$this->db->where('offer_id', $id)->update('pharma_specialoffers', array(
                'offer_title' => $_POST['offer_title'],'offer_tagline' => $_POST['offer_tagline'],'offer_enddate' => strtotime($_POST['offer_enddate']),'offer_desc' => $_POST['offer_desc'],'offer_order' => $_POST['offer_order'],
        
                'offer_status' => $_POST['offer_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }

        else if ($id > 0 and isset($_POST['add_special_offer']) and $img!='') {

          /*  $this->db->where('offer_id', $id)->update('pharma_specialoffers', array(
                'offer_title' => $_POST['offer_title'],'offer_tagline' => $_POST['offer_tagline'],'offer_enddate' => $_POST['offer_enddate'],'offer_desc' => $_POST['offer_desc'],'offer_order' => $_POST['offer_order'],
                'offer_image' => $img,
                'offer_status' => $_POST['offer_status']
            ));

            echo $this->db->last_query();exit;*/
          
            if (!$this->db->where('offer_id', $id)->update('pharma_specialoffers', array(
                'offer_title' => $_POST['offer_title'],'offer_tagline' => $_POST['offer_tagline'],'offer_enddate' => strtotime($_POST['offer_enddate']),'offer_desc' => $_POST['offer_desc'],'offer_order' => $_POST['offer_order'],
                'offer_image' => $img,
                'offer_status' => $_POST['offer_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }


    }

}
