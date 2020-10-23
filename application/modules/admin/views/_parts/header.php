<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?= $description ?>">
        <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
 
  <link href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- daterange picker -->
  
  <link href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
  <!-- Select2 -->
  

  <link href="<?= base_url('assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>" rel="stylesheet">

  

  <link href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet">



  <!-- Theme style -->
  


  <link href="<?= base_url('assets/dist/css/adminlte.min.css') ?>" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">

  <div class="row">
      
      <div class="col-md-12">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
            
        </nav>

      </div>

  </div> 

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">My Pharmacy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?= base_url('admin/home') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          
          <li class="nav-item ">
            <a href="<?= base_url('admin/orders') ?>" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Orders
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Catalog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?= base_url('admin/shopcategories') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/brands') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/products') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/discounts') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Special Offers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/saleoffers') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale Offers</p>
                </a>
              </li>

              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              
              <li class="nav-item">
                <a href="<?= base_url('admin/deliverymethods') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivery Methods</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?= base_url('admin/listcoupons') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coupon Code</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/clubcards') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Club Cards</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Manage Website
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              
              <li class="nav-item">
                <a href="<?= base_url('admin/listpages') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pages</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?= base_url('admin/cmscontent') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CMS Contents</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/splashpage') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Splash Page</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/testimonials') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/reviews') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reviews</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/listfaqs') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQs</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item ">
            <a href="<?= base_url('admin/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>