<?php

class Addcategory_model extends CI_Model
{
    public $CatListArr;
    public function __construct()
    {
        parent::__construct();
        $this->CatListArr = array();
    }

    public function getBrands()
    {
        $result = $this->db->get('brands');
        return $result->result_array();
    }

    public function setCategory()
    {
        if($_POST['cat_parent']!=0)
        $depth = $this->LevelDepth($_POST['cat_parent']);
        else
        $depth = 0;

        
        
        if (!$this->db->insert('pharma_categories', array('cat_title' => $_POST['cat_name'],'cat_parent' => $_POST['cat_parent'],'level_depth' => $depth,
        'cat_order' => $_POST['cat_order'],
        'cat_status' => $_POST['cat_status']
        
        
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function LevelDepth($catid){

        $query = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$catid.'\' ');
      
        $shop_categories = $query->row_array();
       
        $Depth = 1;
       
         if($shop_categories['cat_parent']!=0){

            $Depth = 2;

            $query2 = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$shop_categories['cat_parent'].'\' ');
      
        $shop_categories2 = $query2->row_array();

        if($shop_categories2['cat_parent']!=0){

            $Depth = 3;

            $query3 = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$shop_categories2['cat_parent'].'\' ');
      
        $shop_categories3 = $query3->row_array();

        if($shop_categories3['cat_parent']!=0){

            $Depth = 4;
        }


         }


         }
         return $Depth;

    }

     public function getcategoryList()
    {
        
       // $this->CatListArr = array();

        $query = $this->db->query("select * from pharma_categories order by cat_order ASC");
        
       $select = '';
        
      //  foreach ($query->result() as $row) {
         

          // $CategoriesFetch['categories'][$row->cat_id] = (array)$row;
          // $CategoriesFetch['parent_cats'][$row->cat_parent][] = $row->cat_id;
       // }

       $res = $query->result_array();
       
        //$this->buildCategoryHierarchy(0, $CategoriesFetch);

       foreach($res as $array){

        $select .= '<option value="'.$array['cat_id'].'">'.$array['cat_title'].'</option>';
       }

       // $pay_cat_restrictions = array();
      //  foreach ($this->CatListArr as $key => $value) {
       //     $select .= '<option value="'.$key.'">'.$value.'</option>';
       // }
        
        return $select;
    }

    public function getbrandList()
    {
        
        

        $query = $this->db->query("select * from pharma_brands order by brand_order ASC");
        
       $select = '';
        
        foreach ($query->result() as $row) {
            $select .= '<option value="'.$row->brand_id.'">'.$row->brand_name.'</option>';
        }
        
        return $select;
    }

    public function getofferList()
    {
        
       

        $query = $this->db->query("select * from pharma_specialoffers order by offer_order ASC");
        
       $select = '';
        
        foreach ($query->result() as $row) {
            $select .= '<option value="'.$row->offer_id.'">'.$row->offer_title.'</option>';
        }
        
        return $select;
    }

    public function getsaleofferList()
    {
        
       

        $query = $this->db->query("select * from pharma_saleoffer order by sale_order ASC");
        
       $select = '';
        
        foreach ($query->result() as $row) {
            $select .= '<option value="'.$row->saleoffer_id.'">'.$row->sale_title.'</option>';
        }
        
        return $select;
    }

    public function deleteBrand($id)
    {
        if (!$this->db->where('id', $id)->delete('brands')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }

    public function buildCategoryHierarchy($parent, $category)
    {
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                if (!isset($category['parent_cats'][$cat_id])) {
                    $adddashes = '';
                    if ($category['categories'][$cat_id]['level_depth'] == 1) {
                        $adddashes = ' - ';
                    }
                    if ($category['categories'][$cat_id]['level_depth'] == 2) {
                        $adddashes = ' - - ';
                    }

                    if ($category['categories'][$cat_id]['level_depth'] == 3) {
                        $adddashes = ' - - - ';
                    }

                    if ($category['categories'][$cat_id]['level_depth'] == 4) {
                        $adddashes = ' - - - - ';
                    }
    
                   
                    $this->CatListArr[$cat_id] = $adddashes . $category['categories'][$cat_id]['cat_title'];

                }
                
                if (isset($category['parent_cats'][$cat_id])) {
                     $adddashes = '';
                     if ($category['categories'][$cat_id]['level_depth'] == 1) {
                        $adddashes = ' - ';
                    }
                    if ($category['categories'][$cat_id]['level_depth'] == 2) {
                        $adddashes = ' - - ';
                    }

                    if ($category['categories'][$cat_id]['level_depth'] == 3) {
                        $adddashes = ' - - - ';
                    }

                    if ($category['categories'][$cat_id]['level_depth'] == 4) {
                        $adddashes = ' - - - - ';
                    }

                   
                
                    $this->CatListArr[$cat_id] = $adddashes . $category['categories'][$cat_id]['cat_title'];
    
                    $this->buildCategoryHierarchy($cat_id, $category);

                }
            }

        }
    }

    public function getOneCategory($id)
    {
        $query = $this->db->query("select * from pharma_categories where cat_id='".$id."'");
        
     
        return $query->row_array();
    }

    public function updateCategory($id) {


        if ($id > 0 and isset($_POST['addcategory'])) {

            if($_POST['cat_parent']!=0)
            $depth = $this->LevelDepth($_POST['cat_parent']);
            else
            $depth = 0;
          
            if (!$this->db->where('cat_id', $id)->update('pharma_categories', array(
                'cat_title' => $_POST['cat_name'],'cat_parent' => $_POST['cat_parent'],'level_depth' => $depth, 'cat_order' => $_POST['cat_order'],
                'cat_status' => $_POST['cat_status']
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
    }

}
