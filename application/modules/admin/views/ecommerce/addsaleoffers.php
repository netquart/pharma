
  
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
              Sale Offer Form
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertitle">Sale Name <span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"
                      value="<?php
                        
                        if(isset($saleoffer['sale_title']))
                       echo $saleoffer['sale_title'];
                        
                        ?>" name="sale_title" placeholder="" />
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertagline">Sale Tag Line</label>
                      <input type="text" class="form-control" id="offertagline"  value="<?php
                        
                        if(isset($saleoffer['sale_tagline']))
                       echo $saleoffer['sale_tagline'];
                        
                        ?>" name="sale_tagline" placeholder="" />
                    </div>

                  </div>

                </div> 
                <!-- end row -->  

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Short Description</label>
                      <textarea class="form-control" rows="3" id="introtext" name="sale_desc" placeholder="Enter ..."><?php
                        
                        if(isset($saleoffer['sale_desc']))
                       echo $saleoffer['sale_desc'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

                <!-- start row -->
                <div class="row">

                  <div class="col-md-4">

                    <!-- Date -->
                    <div class="form-group">
                      <label>Sale End Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            


<input type="date" name="sale_enddate" value="<?php
                        
                        if (isset($saleoffer['sale_enddate']))
                           echo date('Y-m-d', $saleoffer['sale_enddate']);
                        
                        ?>" class="form-control"  />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                  </div>

                 <div class="col-md-4">

                            <div class="form-group">
                              <label>Order</label>
                              <select class="form-control select2" name="sale_order" style="width: 100%;">
                                <option selected="selected">1</option>
                                <?php
                               
                               for ($i=1;$i<11;$i++) {
                                
                                if(isset($saleoffer['sale_order']) and $saleoffer['sale_order']==$i)
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
                              <select class="form-control select2" name="sale_status" style="width: 100%;">
                              <option selected="selected" value="1" <?php if(isset($saleoffer['sale_status']) and $saleoffer['sale_status']==1) echo 'selected'; ?>>Active</option>
                                <option value="0" <?php if(isset($saleoffer['sale_status']) and $saleoffer['sale_status']==0) echo 'selected'; ?>>Deactive</option>
                              </select>
                            </div>
                            
                        </div> 

                </div> 
                <!-- end row --> 

                <!-- Image -->
                <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="offerimage">Sale Image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input name="sale_image" type="file" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="offerimage">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6"><br />
                          
                        


                        <?php
    
    

      if(isset($saleoffer['sale_image']) and file_exists(FCPATH.'attachments\shop_images\sale_offers\\'.$saleoffer['sale_image'])){
    
    ?>
    <img src="<?php  echo base_url('./attachments/shop_images/sale_offers/'.$saleoffer['sale_image']); ?>" class="img-fluid img-responsive" />
    <br /><input type="checkbox" value="<?=$saleoffer['sale_image']?>" name="delete_img"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>



                      </div>
                    </div>
                <!-- -->

              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="addsaleoffer" class="btn btn-primary"><i class="fas fa-edit mr-2"></i>Submit</button>
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

  
  


