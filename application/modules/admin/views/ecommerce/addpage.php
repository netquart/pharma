
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$page_button?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><?=$page_button?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
              <?=$page_button?>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="addbrands" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label for="brandname">Page Title <span>*</span></label>
                      <input type="text" class="form-control" id="page_title"
                      
                      value="<?php
                        
                        if(isset($pageedit['page_title']))
                       echo $pageedit['page_title'];
                        
                        ?>"
                      
                      
                       name="page_title" placeholder="" />
                    </div>

                    <div class="col-md-12">

  <div class="form-group">
    <label>Page URL Slug</label>
    <input type="text" class="form-control"  id="page_slug" name="page_slug" value="<?php
      
      if(isset($pageedit['page_slug']))
     echo $pageedit['page_slug'];
      
      ?>" />
  </div>

</div>

                  </div>

                  

                </div> 
                <!-- end row -->  

               

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Page Content</label>
                      <textarea class="form-control" rows="3" id="page_description" name="page_desc" placeholder="Enter ..."><?php
                        
                        if(isset($pageedit['page_desc']))
                       echo $pageedit['page_desc'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 

                <div class="row">

<div class="col-md-6" style="margin-bottom:10px;">
<input type="checkbox" name="ifseo"  id="SEO" class="SEO" value="seo"> Seo
</div>
</div>
                <!-- end row --> 
                    <div class="row" id="hide_row" style="<?php 
                    
                    if(isset($pageedit['page_meta_title']) or isset($pageedit['page_metakeyword']) or isset($pageedit['page_meta_desc']))
                    echo '';
                    else
                    echo 'display:none;';
                    
                    ?>">

                    <div class="col-md-6">

<div class="form-group">
  <label for="offertagline">Meta Title</label>
  <input type="text" class="form-control" id="offertagline"
  
  value="<?php
    
    if(isset($pageedit['page_meta_title']))
   echo $pageedit['page_meta_title'];
    
    ?>"
  
  
   name="page_meta_title" placeholder="" />
</div>

</div>
                    <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertagline">Meta Keyword</label>
                      <input type="text" class="form-control" id="offertagline"
                      
                      value="<?php
                        
                        if(isset($pageedit['page_metakeyword']))
                       echo $pageedit['page_metakeyword'];
                        
                        ?>"
                      
                      
                       name="page_metakeyword" placeholder="" />
                    </div>

                  </div>

                 
                    </div>

                     <div class="row" id="hide_row2" style="<?php 
                    
                    if(isset($pageedit['page_meta_title']) or isset($pageedit['page_metakeyword']) or isset($pageedit['page_meta_desc']))
                    echo '';
                    else
                    echo 'display:none;';
                    
                    ?>">
                     <div class="col-md-12">

<div class="form-group">
  <label>Page Meta Description</label>
  <textarea class="form-control" rows="3" id="introtext" name="page_meta_desc" placeholder="Enter ..."><?php
    
    if(isset($pageedit['page_meta_desc']))
   echo $pageedit['page_meta_desc'];
    
    ?></textarea>
</div>

</div>
                     </div>
                
                    <div class="row">

<div class="col-md-6">
    
    <div class="form-group">
      <label for="offerimage">Page Image</label>
      
      <div class="input-group">
        <div class="custom-file">
          <input type="file" name="page_image" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
          <label class="custom-file-label" for="offerimage">Choose file</label>
        </div>
        
      </div>

    </div><!-- end form group -->

</div>

<div class="col-md-6">
    <?php
    
    

      if(isset($pageedit['page_image']) and file_exists(FCPATH.'attachments\shop_images\page_images\\'.$pageedit['page_image'])){
    
    ?>
    <img src="<?php  echo base_url('./attachments/shop_images/page_images/'.$pageedit['page_image']); ?>" class="img-fluid img-responsive" />
    <br /><input type="checkbox" value="<?=$pageedit['page_image']?>" name="delete_img"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>

</div>
</div>
                <!-- start row -->
                <div class="row">

               
                        <div class="col-md-4">

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control select2" name="page_status" style="width: 100%;">
                                <option selected="selected" value="1" <?php if(isset($pageedit['page_status']) and $pageedit['page_status']==1) echo 'selected'; ?>>Active</option>
                                <option value="0" <?php if(isset($pageedit['page_status']) and $pageedit['page_status']==0) echo 'selected'; ?>>Deactive</option>
                              </select>
                            </div>
                            
                        </div> 

                </div> 
            
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="addpage" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->

  </div>
  


