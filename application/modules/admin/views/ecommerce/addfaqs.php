
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>  <?=$button_title?></h1>
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
              <?=$button_title?>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="addbrands" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label for="brandname"> Question <span>*</span></label>
                      <textarea class="form-control" name="faq_title"  rows="3" id="faq_question">
                      
                     <?php
                        
                        if(isset($pageedit['faq_title']))
                       echo $pageedit['faq_title'];
                        
                        ?></textarea>
                      
                      
                      
                    </div>

                  </div>

                  

                </div> 
                <!-- end row -->  

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label> Answer</label>
                      <textarea class="form-control" rows="3" id="faq_answer" name="faq_desc"><?php
                        
                        if(isset($pageedit['faq_desc']))
                       echo $pageedit['faq_desc'];
                        
                        ?></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

               
                <!-- -->
               

                <div class="row">

                <div class="col-md-6">

<div class="form-group">
  <label>Order</label>
  <select class="form-control select2" name="faq_order" style="width: 100%;">
  <?php
   
   for ($i=1;$i<100;$i++) {
    
    if(isset($pageedit['faq_order']) and $pageedit['faq_order']==$i)
    echo '<option value="'.$i.'" selected>'.$i.'</option>';
    else
    echo '<option value="'.$i.'">'.$i.'</option>';

   }

   ?>
  </select>
</div>

</div>
                <div class="col-md-6">

<div class="form-group">
  <label>Status</label>
  <select class="form-control select2" name="faq_status" style="width: 100%;">
  <option selected="selected" value="1" <?php if(isset($pageedit['faq_status']) and $pageedit['faq_status']==1) echo 'selected'; ?>>Active</option>
    <option value="0" <?php if(isset($pageedit['faq_status']) and $pageedit['faq_status']==0) echo 'selected'; ?>>Deactive</option>
  </select>
</div>

</div> 

<div class="card-footer">
                  <button type="submit" name="addfaq" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Submit</button>
                </div>
              
                <!-- /.card-body -->
              
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
  


