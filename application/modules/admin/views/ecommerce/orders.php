<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
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
                <h3 class="card-title">All Orders</h3>
                <div class="card-tools">
                  <div class="form-group mb-0">
	                    
	                    <select class="form-control select2" name="businessname" style="width: 100%;">
	                      <option selected="selected">All Orders</option>
	                      <option>Pending</option>
	                      <option>Completed</option>
	                      <option>Cancelled</option>
	                    </select>
	                </div>
	                
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Patient Name/Address</th>
                    <th width="12%">Order Date</th>
                    <th width="12%">Status</th>
                    <th width="12%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                    <td>Pending</td>
                    <td>
                    <a href="" class="btn btn-success btn-sm d-block">Process <i class="fas  fa-arrow-right ml-2"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                    <td>Completed</td>
                    <td>
                    <a href="" class="btn btn-success btn-sm d-block">Process <i class="fas  fa-arrow-right ml-2"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Ali Ahmad</strong><br />
                      26-28 The Square, Earls Barton, Northampton, NN6 0NA
                    </td>
                    <td>12/09/2020</td>
                    <td>Pending</td>
                    <td>
                    <a href="" class="btn btn-success btn-sm d-block">Process <i class="fas  fa-arrow-right ml-2"></i></a>
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
