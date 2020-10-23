<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brands</h1>
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
                <h3 class="card-title">All Brands</h3>
                <div class="card-tools">
                  <div class="form-group mb-0">
	                    
	                   <a href="<?= base_url('admin/addbrands') ?>" class="btn btn-block btn-success btn-sm"><i class="fa fa-plus mr-2"></i> Add New Brand</a>
	                </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1brand" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Brand Name</th>
                    <th width="10%">Order</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 
                  <?php foreach($brands as $brand) {
                   
                   
                   ?>
                 
                  <tr>
                    <td>
                      <strong><?=$brand->brand_name?></strong>
                    </td>
                    <td>
                    <?=$brand->brand_order?>
                    </td>
                    <td>
                   
                    <?php if($brand->brand_status==1) echo 'Active'; else echo 'Inactive';?>
                    </td>
                    
                    <td>
                    <a href="<?= base_url('admin/addbrands/'.$brand->brand_id) ?>" class="btn btn-success btn-sm" title="Add brands"><i class="fas  fa-edit"></i> </a>
                    
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


  <!-- Change password -->
  <div class="modal fade" id="modal-change-password">
    <div class="modal-dialog modal-change-password">
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
            <div class="card-body p-0">
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
  <div class="modal fade" id="modal-note">
    
    <div class="modal-dialog modal-note">
     
      <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title">Add Note</h4>
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
                        <button type="submit" class="btn btn-primary">Save</button>
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