<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Coupon Code</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Coupon Code</li>
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
              Add Coupon Code Form
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post">
                <div class="card-body">
                 
              <!-- start row -->
                <div class="row">

                  <div class="col-md-4">

                    <div class="form-group">
                      <label for="offertitle">Coupon Code <span>*</span></label>
                      <input type="text" class="form-control" id="offertitle" name="coupon_code" placeholder="e.g Winter2020" />
                    </div>

                  </div>

                  <div class="col-md-4">

                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select2" name="coupon_price" style="width: 100%;">
                      <option selected="selected">Fixed Price</option>
                      <option>Percentage</option>
                    </select>
                  </div>
                  
              </div>

                  <div class="col-md-4">

                    <div class="form-group">
                      <label for="offertagline">Price (£)</label>
                      <input type="text" class="form-control" id="offertagline" name="coupon_type" placeholder="" />
                    </div>

                  </div>

                </div> 
                <!-- end row -->  

                <!-- start row -->
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Details</label>
                      <textarea class="form-control" rows="3" id="introtext" name="coupon_details" placeholder="Enter ..."></textarea>
                    </div>

                  </div>

                </div> 
                <!-- end row --> 

                <!-- start row -->
                <div class="row">

                  <div class="col-md-4">

                    <div class="form-group">
                      <label for="offertagline">Usage Number <small> (Leave empty for unlimited)</small></label>
                      <input type="text" class="form-control" id="offertagline" name="coupon_usage" placeholder="" />
                    </div>

                  </div>

                  <div class="col-md-4">

                    <!-- Date -->
                    <div class="form-group">
                      <label>Sale End Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="coupon_enddate" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                  </div>

                  <div class="col-md-4">

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control select2" name="coupon_status" style="width: 100%;">
                                <option selected="selected">Active</option>
                                <option>Deactive</option>
                              </select>
                            </div>
                            
                        </div> 

                </div> 
                <!-- end row --> 

                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add_couponcode" class="btn btn-primary"><i class="fas fa-edit mr-2"></i>Add Coupon Code</button>
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
  