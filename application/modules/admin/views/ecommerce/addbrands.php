
  
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
              <li class="breadcrumb-item active"><?=$button_title?></li>
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
              <?=$button_title?> Form
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="addbrands" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="brandname">Brand Name <span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"
                      
                      value="<?php
                        
                        if(isset($brandedit['brand_name']))
                       echo $brandedit['brand_name'];
                        
                        ?>"
                      
                      
                       name="brand_name" placeholder="" />
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertagline">Brand Tag Line</label>
                      <input type="text" class="form-control" id="offertagline"
                      
                      value="<?php
                        
                        if(isset($brandedit['brand_tagline']))
                       echo $brandedit['brand_tagline'];
                        
                        ?>"
                      
                      
                       name="brand_tagline" placeholder="" />
                    </div>

                  </div>

                </div> 
                <!-- end row -->  

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Short Description</label>
                      <textarea class="form-control" rows="3" id="brandpage_description" name="brand_desc" placeholder="Enter ..."><?php
                        
                        if(isset($brandedit['brand_desc']))
                       echo $brandedit['brand_desc'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

                <!-- start row -->
                <div class="row">

                 <div class="col-md-4">

                            <div class="form-group">
                              <label>Order</label>
                              <select class="form-control select2" name="brand_order" style="width: 100%;">
                              <?php
                               
                               for ($i=1;$i<11;$i++) {
                                
                                if(isset($brandedit['brand_order']) and $brandedit['brand_order']==$i)
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
                              <select class="form-control select2" name="brand_status" style="width: 100%;">
                                <option selected="selected" value="1" <?php if(isset($brandedit['brand_status']) and $brandedit['brand_status']==1) echo 'selected'; ?>>Active</option>
                                <option value="0" <?php if(isset($brandedit['brand_status']) and $brandedit['brand_status']==0) echo 'selected'; ?>>Deactive</option>
                              </select>
                            </div>
                            
                        </div> 

                </div> 
                <!-- end row --> 

                <!-- -->
                <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="offerimage">Brand Image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="brand_image" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="offerimage">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6">
                          
                         

                          <?php
    
  

      if(isset($brandedit['brand_image']) and file_exists(FCPATH.'attachments\shop_images\brand_images\\'.$brandedit['brand_image'])){
    
    ?>
    <img src="<?php echo base_url('./attachments/shop_images/brand_images/'.$brandedit['brand_image']); ?>" class="img-fluid img-responsive" />
    <br /><input type="checkbox" value="<?=$brandedit['brand_image']?>" name="delete_img"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('./attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>

                      </div>
                    </div>
                <!-- -->

              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="addbrands" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Submit</button>
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
  


