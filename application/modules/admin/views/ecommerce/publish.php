<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$button_title?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form name="frm" method="post" action="" enctype="multipart/form-data">
    <section class="content">
      <div class="container-fluid">
      
        <div class="row">
          
          <div class="col-md-12">

            <div class="col-md-12 col-sm-12">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Product Details</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " id="descriptiontab-tab" data-toggle="pill" href="#descriptiontab" role="tab" aria-controls="descriptiontab" aria-selected="true">Description tabs</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Images</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">SEO Tags</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  
                  <!-- Product details --> 
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                     
                      <!-- start row -->
                      <div class="row"> 
                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Select Product Category</label>
                              <select class="form-control select2" id="IDselectbox4" name="category_id" style="width: 100%;">
                              <?=$categorylist;?>
                               
                              </select>
                            </div>
                            
                        </div>

                        <div class="col-md-4">

<div class="form-group">
  <label>Select Product Type</label>
  <select class="form-control select2" id="IDselectbox5" name="product_type" style="width: 100%;">
  
  <option value="pmed" <?php if(isset($products_edit['product_type']) and $products_edit['product_type']=='pmed') echo 'selected'; ?>>P-Med</option>
  <option value="gsl" <?php if(isset($products_edit['product_type']) and $products_edit['product_type']=='gsl') echo 'selected'; ?>>GSL</option>
  <option value="pmedgsl" <?php if(isset($products_edit['product_type']) and $products_edit['product_type']=='pmedgsl') echo 'selected'; ?>>P-Med-Plus-GSL</option>
   
  </select>
</div>

</div>
                       
                      </div> 
                      <!-- end row -->

                      <!-- start row -->
                      <div class="row">  

                        <div class="col-md-4">

                          <div class="form-group">
                            <label for="productname">Product Name <span>*</span></label>
                            <input type="text" class="form-control" id="productname" value="<?php 
                            
                            
                            if(isset($_POST['productname'])) echo $_POST["productname"];
                            
                            if(isset($products_edit['product_title'])){
                              echo $products_edit['product_title'];
                            }
                            
                            
                            ?>" name="product_title" placeholder="" />
                          </div>

                        </div>

                        <div class="col-md-4">

                          <div class="form-group">
                            <label for="tagline">Tag Line</label>
                            <input type="text" class="form-control" id="tagline" value="<?php 
                            
                            if (isset($products_edit['product_tagline'])) {
                              echo $products_edit['product_tagline'];
                            }
                            
                            ?>" name="product_tagline" placeholder="" />
                          </div>

                        </div>

                      </div> 
                      <!-- end row --> 


                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-8">

                          <div class="form-group">
                            <label>Intro Text</label>
                            <textarea class="form-control" rows="3" id="product_introtext" name="product_introtext" placeholder="Enter ..."><?php 
                            
                            if (isset($products_edit['product_introtext'])) {
                              echo $products_edit['product_introtext'];
                            }
                            
                            ?></textarea>
                          </div>

                        </div>
                      </div> 
                      <!-- end row --> 


                      <!-- start row -->
                      <div class="row">  

                        <div class="col-md-4">

                          <div class="form-group">
                            <label for="price">Price <span>*</span></label>
                            <input type="text" class="form-control" id="price" value="<?php 
                            
                            if (isset($products_edit['product_actual_price'])) {
                              echo $products_edit['product_actual_price'];
                            }
                            
                            ?>" name="product_actual_price" placeholder="" />
                          </div>

                        </div>

                         <div class="col-md-4">

                          <div class="form-group">
                            <label for="discountedprice">Discounted Price</label>
                            <input type="text" class="form-control" id="discountedprice" name="product_discounted_price" value="<?php 
                            
                            if (isset($products_edit['product_discounted_price'])) {
                              echo $products_edit['product_discounted_price'];
                            }
                            
                            ?>" placeholder="" />
                          </div>

                        </div>

                      </div> <!-- end row --> 


                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Brand</label>
                              <select id="IDselectbox1" class="form-control select2" name="brand_id" style="width: 100%;">
                                <option >None</option>
                                <?=$brandlist;?>
                              </select>
                            </div>

                        </div> 

                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Offer</label>
                              <select id="IDselectbox2" class="form-control select2" name="offer_id" style="width: 100%;">
                                <option >None</option>
                                <?=$offerlist;?>

                              </select>
                            </div>

                        </div> 

                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Sale Offer</label>
                              <select id="IDselectbox3" class="form-control select2" name="sale_offer_id" style="width: 100%;">
                                <option >None</option>
                                <?=$saleofferlist;?>
                              </select>
                            </div>
                            
                        </div>   

                      </div>
                      <!-- end row -->  

                      <!-- start row -->
                      <div class="row"> 
                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Order</label>
                              <select class="form-control select2" name="product_order" style="width: 100%;">
                               
                               <?php

                               if(isset($_POST['productorder']))
                               $prdorder = $_POST['productorder'];

                               if(isset($products_edit['product_order']))
                               $prdorder = $products_edit['product_order'];
                               
                               for ($i=1;$i<100;$i++) {
                                
                                if($prdorder==$i)
                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                else
                                echo '<option value="'.$i.'">'.$i.'</option>';

                               }

                               ?>
                              </select>
                            </div>
                            
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control select2" name="product_status" style="width: 100%;">
                                <option <?php 

if(isset($_POST['productactive']) and $_POST['productactive']==1)
echo 'selected';

if(isset($products_edit['product_status']) and $products_edit['product_status']==1)
echo 'selected';
                                
                                
                                
                                

                                
                                
                                ?> value="1">Active</option>
                                <option value="0"
                                
                                <?php 
                                
                                
                                if(isset($_POST['productactive']) and $_POST['productactive']==0)
                                echo 'selected';
                                
                                if(isset($products_edit['product_status']) and $products_edit['product_status']==0)
                                echo 'selected';
                                

                                
                                
                                ?>
                                
                                >Deactive</option>
                              </select>
                            </div>
                            
                        </div> 
                      </div> 
                      <!-- end row -->

                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-12">

                        <button type="submit" name="addproduct" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Submit</button>

                        </div> 


                      </div>
                      <!-- end row -->  

                     
                  </div>
                  <!-- End Product details --> 

                  <div class="tab-pane fade" id="descriptiontab" role="tabpanel" aria-labelledby="descriptiontab-tab">
                     
                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-4">

                          <div class="form-group">
                            <label for="tabname">Tab Name</label>
                            <input type="text" class="form-control" id="tabname" name="tab_title" placeholder=""  />
                          </div>

                        </div>
                      </div>

                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-8">

                          <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" id="tab_description" name="tab_desc" placeholder="Enter ..." ></textarea>
                          </div>

                        </div>
                      </div> 
                      <!-- end row -->

                      <!-- start row -->
                      <div class="row"> 
                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Order</label>
                              <select class="form-control select2" id="tab_order" name="tab_order" style="width: 100%;">
                              <?php
                               
                               for ($i=1;$i<100;$i++) {
                                
                              
                                echo '<option value="'.$i.'">'.$i.'</option>';

                               }

                               ?>
                              </select>
                            </div>
                            
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control select2" id="tab_Status" name="tab_status" style="width: 100%;">
                                <option  value="1">Active</option>
                                <option value="0">Deactive</option>
                              </select>
                            </div>
                            
                        </div> 
                      </div> 
                      <!-- end row -->

                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                              <input type="button" id="add-tabs" class="btn btn-success" value="Add New Tab"><input type="hidden" id="updatetab" value="0">
                              <input type="hidden" id="selectedtd" value="">
                            </div>

                        </div> 


                      </div>
                      <!-- end row --> 

                      <div class="row mt-5">
                        <div class="col-md-12">
                          <table class="table table-bordered">
                              <tbody><tr>
                                
                                <th>Tab Name</th>
                                <th width="10%">Order</th>
                                <th width="10%">Status</th>
                                <th width="10%">Action</th>
                              </tr>

                              <?php

$dynamic_id=0;
                              
                              if(isset($products_tabs)) {

                                $dynamic_id=1;

                                foreach($products_tabs as $product_tab) {

                                  echo '<tr id="tr_id_'.$dynamic_id.'"><td>'.$product_tab['tab_title'].'<input type="hidden" name="tab_name[]" id="tab_name_hidden" value="'.$product_tab['tab_title'].'"></td><td>'.$product_tab['tab_order'].'<input type="hidden" name="tabs_order[]" id="tab_order_hidden" value="'.$product_tab['tab_order'].'"></td><td>'.$product_tab['tab_status'].'<input type="hidden" name="tab_statuses[]" id="tab_status_hidden" value="'.$product_tab['tab_status'].'"><input type="hidden" id="tab_desc_hidden" name="tabs_desc[]" value="'.$product_tab['tab_desc'].'"></td><td><i style="cursor:pointer;" id="edit-row" class="fas  fa-edit" customtag="'.$dynamic_id++.'" ></i></td><td><i class="fa fa-trash" id="delete-row" style="cursor:pointer;"></i></td></tr>';
                                }

                              }
                              
                              ?>
                              
                            </tbody></table>
                        </div>
                      </div>

                  </div>
                  <input type="hidden" id="dynamic_id" value="<?php if(isset($products_tabs)) {echo $dynamic_id-1;}else echo $dynamic_id; ?>">
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="exampleInputFile">Thumbnail image 1</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="product_img1" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6">
                          
                     

                      <?php
    
    if(isset($products_edit['product_img1']) and file_exists(FCPATH.'attachments\shop_images\\'.$products_edit['product_img1'])){
    
    ?>
    <img src="<?php  echo base_url('/attachments/shop_images/'.$products_edit['product_img1']); ?>" class="img-fluid img-responsive" />

    <br /><input type="checkbox" value="<?=$products_edit['product_img1']?>" name="delete_img1"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>

                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="exampleInputFile">Thumbnail image 2</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="product_img2" id="offerimage2" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6" style="padding-top:10px;">
                          
                      <?php



                     
    
if(isset($products_edit['product_img2']) and file_exists(FCPATH.'attachments\shop_images\\'.$products_edit['product_img2'])){
    
    ?>
    <img src="<?php  echo base_url('/attachments/shop_images/'.$products_edit['product_img2']); ?>" class="img-fluid2 img-responsive" />
    <br /><input type="checkbox" value="<?=$products_edit['product_img2']?>" name="delete_img2"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid2 img-responsive" />';


    }?>

                      </div>
                    </div>

                    <!-- start row -->
                      <div class="row">

                        <div class="col-md-12">

                        <button type="submit" name="addproduct" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Submit</button>
                        </div> 


                      </div>
                      <!-- end row --> 
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                     <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="exampleInputFile">Profile page banner image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6">
                          
                      <img src="" class="img-fluid img-responsive" />

                      </div>
                    </div> 


                    <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="exampleInputFile">Pharmacy thumbnail image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6">
                          
                      <img src="" class="img-fluid img-responsive" />

                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                     
                     <!-- start row -->
                        <div class="row">

                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="facebook">Meta title</label>
                              <input type="text" value="<?php 
                            
                            if (isset($products_edit['prod_metatitle'])) {
                              echo $products_edit['prod_metatitle'];
                            }
                            
                            ?>" class="form-control" id="facebook" name="prod_metatitle" placeholder="" kl_vkbd_parsed="true">
                            </div>

                           </div>

                            <div class="col-md-6">

                            <div class="form-group">
                              <label for="instagram">Meta Keyword </label>
                              <input type="text" class="form-control" id="instagram" name="prod_metakeyword" value="<?php 
                            
                            if (isset($products_edit['prod_metakeyword'])) {
                              echo $products_edit['prod_metakeyword'];
                            }
                            
                            ?>" placeholder="" kl_vkbd_parsed="true">
                            </div>

                            </div>

                           

                        </div> <!-- end row --> 

                        <!-- start row -->
                      <div class="row">

                        <div class="col-md-12">

                          <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control" rows="3" id="description" name="prod_metadesc" placeholder="Enter ..."><?php 
                            
                            if (isset($products_edit['prod_metadesc'])) {
                              echo $products_edit['prod_metadesc'];
                            }
                            
                            ?></textarea>
                          </div>

                        </div>
                      </div> 
                      <!-- end row --> 

                      <!-- start row -->
                      <div class="row">

                        <div class="col-md-12">

                        <button type="submit" name="addproduct" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>submit</button>

                        </div> 


                      </div>
                      <!-- end row --> 

                      
                  
                  </div>

                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>

          </div>
          
          <input type="hidden"  id="IDSelect_brand_id" value="<?php
                     
                     if(isset($products_edit['brand_id']))
                     echo $products_edit['brand_id'];
                     
                     
                     
                     ?>">


<input type="hidden"  id="IDSelect_offer_id" value="<?php
                     
                     if(isset($products_edit['offer_id']))
                     echo $products_edit['offer_id'];
                     
                     
                     
                     ?>">

<input type="hidden"  id="IDSelect_sale_offer_id" value="<?php
                     
                     if(isset($products_edit['sale_offer_id']))
                     echo $products_edit['sale_offer_id'];
                     
                     
                     
                     ?>">

<input type="hidden"  id="IDSelect_category_id" value="<?php
                     
                     if(isset($products_edit['category_id']))
                     echo $products_edit['category_id'];
                     
                     
                     
                     ?>">







        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->