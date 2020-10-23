<?php

class Products_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function deleteProduct($id)
    {
        $this->db->trans_begin();
        $this->db->where('for_id', $id);
        if (!$this->db->delete('products_translations')) {
            log_message('error', print_r($this->db->error(), true));
        }

        $this->db->where('id', $id);
        if (!$this->db->delete('products')) {
            log_message('error', print_r($this->db->error(), true));
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            show_error(lang('database_error'));
        } else {
            $this->db->trans_commit();
        }
    }

    public function productsCount($search_title = null, $category = null)
    {
        if ($search_title != null) {
            $search_title = trim($this->db->escape_like_str($search_title));
            $this->db->where("(products_translations.title LIKE '%$search_title%')");
        }
        if ($category != null) {
            $this->db->where('shop_categorie', $category);
        }
        $this->db->join('products_translations', 'products_translations.for_id = products.id', 'left');
        $this->db->where('products_translations.abbr', MY_DEFAULT_LANGUAGE_ABBR);
        return $this->db->count_all_results('products');
    }

   

    public function numShopProducts()
    {
        return $this->db->count_all_results('products');
    }

    public function getOneProduct($id)
    {
        $this->db->select('*');
        $this->db->where('product_id', $id);
       
        $query = $this->db->get('pharma_products');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function getProductTabs($id)
    {
        $this->db->select('*');
        $this->db->where('product_id', $id);
       
        $query = $this->db->get('pharma_product_tabs');
        
        $array = $query->result_array();

        $retarr = array();

        foreach($array as $arr){

            
           
            $retarr[] = $arr;

        }
        
        return $retarr;
    }

    public function productStatusChange($id, $to_status)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('products', array('visibility' => $to_status));
        return $result;
    }

    public function setProduct($post, $id = 0)
    {
        if (!isset($post['brand_id'])) {
            $post['brand_id'] = null;
        }
        if (!isset($post['virtual_products'])) {
            $post['virtual_products'] = null;
        }
        $this->db->trans_begin();
        $is_update = false;
        if ($id > 0) {
            $is_update = true;
            if (!$this->db->where('id', $id)->update('products', array(
                        'image' => $post['image'] != null ? $_POST['image'] : $_POST['old_image'],
                        'shop_categorie' => $post['shop_categorie'],
                        'quantity' => $post['quantity'],
                        'in_slider' => $post['in_slider'],
                        'position' => $post['position'],
                        'virtual_products' => $post['virtual_products'],
                        'brand_id' => $post['brand_id'],
                        'time_update' => time()
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        } else {
            /*
             * Lets get what is default tranlsation number
             * in titles and convert it to url
             * We want our plaform public ulrs to be in default 
             * language that we use
             */
            $i = 0;
            foreach ($_POST['translations'] as $translation) {
                if ($translation == MY_DEFAULT_LANGUAGE_ABBR) {
                    $myTranslationNum = $i;
                }
                $i++;
            }
            if (!$this->db->insert('products', array(
                        'image' => $post['image'],
                        'shop_categorie' => $post['shop_categorie'],
                        'quantity' => $post['quantity'],
                        'in_slider' => $post['in_slider'],
                        'position' => $post['position'],
                        'virtual_products' => $post['virtual_products'],
                        'folder' => $post['folder'],
                        'brand_id' => $post['brand_id'],
                        'time' => time()
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
            $id = $this->db->insert_id();

            $this->db->where('id', $id);
            if (!$this->db->update('products', array(
                        'url' => except_letters($_POST['title'][$myTranslationNum]) . '_' . $id
                    ))) {
                log_message('error', print_r($this->db->error(), true));
            }
        }
        $this->setProductTranslation($post, $id, $is_update);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            show_error(lang('database_error'));
        } else {
            $this->db->trans_commit();
        }
    }

    private function setProductTranslation($post, $id, $is_update)
    {
        $i = 0;
        $current_trans = $this->getTranslations($id);
        foreach ($post['translations'] as $abbr) {
            $arr = array();
            $emergency_insert = false;
            if (!isset($current_trans[$abbr])) {
                $emergency_insert = true;
            }
            $post['title'][$i] = str_replace('"', "'", $post['title'][$i]);
            $post['price'][$i] = str_replace(' ', '', $post['price'][$i]);
            $post['price'][$i] = str_replace(',', '.', $post['price'][$i]);
            $post['price'][$i] = preg_replace("/[^0-9,.]/", "", $post['price'][$i]);
            $post['old_price'][$i] = str_replace(' ', '', $post['old_price'][$i]);
            $post['old_price'][$i] = str_replace(',', '.', $post['old_price'][$i]);
            $post['old_price'][$i] = preg_replace("/[^0-9,.]/", "", $post['old_price'][$i]);
            $arr = array(
                'title' => $post['title'][$i],
                'basic_description' => $post['basic_description'][$i],
                'description' => $post['description'][$i],
                'price' => $post['price'][$i],
                'old_price' => $post['old_price'][$i],
                'abbr' => $abbr,
                'for_id' => $id
            );
            if ($is_update === true && $emergency_insert === false) {
                $abbr = $arr['abbr'];
                unset($arr['for_id'], $arr['abbr'], $arr['url']);
                if (!$this->db->where('abbr', $abbr)->where('for_id', $id)->update('products_translations', $arr)) {
                    log_message('error', print_r($this->db->error(), true));
                }
            } else {
                if (!$this->db->insert('products_translations', $arr)) {
                    log_message('error', print_r($this->db->error(), true));
                }
            }
            $i++;
        }
    }

    public function getTranslations($id)
    {
        $this->db->where('for_id', $id);
        $query = $this->db->get('products_translations');
        $arr = array();
        foreach ($query->result() as $row) {
            $arr[$row->abbr]['title'] = $row->title;
            $arr[$row->abbr]['basic_description'] = $row->basic_description;
            $arr[$row->abbr]['description'] = $row->description;
            $arr[$row->abbr]['price'] = $row->price;
            $arr[$row->abbr]['old_price'] = $row->old_price;
        }
        return $arr;
    }

    public function addProduct($img1,$img2)
    {

        if (!$this->db->insert('pharma_products', array('product_type' => $_POST['product_type'],'product_title' => $_POST['product_title'],'product_tagline' => $_POST['product_tagline'],'product_introtext' => $_POST['product_introtext'],'product_actual_price' => $_POST['product_actual_price'],'product_discounted_price' => $_POST['product_discounted_price'],
        
        'brand_id' => $_POST['brand_id'],
        'offer_id' => $_POST['offer_id'],
        'sale_offer_id' => $_POST['sale_offer_id'],
        'category_id' => $_POST['category_id'],
        
        'prod_metatitle' => $_POST['prod_metatitle'],
        'prod_metakeyword' => $_POST['prod_metakeyword'],
        'prod_metadesc' => $_POST['prod_metadesc'],
        'product_order' => $_POST['product_order'],
        'product_status' => $_POST['product_status'],
        'product_img1'=>$img1,
        'product_img2'=>$img2
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }

        return $this->db->insert_id();

    }
  public function updateProduct($img1,$img2,$id)
    {

        if (isset($_POST['delete_img1']) and $_POST['delete_img1']!='') {
            if (file_exists(realpath('.\attachments\shop_images\\'.$_POST['delete_img1']))) {
             unlink(realpath('.\attachments\shop_images\\'.$_POST['delete_img1']));
             }
           }

           if (isset($_POST['delete_img2']) and $_POST['delete_img2']!='') {
            if (file_exists(realpath('.\attachments\shop_images\\'.$_POST['delete_img2']))) {
             unlink(realpath('.\attachments\shop_images\\'.$_POST['delete_img2']));
             }
           }

        $array1 = array();

        if($img1!='' and $img2=='') {

         

                if (!$this->db->where('product_id', $id)->update('pharma_products', array('product_type' => $_POST['product_type'],'product_title' => $_POST['product_title'],'product_tagline' => $_POST['product_tagline'],'product_introtext' => $_POST['product_introtext'],'product_actual_price' => $_POST['product_actual_price'],'product_discounted_price' => $_POST['product_discounted_price'],
            
                'brand_id' => $_POST['brand_id'],
                'offer_id' => $_POST['offer_id'],
                'sale_offer_id' => $_POST['sale_offer_id'],
                'category_id' => $_POST['category_id'],
                
                'prod_metatitle' => $_POST['prod_metatitle'],
                'prod_metakeyword' => $_POST['prod_metakeyword'],
                'prod_metadesc' => $_POST['prod_metadesc'],
                'product_order' => $_POST['product_order'],
                'product_status' => $_POST['product_status'],
               
                'product_img1'=>$img1
               
                ))) {
                    log_message('error', print_r($this->db->error(), true));
                    show_error(lang('database_error'));
                }

        }

        if($img2!='' and $img1=='') {

           

                if (!$this->db->where('product_id', $id)->update('pharma_products', array('product_type' => $_POST['product_type'],'product_title' => $_POST['product_title'],'product_tagline' => $_POST['product_tagline'],'product_introtext' => $_POST['product_introtext'],'product_actual_price' => $_POST['product_actual_price'],'product_discounted_price' => $_POST['product_discounted_price'],
            
                'brand_id' => $_POST['brand_id'],
                'offer_id' => $_POST['offer_id'],
                'sale_offer_id' => $_POST['sale_offer_id'],
                'category_id' => $_POST['category_id'],
                
                'prod_metatitle' => $_POST['prod_metatitle'],
                'prod_metakeyword' => $_POST['prod_metakeyword'],
                'prod_metadesc' => $_POST['prod_metadesc'],
                'product_order' => $_POST['product_order'],
                'product_status' => $_POST['product_status'],
                'product_img2'=>$img2
               
                ))) {
                    log_message('error', print_r($this->db->error(), true));
                    show_error(lang('database_error'));
                }

        }

        if($img2!='' and $img1!='') {

            if (!$this->db->where('product_id', $id)->update('pharma_products', array('product_type' => $_POST['product_type'],'product_title' => $_POST['product_title'],'product_tagline' => $_POST['product_tagline'],'product_introtext' => $_POST['product_introtext'],'product_actual_price' => $_POST['product_actual_price'],'product_discounted_price' => $_POST['product_discounted_price'],
        
            'brand_id' => $_POST['brand_id'],
            'offer_id' => $_POST['offer_id'],
            'sale_offer_id' => $_POST['sale_offer_id'],
            'category_id' => $_POST['category_id'],
            
            'prod_metatitle' => $_POST['prod_metatitle'],
            'prod_metakeyword' => $_POST['prod_metakeyword'],
            'prod_metadesc' => $_POST['prod_metadesc'],
            'product_order' => $_POST['product_order'],
            'product_status' => $_POST['product_status'],
            'product_img2'=>$img2,
            'product_img1'=>$img1
           
            ))) {
                log_message('error', print_r($this->db->error(), true));
                show_error(lang('database_error'));
            }

        }

         if($img2=='' and $img1=='') {

            if (!$this->db->where('product_id', $id)->update('pharma_products', array('product_type' => $_POST['product_type'],'product_title' => $_POST['product_title'],'product_tagline' => $_POST['product_tagline'],'product_introtext' => $_POST['product_introtext'],'product_actual_price' => $_POST['product_actual_price'],'product_discounted_price' => $_POST['product_discounted_price'],
        
            'brand_id' => $_POST['brand_id'],
            'offer_id' => $_POST['offer_id'],
            'sale_offer_id' => $_POST['sale_offer_id'],
            'category_id' => $_POST['category_id'],
            
            'prod_metatitle' => $_POST['prod_metatitle'],
            'prod_metakeyword' => $_POST['prod_metakeyword'],
            'prod_metadesc' => $_POST['prod_metadesc'],
            'product_order' => $_POST['product_order'],
            'product_status' => $_POST['product_status']
            
           
            ))) {
                log_message('error', print_r($this->db->error(), true));
                show_error(lang('database_error'));
            }

        }

      

       

    }
    public function addProductTabs($prd_id){

        if(is_array($_POST['tab_name'])) {
            $i=0;
            foreach($_POST['tab_name'] as $key => $value) {

                if (!$this->db->insert('pharma_product_tabs', array('product_id' => $prd_id,'tab_title' => $_POST['tab_name'][$i],'tab_desc' => $_POST['tabs_desc'][$i],'tab_order' => $_POST['tabs_order'][$i],'tab_status' => $_POST['tab_statuses'][$i]
    
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
            }

            $i++;

            }
        }
        else {

            if (!$this->db->insert('pharma_product_tabs', array('product_id' => $prd_id,'tab_title' => $_POST['tab_title'],'tab_desc' => $_POST['tab_desc'],'tab_order' => $_POST['tab_order'],'tab_status' => $_POST['tab_status']
    
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
            }

        }

    }

    public function updateProductTabs($prd_id){

        if (!$this->db->where('product_id', $prd_id)->delete('pharma_product_tabs')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
        
        
        if(is_array($_POST['tab_name'])) {
            $i=0;
            foreach($_POST['tab_name'] as $key => $value) {

                if (!$this->db->insert('pharma_product_tabs', array('product_id' => $prd_id,'tab_title' => $_POST['tab_name'][$i],'tab_desc' => $_POST['tabs_desc'][$i],'tab_order' => $_POST['tabs_order'][$i],'tab_status' => $_POST['tab_statuses'][$i]
    
        ))) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
            }

            $i++;

            }
        }
      

    }

    public function getProducts()
    {
        $result = $this->db->get('pharma_products');
        
        $array = $result->result_array();

        $retarr = array();

        foreach($array as $arr){

            $arr['cat_name'] = $this->getCatName($arr['category_id']);
           
            $retarr[] = $arr;

        }
        
        return $retarr;
    }

    public function getCatName($catid){

        $query = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$catid.'\' ');
      
        $shop_categorie = $query->row_array();

        $title = array();

        if($shop_categorie['cat_parent']!=0)
        {

          $title[] = $shop_categorie['cat_title'];
          $query2 = $this->db->query('SELECT * from pharma_categories where cat_id=\''.$shop_categorie['cat_parent'].'\' ');
    
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
    
       //$shop_categorie->cat_title = implode('->',$title); 
      
      }
      return implode('->',$title);
    }

    public function updateProductStock($data){

        if (!$this->db->where('product_id', $data['product_id'])->update('pharma_products', array(
            'product_stock' => $data['stock_value']
                ))) {
            log_message('error', print_r($this->db->error(), true));
        }
    }

}
