
  
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
                <h3 class="card-title"><?=$button_title?> Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="addcategory" method="post"> 
                <div class="card-body">
                 
                <div class="row">
                 	
                 	<div class="col-md-6 col-sm-12">
                 		<div class="form-group">
                        <label for="treatmenttitle">Name</label>
                        <input type="text" name="cat_name" value="<?php
                        
                        if(isset($catedit['cat_id']))
                       echo $catedit['cat_title'];
                        
                        ?>" required class="form-control" id="treatmenttitle" placeholder="">
                    </div>
                 	</div>

                 	<div class="col-md-6 col-sm-12">
                 		 <div class="form-group">
                        <label for="treatmenttitle">Parent</label>
                      

                        <select class="form-control select2" name="cat_parent" id="IDselectbox">
                        <option value="0">Select Parent</option>
                        
                        <?=$categorylist;?>
                        
                        
                        </select>      

                    </div>
                 	</div>

                </div>	

                <div class="row">

<div class="col-md-6">

           <div class="form-group">
             <label>Order</label>
             <select class="form-control select2" name="cat_order" style="width: 100%;">
             <?php
              
              for ($i=1;$i<100;$i++) {
               
               if(isset($catedit['cat_order']) and $catedit['cat_order']==$i)
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
             <select class="form-control select2" name="cat_status" style="width: 100%;">
               <option selected="selected" value="1" <?php if(isset($catedit['cat_status']) and $catedit['cat_status']==1) echo 'selected'; ?>>Active</option>
               <option value="0" <?php if(isset($catedit['cat_status']) and $catedit['cat_status']==0) echo 'selected'; ?>>Deactive</option>
             </select>
           </div>
           
       </div> 

</div> 
                     
                   

                     <input type="hidden"  id="IDSelect" value="<?php
                     
                     if(isset($catedit['cat_parent']))
                     echo $catedit['cat_parent'];
                     
                     
                     
                     ?>">
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="addcategory" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Submit</button>
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
  

