<?php

class Categories_model extends CI_Model
{
    public  $cat_title ; 

   
    public $CatListArr;


    public function __construct()
    {
        parent::__construct();
        $cat_title='';
       
         $this->CatListArr = array();
       
    }

    public function categoriesCount()
    {
        return $this->db->count_all_results('shop_categories');
    }

    public function getShopCategories($limit = null, $start = null)
    {
        $limit_sql = '';
        if ($limit !== null && $start !== null) {
            $limit_sql = ' LIMIT ' . $start . ',' . $limit;
        }

        $query = $this->db->query('SELECT translations_first.*, (SELECT name FROM shop_categories_translations WHERE for_id = sub_for AND abbr = translations_first.abbr) as sub_is, shop_categories.position FROM shop_categories_translations as translations_first INNER JOIN shop_categories ON shop_categories.id = translations_first.for_id ORDER BY position ASC ' . $limit_sql);
        $arr = array();
        foreach ($query->result() as $shop_categorie) {
            $arr[$shop_categorie->for_id]['info'][] = array(
                'abbr' => $shop_categorie->abbr,
                'name' => $shop_categorie->name
            );
            $arr[$shop_categorie->for_id]['sub'][] = $shop_categorie->sub_is;
            $arr[$shop_categorie->for_id]['position'] = $shop_categorie->position;
        }
        return $arr;
    }

    public function deleteShopCategorie($id)
    {
        $this->db->trans_begin();
        $this->db->where('for_id', $id);
        if (!$this->db->delete('shop_categories_translations')) {
            log_message('error', print_r($this->db->error(), true));
        }

        $this->db->where('id', $id);
        $this->db->or_where('sub_for', $id);
        if (!$this->db->delete('shop_categories')) {
            log_message('error', print_r($this->db->error(), true));
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            show_error(lang('database_error'));
        } else {
            $this->db->trans_commit();
        }
    }

    public function setShopCategorie($post)
    {
        $this->db->trans_begin();
        if (!$this->db->insert('shop_categories', array('sub_for' => $post['sub_for']))) {
            log_message('error', print_r($this->db->error(), true));
        }
        $id = $this->db->insert_id();

        $i = 0;
        foreach ($post['translations'] as $abbr) {
            $arr = array();
            $arr['abbr'] = $abbr;
            $arr['name'] = $post['categorie_name'][$i];
            $arr['for_id'] = $id;
            if (!$this->db->insert('shop_categories_translations', $arr)) {
                log_message('error', print_r($this->db->error(), true));
            }
            $i++;
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            show_error(lang('database_error'));
        } else {
            $this->db->trans_commit();
        }
    }

    public function editShopCategorieSub($post)
    {
        $result = true;
        if ($post['editSubId'] != $post['newSubIs']) {
            $this->db->where('id', $post['editSubId']);
            if (!$this->db->update('shop_categories', array(
                        'sub_for' => $post['newSubIs']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
                show_error(lang('database_error'));
            }
        } else {
            $result = false;
        }
        return $result;
    }

    public function editShopCategorie($post)
    {
        $this->db->where('abbr', $post['abbr']);
        $this->db->where('for_id', $post['for_id']);
        if (!$this->db->update('shop_categories_translations', array(
                    'name' => $post['name']
                ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function editShopCategoriePosition($post)
    {
        $this->db->where('id', $post['editid']);
        if (!$this->db->update('shop_categories', array(
                    'position' => $post['new_pos']
                ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }




    public function getShopCategoriesList()
    {
        global $title_cat;

        $this->CatListArr = array();

        $query = $this->db->query('SELECT * from pharma_categories order by cat_order ASC');
        $arr = array();
        foreach ($query->result() as $shop_categorie) {
           
          //  $shop_categorie->cat_title='asdef';
          $title = array();
          
        
        
          if($shop_categorie->cat_parent!=0)
          {

            $title[] = $shop_categorie->cat_title;
            $query2 = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$shop_categorie->cat_parent.'\' ');
      
         $shop_categories = $query2->row_array();
         $title[] = $shop_categories['cat_title'];
        
          if($shop_categories['cat_parent']!=0)
          {
           
            $query3 = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$shop_categories['cat_parent'].'\' ');
      
            $shop_categories2 = $query3->row_array();

            $title[] = $shop_categories2['cat_title'];

            if($shop_categories2['cat_parent']!=0)
            {
              
              $query4 = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$shop_categories2['cat_parent'].'\' ');
        
              $shop_categories3 = $query4->row_array();
              $title[] = $shop_categories3['cat_title'];
            }

          }
         
        
          
          $title = array_reverse($title);
      
         $shop_categorie->cat_title = implode('->',$title); 
        
        }
          $arr[] = $shop_categorie;
          
        }

        
      
        return $arr;
    }

    public function getAllParent($catid , $title = array())
    {
      
      
        $query = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$catid.'\' ');
      
       $shop_categorie = $query->row_array();

         $title[] = $shop_categorie['cat_title'];
          if($shop_categorie['cat_parent']!=0)
          $this->getAllParent($shop_categorie['cat_parent'],$title);
          
          $title = array_reverse($title);

          $this->CatListArr =  $title;
        
        // echo $title_cat = implode('->',$title);
        // echo '<br />';
        
        
       
    }

   

}
