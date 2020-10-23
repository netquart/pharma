
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add / Update testimonials</h1>
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
              Add/update testimonial page
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="addbrands" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="brandname"> Firstname <span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"
                      
                      value="<?php
                        
                        if(isset($pageedit['testimonial_firstname']))
                       echo $pageedit['testimonial_firstname'];
                        
                        ?>"
                      
                      
                       name="testimonial_firstname" placeholder="" />
                    </div>

                  </div>

                  <div class="col-md-6">

<div class="form-group">
  <label for="brandname"> Lastname <span>*</span></label>
  <input type="text" class="form-control" id="offertitle"
  
  value="<?php
    
    if(isset($pageedit['testimonial_lastname']))
   echo $pageedit['testimonial_lastname'];
    
    ?>"
  
  
   name="testimonial_lastname" placeholder="" />
</div>

</div>

                  

                </div> 
                <!-- end row -->  

                <div class="row">

<div class="col-md-6">

  <div class="form-group">
    <label for="brandname"> Designation <span></span></label>
    <input type="text" class="form-control" id="offertitle"
    
    value="<?php
      
      if(isset($pageedit['testimonial_designation']))
     echo $pageedit['testimonial_designation'];
      
      ?>"
    
    
     name="testimonial_designation" placeholder="" />
  </div>

</div>

<div class="col-md-6">

<div class="form-group">
<label for="brandname"> Company <span></span></label>
<input type="text" class="form-control" id="offertitle"

value="<?php

if(isset($pageedit['testimonial_company']))
echo $pageedit['testimonial_company'];

?>"


name="testimonial_company" placeholder="" />
</div>

</div>



</div>

<div class="row">

<div class="col-md-6">

  <div class="form-group">
    <label for="brandname"> Date <span></span></label>
    


     <input type="date" name="testimonial_date" value="<?php
                        
                        if (isset($pageedit['testimonial_date']))
                           echo date('Y-m-d', $pageedit['testimonial_date']);
                        
                        ?>" class="form-control"  />


  </div>

</div>

<div class="col-md-6">

<div class="form-group">
<label for="brandname"> Url <span></span></label>
<input type="text" class="form-control" id="offertitle"

value="<?php

if(isset($pageedit['testimonial_url']))
echo $pageedit['testimonial_url'];

?>"


name="testimonial_url" placeholder="" />
</div>

</div>



</div>

<div class="row">
<div class="col-md-6">

<div class="form-group">
<label for="brandname"> Star Rating <span></span></label>


<select class="form-control select2" name="testimonial_rating" style="width: 100%;">
                              <?php
                               
                               for ($i=1;$i<6;$i++) {
                                
                                if(isset($pageedit['testimonial_rating']) and $pageedit['testimonial_rating']==$i)
                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                else
                                echo '<option value="'.$i.'">'.$i.'</option>';

                               }

                               ?>
                              </select>
</div>

</div>
</div>

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label> Description</label>
                      <textarea class="form-control" rows="3" id="testimonial_desc" name="testimonial_desc" placeholder="Enter ..."><?php
                        
                        if(isset($pageedit['testimonial_desc']))
                       echo $pageedit['testimonial_desc'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

               
                <!-- -->
                <div class="row">

                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="offerimage">Image</label>
                            
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="testimonial_image" class="custom-file-input" id="offerimage" kl_vkbd_parsed="true">
                                <label class="custom-file-label" for="offerimage">Choose file</label>
                              </div>
                              
                            </div>

                          </div><!-- end form group -->

                      </div>

                      <div class="col-md-6">
                          
                        
 <?php
    
   

      if(isset($pageedit['testimonial_image']) and file_exists(FCPATH.'attachments\shop_images\splash_images\\'.$pageedit['testimonial_image'])){
    
    ?>
    <img src="<?php if(isset($pageedit['testimonial_image']) and file_exists('./attachments/shop_images/testimonial_images/'.$pageedit['testimonial_image'])) echo base_url('/attachments/shop_images/testimonial_images/'.$pageedit['testimonial_image']); ?>" class="img-fluid img-responsive" />
    <br />
    <label><input type="checkbox" value="<?=$pageedit['testimonial_image']?>" name="delete_img"> Check to remove this image</label>


    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>




                      </div>
                      
                    </div>
                <!-- -->

                <div class="row">

                 <div class="col-md-4">

                            <div class="form-group">
                              <label>Order</label>
                              <select class="form-control select2" name="testimonial_order" style="width: 100%;">
                              <?php
                               
                               for ($i=1;$i<11;$i++) {
                                
                                if(isset($pageedit['testimonial_order']) and $pageedit['testimonial_order']==$i)
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
  <select class="form-control select2" name="testimonial_status" style="width: 100%;">
  <option selected="selected" value="1" <?php if(isset($pageedit['testimonial_status']) and $pageedit['testimonial_status']==1) echo 'selected'; ?>>Active</option>
    <option value="0" <?php if(isset($pageedit['testimonial_status']) and $pageedit['testimonial_status']==0) echo 'selected'; ?>>Deactive</option>
  </select>
</div>

</div> 
              
                <!-- /.card-body -->
                <div class="row" style="display:block;float: left;
width: 100%;">
                <div class="card-footer">
                  <button type="submit" name="addtestimonial" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Submit</button>
                </div></div>
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
  


