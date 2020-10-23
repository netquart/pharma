
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$button_text?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><?=$button_text?></li>
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
              <?=$button_text?> Form
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertitle">Delivery Service Title <span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"  value="<?php
                        
                        if(isset($deliverymethod['delivery_title']))
                       echo $deliverymethod['delivery_title'];
                        
                        ?>" name="delivery_title" placeholder="" />
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertagline">Price</label>
                      <input type="text" class="form-control" id="offertagline"  value="<?php
                        
                        if(isset($deliverymethod['delivery_price']))
                       echo $deliverymethod['delivery_price'];
                        
                        ?>" name="delivery_price" placeholder="" />
                    </div>

                  </div>

                </div> 
                <!-- end row -->  

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Details</label>
                      <textarea class="form-control" rows="3" id="introtext" name="delivery_details" placeholder="Enter ..."><?php
                        
                        if(isset($deliverymethod['delivery_details']))
                       echo $deliverymethod['delivery_details'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

                <!-- start row -->
                <div class="row">

                 <div class="col-md-4">

	                <div class="form-group">
	                  <label>Type</label>
	                  <select class="form-control select2" name="delivery_type" style="width: 100%;">
                      <option  value="Uk Delivery" <?php
                      
                      if(isset($deliverymethod['delivery_type'])=='Uk Delivery')
                      echo 'selected="selected"';
                      
                      ?>>Uk Delivery</option>
	                    <option value="International" <?php
                      
                      if(isset($deliverymethod['delivery_type'])=='International')
                      echo 'selected="selected"';
                      
                      ?>>International</option>
	                   
	                  </select>
	                </div>
	                
	            </div>

                <div class="col-md-4">

	                <div class="form-group">
	                  <label>Order</label>
	                  <select class="form-control select2" name="delivery_order" style="width: 100%;">
                    <?php
                               
                               for ($i=1;$i<15;$i++) {
                                
                                if(isset($deliverymethod['delivery_order']) and $deliverymethod['delivery_order']==$i)
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
	                  <select class="form-control select2" name="delivery_status" style="width: 100%;">
	                    <option selected="selected" value="1" <?php
                      
                      if(isset($deliverymethod['delivery_status'])=='1')
                      echo 'selected="selected"';
                      
                      ?>>Active</option>
	                    <option value="0" <?php
                      
                      if(isset($deliverymethod['delivery_status'])=='0')
                      echo 'selected="selected"';
                      
                      ?>>Deactive</option>
	                  </select>
	                </div>
	                
	            </div> 

                </div> 
                <!-- end row --> 

                <!-- Image -->
                <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="offerimage">Delivery Company Logo</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="delivery_image" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="offerimage">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6"><br />
                          
                         

                          <?php
    
   

      if(isset($deliverymethod['delivery_image']) and file_exists(FCPATH.'attachments\shop_images\delivery_options\\'.$deliverymethod['delivery_image'])){
    
    ?>
    <img src="<?php  echo base_url('/attachments/shop_images/delivery_options/'.$deliverymethod['delivery_image']); ?>" class="img-fluid img-responsive" />
    <br /><input type="checkbox" value="<?=$deliverymethod['delivery_image']?>" name="delete_img"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>

                      </div>
                    </div>
                <!-- -->
                

              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add_delivery_options" class="btn btn-primary"><i class="fas fa-edit mr-2"></i>Submit</button>
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
  

 
