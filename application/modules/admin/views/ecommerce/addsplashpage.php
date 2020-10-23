
  
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

                <div class="row">

<div class="col-md-3">
<div class="form-group">
                      <label for="brandname">Splash Type<span>*</span></label><br />
<input type="radio" value="text" id="splashradio1" name="splash_type" <?php

if((isset($pageedit['splash_type']) and $pageedit['splash_type']=='text') or !isset($pageedit['splash_type']))
echo 'checked';


?>> Text<br />
<input type="radio" value="image" id="splashradio" name="splash_type" <?php

if(isset($pageedit['splash_type']) and $pageedit['splash_type']=='image')
echo 'checked';


?>> Image
</div>
</div>
</div>
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="brandname">Page Title <span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"
                      
                      value="<?php
                        
                        if(isset($pageedit['splash_title']))
                        echo $pageedit['splash_title'];
                        
                        ?>"
                      
                      
                       name="splash_title" placeholder="" />
                    </div>

                  </div>
               </div> 

               <div class="row" id="splash_url" style="<?php

if((isset($pageedit['splash_type']) and $pageedit['splash_type']=='text') or !isset($pageedit['splash_type']))
echo 'display:none;';




?>">

                    <div class="col-md-6">

                      <div class="form-group">
                        <label for="brandname">Splash Url <span>*</span></label>
                        <input type="text" class="form-control" id="offertitle"
                        
                        value="<?php
                          
                          if(isset($pageedit['splash_url']))
                        echo $pageedit['splash_url'];
                          
                          ?>"
                        
                        
                        name="splash_url" placeholder="" />
                      </div>

                    </div>
                    </div> 

                    <div class="row" id="splash_intab" style="
                    
                    <?php
                    
                    if((isset($pageedit['splash_type']) and $pageedit['splash_type']=='text') or !isset($pageedit['splash_type']))
                    echo 'display:none;';
                    ?>
                    
                    
                    ">

                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="brandname">IN Tab <span>*</span></label>

                          <select class="form-control select2" name="splash_new_tab" style="width: 100%;">
  <option selected="selected" value="1" <?php if(isset($pageedit['splash_new_tab']) and $pageedit['splash_new_tab']==1) echo 'selected'; ?>>New Tab</option>
    <option value="0" <?php if(isset($pageedit['splash_new_tab']) and $pageedit['splash_new_tab']==0) echo 'selected'; ?>>Same Tab</option>
  </select>
                         
                        </div>

                      </div>
                      </div> 




                <!-- end row -->  

                <!-- start row -->
                <div class="row" style="<?php
                
                if((isset($pageedit['splash_type']) and $pageedit['splash_type']=='image'))
echo 'display:none;';
                
                
                ?>" id="splash_desc">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Short Description</label>
                      <textarea class="form-control" rows="3" id="splashpage_description" name="splash_desc" placeholder="Enter ..."><?php
                        
                        if(isset($pageedit['splash_desc']))
                       echo $pageedit['splash_desc'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

               
                <!-- -->
                <div class="row" id="splash_imageid" style="<?php
                
                if((isset($pageedit['splash_type']) and $pageedit['splash_type']=='text') or !isset($pageedit['splash_type']))
echo 'display:none;';
                
                ?>">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="offerimage">Image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="splash_image" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="offerimage">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6">
                         

                          <?php
    
   


      if(isset($pageedit['splash_image']) and file_exists(FCPATH.'attachments\shop_images\splash_images\\'.$pageedit['splash_image'])){
    
    ?>
    <img src="<?php  echo base_url('./attachments/shop_images/splash_images/'.$pageedit['splash_image']); ?>" class="img-fluid img-responsive" />
    <br /><input type="checkbox" value="<?=$pageedit['splash_image']?>" name="delete_img"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>




                      </div>
                    </div>
                <!-- -->
                <div class="col-md-4">

<div class="form-group">
  <label>Status</label>
  <select class="form-control select2" name="splash_status" style="width: 100%;">
  <option selected="selected" value="1" <?php if(isset($pageedit['splash_status']) and $pageedit['splash_status']==1) echo 'selected'; ?>>Active</option>
    <option value="0" <?php if(isset($pageedit['splash_status']) and $pageedit['splash_status']==0) echo 'selected'; ?>>Deactive</option>
  </select>
</div>

</div> 
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="addsplashpage" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->

  </div>
  


