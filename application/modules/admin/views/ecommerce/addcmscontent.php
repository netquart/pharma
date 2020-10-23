
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add/Update New Page Section </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add/Update New Page Section</li>
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
              Add/Update New Page Section 
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="addbrands" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="brandname">Section Title<span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"
                      
                      value="<?php
                        
                        if(isset($pageedit['content_title']))
                       echo $pageedit['content_title'];
                        
                        ?>"
                      
                      
                       name="content_title" placeholder="" />
                    </div>

                  </div>

                

                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="brandname">Section ID<span class="text-muted"> (unique ID to call section on website) </span><span>*</span></label>
                      <input type="text" class="form-control" id="offertitle"
                      
                      value="<?php
                        
                        if(isset($pageedit['content_location']))
                       echo $pageedit['content_location'];
                        
                        ?>"
                      
                      
                       name="content_location" placeholder="" />
                    </div>

                  </div>


                </div> 
                <!-- end row -->  

                <div class="row">

<div class="col-md-12">

  <div class="form-group">
    <label>Section Contents</label>
    <textarea class="form-control" rows="3" id="cmscontent_description" name="content_text" placeholder="Enter ..."><?php
      
      if(isset($pageedit['content_text']))
     echo $pageedit['content_text'];
      
      ?></textarea>
  </div>

</div>

</div> 

<div class="row">

<div class="col-md-4">
<div class="form-group">
                              <label>Status</label>
                              <select class="form-control select2" name="content_status" style="width: 100%;">
                                <option selected="selected" value="1" <?php if(isset($pageedit['content_status']) and $pageedit['content_status']==1) echo 'selected'; ?>>Active</option>
                                <option value="0" <?php if(isset($pageedit['content_status']) and $pageedit['content_status']==0) echo 'selected'; ?>>Deactive</option>
                              </select>
                            </div>
</div></div>

               
            
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="addcontent" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Submit</button>
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
  


