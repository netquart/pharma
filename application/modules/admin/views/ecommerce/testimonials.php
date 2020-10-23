
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonials</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <div class="row">
          
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Testimonials</h3>
                <div class="card-tools">
                  <div class="form-group mb-0">
	                    
	                   <a href="<?= base_url('admin/addtestimonials') ?>" class="btn btn-block btn-success btn-sm"><i class="fa fa-plus mr-2"></i> Add New Testimonial</a>
	                </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1ttm" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="30%">Image</th>

                    <th width="20%">Name</th>
                   
                    <th width="10%">Designation</th> 

                    <th width="10%">Company Name</th> 
                    
                    <th width="10%">Display Order</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  
                  foreach($testimonials as $testimonial){
                  ?>

                  <tr>
                    <td>
                    <?php
    
    if(isset($testimonial['testimonial_image']) and file_exists('./attachments/shop_images/testimonial_images/'.$testimonial['testimonial_image'])){
    
    ?>
    <img src="<?php if(isset($testimonial['testimonial_image']) and file_exists('./attachments/shop_images/testimonial_images/'.$testimonial['testimonial_image'])) echo base_url('/attachments/shop_images/testimonial_images/'.$testimonial['testimonial_image']); ?>" class="img-fluid img-responsive" />

    <?php } else{

echo '<img src="'.base_url('/attachments/placeholder_img.jpg').'" class="img-fluid img-responsive" />';


    }?>
                      
                    </td>

                   
                    <td>
                    <?=$testimonial['testimonial_firstname'].' '.$testimonial['testimonial_lastname']?></p>
                    </td> <td>
                     <?=$testimonial['testimonial_designation']?>
                    </td>

                    <td>
                     <?=$testimonial['testimonial_company']?>
                    </td>
                    <td>
                     <?=$testimonial['testimonial_order']?>
                    </td>
                    <td>
                   
                    <?php if($testimonial['testimonial_status']==1) echo 'Active'; else echo 'Inactive';?>
                    </td>
                    
                    <td>
                    <a href="<?= base_url('admin/addtestimonials/'.$testimonial['testimonial_id']) ?>" class="btn btn-success btn-sm" title="Edit Store"><i class="fas  fa-edit"></i> </a>

                    <a onclick="return confirm('Are you sure?')" href="<?= base_url('admin/testimonials/?delete='.$testimonial['testimonial_id']) ?>" class="btn btn-danger btn-sm" ><i class="fas  fa-trash"></i> </a>
                    
                    </td>
                  </tr>
                  <?php } ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  