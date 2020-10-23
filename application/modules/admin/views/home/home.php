
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
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
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="bookings.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>12</h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="fa fa-bars"></i>
              </div>
              <a href="list-products.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Registerd Patients</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="patients.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>SMS Balance</p>
              </div>
              <div class="icon">
                <i class="fa fa-mobile"></i>
              </div>
              <a href="sms-balance.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
          
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recent Orders</h3>
                <div class="card-tools">
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Patient Name/Address</th>
                    <th width="10%">Date</th>
                    <th width="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                   
                    <td>
                    <a href="order-details.php" class="btn btn-success btn-sm d-block">Process</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                   
                    <td>
                    <a href="process-booking.php" class="btn btn-success btn-sm d-block">Process</a>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                   
                    <td>
                    <a href="process-booking.php" class="btn btn-success btn-sm d-block">Process</a>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                   
                    <td>
                    <a href="order-details.php" class="btn btn-success btn-sm d-block">Process</a>
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                   
                    <td>
                    <a href="process-booking.php" class="btn btn-success btn-sm d-block">Process</a>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                   
                    <td>
                    <a href="process-booking.php" class="btn btn-success btn-sm d-block">Process</a>
                    </td>
                  </tr>
                 
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
  <div class="modal fade" id="modal-lg-note">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Staff</h4>
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
                    <img class="direct-chat-img" src="<?= base_url('assets/dist/img/user1-128x128.jpg') ?>" alt="Message User Image">
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
                    <img class="direct-chat-img" src="<?= base_url('assets/dist/img/user1-128x128.jpg') ?>" alt="Message User Image">
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
                    <img class="direct-chat-img" src="<?= base_url('assets/dist/img/user1-128x128.jpg') ?>" alt="Message User Image">
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
    <img class="direct-chat-img" src="<?= base_url('assets/dist/img/user1-128x128.jpg') ?>" alt="Message User Image">
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
    <img class="direct-chat-img" src="<?= base_url('assets/dist/img/user1-128x128.jpg') ?>" alt="Message User Image">
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

<!-- main footer-->

