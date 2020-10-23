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
              Special Offer Form
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertitle">Offer Name <span>*</span></label>
                      <input type="text" class="form-control"
                      
                      value="<?php
                        
                        if(isset($couponedit['offer_title']))
                       echo $couponedit['offer_title'];
                        
                        ?>"
                      
                      
                       id="offertitle" name="offer_title" placeholder="" />
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="offertagline">Offer Tag Line</label>
                      <input type="text" class="form-control" id="offertagline"   value="<?php
                        
                        if(isset($couponedit['offer_tagline']))
                       echo $couponedit['offer_tagline'];
                        
                        ?>" name="offer_tagline" placeholder="" />
                    </div>

                  </div>

                </div> 
                <!-- end row -->  

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Short Description</label>
                      <textarea class="form-control" rows="3" id="introtext" name="offer_desc" placeholder="Enter ..."><?php
                        
                        if (isset($couponedit['offer_desc']))
                           echo $couponedit['offer_desc'];
                        
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
                      <label>Offer End Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" name="offer_enddate" value="<?php
                        
                        if (isset($couponedit['offer_enddate']))
                           echo date('Y-m-d', $couponedit['offer_enddate']);
                        
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
                              <select name="offer_order" class="form-control select2" name="businessname" style="width: 100%;">
                                <option selected="selected">1</option>
                                <?php
                               
                               for ($i=1;$i<11;$i++) {
                                
                                if(isset($couponedit['offer_order']) and $couponedit['offer_order']==$i)
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
                              <select class="form-control select2" name="offer_status" style="width: 100%;">
                              <option selected="selected" value="1" <?php if(isset($couponedit['offer_status']) and $couponedit['offer_status']==1) echo 'selected'; ?>>Active</option>
                                <option value="0" <?php if(isset($couponedit['offer_status']) and $couponedit['offer_status']==0) echo 'selected'; ?>>Deactive</option>
                              </select>
                            </div>
                            
                        </div> 

                </div> 
                <!-- end row --> 

                <!-- -->
                <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="offerimage">Offer Image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="offer_image" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="offerimage">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6"><br />
                          
                       

                          <?php
    
    

      if( isset($couponedit['offer_image']) and file_exists(FCPATH.'attachments\shop_images\special_offers\\'.$couponedit['offer_image'])){
    
    ?>
    <img src="<?php echo base_url('/attachments/shop_images/special_offers/'.$couponedit['offer_image']); ?>" class="img-fluid img-responsive" />
    <br /><input type="checkbox" value="<?=$couponedit['offer_image']?>" name="delete_img"> Check to remove this image</label>

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>

                      </div>
                    </div>
                <!-- -->

              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add_special_offer" class="btn btn-primary"><i class="fas fa-edit mr-2"></i>Submit</button>
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