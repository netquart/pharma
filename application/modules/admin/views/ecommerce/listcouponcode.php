<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Coupon Codes</h1>
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
                <h3 class="card-title">All Coupon Codes</h3>
                <div class="card-tools">
                  <div class="form-group mb-0">
	                    
	                   <a href="<?= base_url('admin/addcouponcode') ?>" class="btn btn-block btn-success btn-sm"><i class="fa fa-plus mr-2"></i> Add New Coupon Code</a>
	                </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="20%">Coupon Code</th>
                    <th width="10%">Type</th>
                    <th>Price</th>
                    <th width="12%">Used Count</th>
                    <th width="12%">Expiry</th>
                    <th width="12%">Status</th>
                    <th width="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <strong>Winter2020</strong>
                    </td>

                    <td>
                      Fixed Price
                    </td>
                    <td>
                      £5
                    </td>

                    <td>
                      2/10
                    </td>
                    <td>
                      12/10/2020
                    </td>
                    <td>
                      Deactive
                    </td>
                    <td>
                    <a href="add-coupons.php" class="btn btn-success btn-sm" title="Edit Store"><i class="fas  fa-edit"></i> 
                    </a>
                    
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <strong>Bigon2020</strong>
                    </td>

                    <td>
                      Percentage
                    </td>
                    <td>
                      5%
                    </td>

                    <td>
                      10/Unlimited
                    </td>
                    <td>
                      12/10/2020
                    </td>
                    <td>
                      Active
                    </td>
                    <td>
                    <a href="add-coupons.php" class="btn btn-success btn-sm" title="Edit Store"><i class="fas  fa-edit"></i> 
                    </a>
                    
                    </td>
                  </tr>

                  
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

