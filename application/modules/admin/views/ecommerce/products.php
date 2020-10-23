<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index4.html">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<style type="text/css">
  .treatment-image-div img{
    
    height: 120px;
   
  }
</style>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Products</h3>
                <div class="card-tools">
                  <a href="" data-toggle="modal" data-target="#modal-lg-procut-name" class="btn btn-block btn-success btn-sm"><i class="fa fa-plus mr-2"></i> Add New Product</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1product" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="18%">Image</th>
                    <th>Title</th>
                    
                    <th width="18%">Stock Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>


                  <?php 
                  
                 
                  foreach($shop_products as $shop_product) {
                   
                   
                   ?>

                  <tr>
                    <td>
                      <div class="treatment-image-div" >
                      <?php 
                      
                      if(isset($shop_product['product_img1']) and $shop_product['product_img1']!='' and file_exists(FCPATH.'attachments\shop_images\\'.$shop_product['product_img1'])){
                      echo '<img src="'.base_url('/attachments/shop_images/'.$shop_product['product_img1']).'" class="img-fluid img-responsive">'; }
                      else if(isset($shop_product['product_img2']) and $shop_product['product_img2']!='' and file_exists(FCPATH.'attachments\shop_images\\'.$shop_product['product_img2'])){
                        echo '<img src="'.base_url('/attachments/shop_images/'.$shop_product['product_img2']).'" class="img-fluid img-responsive">'; }
                      ?>
                       
                        
                      </div>
                    </td>
                    <td>
                      <strong><?=$shop_product['product_title']?></strong><br />
                      <p><span class="badge bg-green"><strong><?php 
                      
                      if($shop_product['product_actual_price']!='' and $shop_product['product_discounted_price']!='')
                      echo '£'.$shop_product['product_discounted_price'];
                      else
                      echo '£'.$shop_product['product_actual_price'];
                      
                      
                      ?></strong></span> <?php
                      
                      if($shop_product['product_actual_price']!='' and $shop_product['product_discounted_price']!='')
                      echo '<span class="badge bg-info"><del><strong>£'.$shop_product['product_actual_price'].'</strong></del></span>';
                      
                      
                      
                      ?></p>
                      <p><?=$shop_product['cat_name']?></p> 
                    </td>
                    
                    <td>
                    	<div class="input-group margin">
			                <input type="text" class="form-control" id="update_stock_product" name="update_stock_product" value="<?=$shop_product['product_stock']?>" placeholder="">
			                    <span class="input-group-btn">
			                      <button type="button" value="<?=$shop_product['product_id']?>" class="btn btn-danger btn-flat" id="update_stock">Update</button>
			                    </span>
			            </div>
			           
                  <?php if($shop_product['product_status']==1) echo 'Active'; else echo 'Inactive';?>
                    </td>
                    <td>
                    <a href="<?= base_url('admin/publish/'.$shop_product['product_id']) ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                   
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
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Change password -->
  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Change Password</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- form start -->
          <form role="form" id="quickForm">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">New Password</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm New Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              
            </div>
            <!-- /.card-body -->
            
          

        </div>
        <div class="modal-footer justify-content-between">
          
          <button type="button" class="btn btn-primary">Change Password</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal  Change password -->

  <!-- Info model -->
  <div class="modal fade" id="modal-lg-note">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Notes</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- form start -->
          <!-- /.card-header -->
              <!-- DIRECT CHAT PRIMARY -->
            <div class="card card-prirary cardutline direct-chat direct-chat-primary">
             
              <!-- /.card-header -->
              <div class="card-body">
                
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Zalmia khan</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                   <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Zalmia khan</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Zalmia khan</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->


<!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Zalmia khan</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->


                   <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Zalmia khan</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
            <!-- /.card-body -->

        </div>
        
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal  info model -->


  <!-- Add new product -->
</form>
  <form name="frm" method="post" action="<?= base_url('admin/publish') ?>">
  <div class="modal fade" id="modal-lg-procut-name">
    <div class="modal-dialog modal-lg-procut-name">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- form start -->
          <form role="form" id="quickForm">
            <div class="card-body p-0">
              <div class="form-group">
                <label for="prodcutname">Product Name <span>*</span></label>
                <input type="text" name="productname" class="form-control" id="prodcutname" placeholder="">
              </div>
              <div class="form-group">
              <label>Order</label>
              <select class="form-control select2" name="productorder" style="width: 100%;">
              <?php
                               
                               for ($i=1;$i<11;$i++) {
                                
                               
                                echo '<option value="'.$i.'">'.$i.'</option>';

                               }

                               ?>
              </select>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control select2" name="productactive" style="width: 100%;">
                <option selected="selected">Active</option>
                <option>Deactive</option>
               
              </select>
            </div>
              
            </div>
            <!-- /.card-body -->
            
          

        </div>
        <div class="modal-footer justify-content-between">
          
          <a href="#" onclick="document.frm.submit();"  class="btn btn-primary">Add Product</a>
        </div>
       
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div> </form>