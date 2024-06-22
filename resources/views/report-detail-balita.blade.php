<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>REPORT DETAIL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('../../plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('../../plugins/daterangepicker/daterangepicker.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('../../plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('../../plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ asset('../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../../dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
          *{
            font-family: 'Poppins', sans-serif;
          }
          .input-group-sm>.form-control:not(textarea) {
            height: calc(1.8125rem + 8px);
          }
          
          *{
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
            color: aliceblue;
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
            background-color: #1384c1;
            border-radius: 9px;
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
          }
          .fas,.fa{
            color: aliceblue;
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
          .btn-succes {
            background-color: #bcee97;
            box-shadow: none;
          }
          .btn-succes:hover {
            background-color: #90d05f;
            /* border-color: #28a745; */
            box-shadow: none;
          }


.btn-succes>a {
    
    color: #1D1D27;
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 



<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card"  style="border-radius: 9px;">
        <div class="card-header">
          <h3 class="card-title">Data Balita di Kota Padang</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 ">
          <table id="example2" class="table table-bordered table-hover">
            <thead style="border-top-right-radius: 10px; border-top-left-radius: 10px; background-color: #1384c1;">
              <tr  style="color: #fff;">
                <th>Nama Anak</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Alamat</th>
              
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Syakila Anastasya</td>
                <td>12 November 2002 </td>
                <td>Perempuan</td>
                <td>Muhammad Fikri </td>
                <td>Rahma Sinta </td>
                <td>Padang</td>
                
              </tr>
             
              <tr>
                <td>Antonio Rifaldi</td>
                <td>24 Februari 2007 </td>
                <td>Laki-Laki</td>
                <td>Khairul Ilham </td>
                <td>Rani Julian</td>
                <td>Nanggalo</td>
               
              </tr>
             

            </tbody>

          </table>
      
          
        </div>
        <!-- /.card-body -->
          <div class="row my-4 container">
            <div class="col-lg-12 d-flex justify-content-end">
              <button type="button" class="btn "  style=" background-color: #1384c1; border-radius: 9px; width:90px"> <a style="color: #fff;" href="./print-data-balita.html">Print</a> </button>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right" >
              <li class="page-item" ><a class="page-link " href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer d-flex justify-content-center">
    <strong> &copy; 2023 <a href="https://argenesia.com/">FE</a></strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
