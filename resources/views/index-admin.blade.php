<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DASHBOARD SIM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
     
    }
    
    [class*=sidebar-dark-] {
    background-color: #52b3e8;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active{
   background-color: #1384c1;
   color: #fff;
}
.small-box .icon>i {
  color: #fff;
  
}
    .info-box {
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 9px;
    background: #fff;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 1rem;
    min-height: 80px;
    padding: 0.5rem;
    position: relative;
    border-bottom: 3px solid #52b3e8;
}
.small-box{
    border-bottom: 3px solid #52b3e8;
  background-color: #52b3e8;
        border-radius: 9px;
}

.small-box>.small-box-footer{
  background-color: #1384c1;
   border-bottom-left-radius: 9px;
   border-bottom-right-radius: 9px;
}
.info-box .info-box-icon {
    border-radius: 9px;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 1.875rem;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    width: 70px;
    background-color: #1384c1;
    /* border: 2px solid  #0081C9; */
}
.fas , .fa{
  color: #fff;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active{
  border-radius: 9px;
}
.section-title::before {
    position: absolute;
    content: "";
    width: 45px;
    height: 4px;
    bottom: 0;
    left: 0;
    margin-bottom: -6px;
    background: #1384c1;
}
.section-title::after {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    bottom: 0;
    left: 50px;
    background: #1384c1;
     margin-bottom: -6px;
}
.das{
    margin-top: 50rem;
  }
@media (max-width: 991.98px){
  .das{
    margin-top: 55rem;
  }
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="color: #1384c1;"></i></a>
      </li>
    </ul>

<!-- Right navbar links -->
<div class="navbar-nav ml-auto">
  <!-- Messages Dropdown Menu -->
  
   
      <a href="./pages/examples/login.html" class="dropdown-item" style="border-radius: 9px;" >
        <!-- Message Start -->
        <div class="media">
          <span class="float-right text-sm "><i class="fas fa-star" style="color: #1384c1;"></i></span>
          <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
          <div class="media-body">
            <h3 class="dropdown-item-title">
             Hallo
             
            </h3>
            <p style="font-size: small;">Fatih</p>
          </div>
        </div>
        <!-- Message End -->
      </a>
      
      
 

  
</div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #fff;">RECORD SYSTEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="./index.html" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p style="color: #fff;">
                Dashboard
               
              </p>
            </a>
           
          </li>
         
          <li class="nav-item has-treeview">
            <a href="./pages/forms/transaksi.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p style="color: #fff;">
                Data Produk
              
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="./pages/forms/report-harian.html" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p style="color: #fff;">
                Data Penduduk
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="./pages/tables/settingan.html" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p style="color: #fff;">
                Pengajuan Pelayanan
              
              </p>
            </a>
          </li>
        <li class="nav-item has-treeview das" >
          <a href="./pages/tables/settingan.html" class="nav-link">
            <i class="nav-icon fa fa-sign-out-alt"></i>
            <p style="color: #fff;">
              Log Out
        
            </p>
          </a>
        </li>
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark font-weight-bold">Dashboard</h1> -->
            <div class="section-title position-relative m-0 font-weight-bold ">
            
              <h1 class="mt-2">Dashboard</h1>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6 mt-3">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"> <i class="nav-icon fas fa-home mr-2" style="color: #1384c1;"></i><a  style="font-weight: bold;" href="./index.html">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
      <h6 class="font-weight-bold mt-4">PELAYANAN</h6>
    <div class="row">
    
      <!-- SIM A -->
      <div class="col-12 col-sm-6 col-md-3" >
        <div class="info-box mb-3" >
          <span class="info-box-icon  elevation-1" ><i class="fas fa-users" ></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Surat Pindah</span>
            <span class="info-box-text">Domisili</span>
        </div>
        
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A -->
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Surat Keterangan</span>
            <span class="info-box-text">Penghasilan</span>
        </div>
        
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Surat Keterangan</span>
            <span class="info-box-text">Tanah</span>
        </div>
        
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Surat keterangan</span>
            <span class="info-box-text">kematian</span>
        </div>
        
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Surat Keterangan</span>
            <span class="info-box-text">Tidak Mampu</span>
        </div>
        
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
 
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Surat keterangan</span>
            <span class="info-box-text">Menikah</span>
        </div>
        
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
 
      <!-- SIM A UMUM -->
     
      <!-- SIM A UMUM -->
 
     
    </div>
    <!-- /.row -->
    <!-- Info boxes -->
      <h6 class="font-weight-bold mt-4">Data Produk</h6>
    <div class="row">
    
  
      <!-- SIM Psikologi  -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-brain"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Produk 1</span>
          
            
          </div>
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- Psikoogy -->
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fa fa-stethoscope"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Kesehatan</span>
      
            
          </div>
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
  
 
     
    </div>
     <!-- /.row -->
    <!-- Info boxes -->
    <h6 class="font-weight-bold mt-4">Data Penduduk</h6>
    <div class="row">
    
  
      <!-- SIM Psikologi  -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fas fa-brain"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Jumlah Penduduk</span>
            <span class="info-box-text">Stunting</span>
        </div>
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- Psikoogy -->
      <!-- SIM A UMUM -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fa fa-stethoscope"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Jumlah Penduduk</span>
            <span class="info-box-text">Lansia</span>
        </div>
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>


      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  elevation-1"><i class="fa fa-stethoscope"></i></span>

          <div class="info-box-content" style="display: flex; flex-direction: column;">
            <span class="info-box-text" style="white-space: nowrap;">Jumlah Penduduk</span>
            <span class="info-box-text">balita</span>
        </div>
          
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- SIM A UMUM -->
  
 
     
    </div>

  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
    <!-- Main content -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
