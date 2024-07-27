<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        [class*=sidebar-dark-] {
            background-color: #ff0022;
        }

        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #f06108;
            color: #fff;
        }

        .small-box .icon>i {
            color: aliceblue;

        }

        .info-box {
            box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
            border-radius: 9px;
            background: #fff;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 1rem;
            min-height: 80px;
            padding: 0.5rem;
            position: relative;
            border-bottom: 3px solid #ff0022;
        }

        .small-box {
            border-bottom: 3px solid #ff0022;
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
            background-color: #ff0022;
            /* border: 2px solid  #0081C9; */
        }

        .fas,
        .fa {
            color: aliceblue;
        }

        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
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
            background: #ff0022;
        }

        .section-title::after {
            position: absolute;
            content: "";
            width: 4px;
            height: 4px;
            bottom: 0;
            left: 50px;
            background: #ff0022;
            margin-bottom: -6px;
        }

        .box {
            width: 40%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
        }

        /* .button {
  color: #fff;
background-color: #0081C9;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
} */
        .button:hover {
            /* background: #06D85F; */
        }

        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .popup {
            /* margin: 70px auto; */
            padding: 20px;
            background: aliceblue;
            border-radius: 9px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
            /* display: flex; */
            /* justify-content: center; */
            /* align-content: center; */
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popup .close:hover {
            /* color: #06D85F; */
        }

        .popup .content {
            max-height: 30%;
            overflow: auto;
        }

        .button {
            width: 100%;
            height: 50px;
            left: 62px;
            top: 11px;
        }

        @media screen and (max-width: 700px) {
            .box {
                width: 70%;
            }

            .popup {
                width: 70%;
            }

            .button {
                width: 100%;
                height: 50px;
                left: 2px;
                top: 11px;
            }
        }


        .left {
            float: left;
            display: block;
        }

        .right {
            float: left;
            display: block;
        }

        .button ul a {
            padding: 10px;
            /* background: rgb(116, 181, 12); */
            color: white;

            border-radius: 9px;
        }

        .form-control {
            border-radius: 9px;
            background-color: aliceblue;
        }

        .das {
            margin-top: 50rem;
        }

        @media (max-width: 991.98px) {
            .das {
                margin-top: 55rem;
            }

        }

        .tengah {
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"
                            style="color: #ff0022;"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <div class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->


                <a href="" class="dropdown-item" style="border-radius: 9px;">
                    <!-- Message Start -->
                    <div class="media">
                        <span class="float-right text-sm"></span>

                        <div class="media-body">
                            <h3 class="dropdown-item-title">Hallo</h3>
                            <p style="font-size: small">@if($admin) {{ $admin }} @endif</p>
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
            <a href="" class="brand-link">
                <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light" style="color: #fff;">SMART NAGARI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                          <a href="{{ route('index-admin') }}" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            <p style="color: #fff;">
                              Dashboard
                            </p>
                          </a>
                         
                        </li>
                       
                        <li class="nav-item has-treeview">
                          <a href="{{ route('surat') }}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p style="color: #fff;">
                              Pelayanan Surat
                            
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="{{ route('adminpegawai') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p style="color: #fff;">
                              Data Pegawai
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview das" >
                          <a href="{{ route('logout-admin') }}" class="nav-link">
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

                                <h1 class="mt-2">Surat Keterangan kepemilikan Tanah</h1>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6 mt-3">
                            <ol class="breadcrumb float-sm-right">

                                <li class="breadcrumb-item"> <i class="nav-icon fas fa-home mr-2"
                                        style="color: #ff0022;"></i><a style="font-weight: bold;"
                                        href="../../index.html">Home</a></li>
                                <li class="breadcrumb-item active">Detail Surat</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.con
      Main content -->
            <section class="content">
                <div class="container">
                    <div class="row  d-flex justify-content-center">
                        <!-- left column -->
                        <div class="col-lg-9 ">
                            <!-- general form elements -->
                            <div class="card " style="border-radius: 10px;">
                                <div class="card-header d-flex justify-content-center"
                                    style="background-color: #ff0022; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <h3 class="card-title  " style="color: #fff; ">Detail Pengajuan Surat</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tempat Menikah</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->tempatmenikah }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal Menikah</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->tanggalmenikah }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->namalengkap }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">NIK</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->nik }}" readonly>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->tanggal_lahir }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->tempat_lahir }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->jenis_kelamin }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->jenis_kelamin }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Agama</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->agama }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Pekerjaan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->pekerjaan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Alamat</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->alamat }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->namapasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">NIK Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->nikpasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal Lahir Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->tanggal_lahir_pasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tempat Lahir Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->tempat_lahir_pasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jenis Kelamin Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->jenis_kelamin_pasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Agama Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->agama_pasangan}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alasanMengurusSurat">Pekerjaan Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->pekerjaan_pasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alasanMengurusSurat">Alamat Pasangan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->alamat_pasangan }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status Pengajuan</label>
                                                    <input type="text" class="form-control"
                                                        style="background-color: #fff;" value="{{ $data->statussurat->status }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form role="form" action="{{ route('update-status-nikah') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group ">
                                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                                                    <label for="categorySelect">Ubah Status Surat</label>
                                                    <select class="form-control" style="border-color: #ff0022;" id="status" name="status" required>
                                                      <option value="" disabled selected>Pilih Status</option>
                                                      <option value=1>Pengajuan Diterima</option>
                                                      <option value=2>Pengajuan Diproses</option>
                                                      <option value=3>Surat Dijemput</option>
                                                      <option value=4>Surat Sudah Dijemput</option>
                              
                                                      <!-- Add more categories as needed -->
                                                    </select>
                                                  </div>
                                                  <div class="box">
                                                      <button type="submit" class="btn btn-danger text-white"
                                                          style="background-color:#ff0022; border-radius: 9px; width: 100px;">Submit</button>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>





                                <!-- <div class="col-lg-4 tengah mx-auto  ">
                            <button class="btn d-block  w-75 " type="button" style="background-color: #52b3e8;  color: #fff; border-radius: 9px;  ">YES
                        
                            </button>
                        
                          </div>
                          <div class="col-lg-4 mx-auto ">
                            <button class="btn d-block w-75 " type="button" style="background-color:#FF8787; color: #fff; border-radius: 9px;   "> NO
                        
                            </button>
                        
                          </div> -->


                            </div>


                        </div>
                    </div>
                </div>
                </form>
        </div>
        <!-- /.content-wrapper -->
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

</body>

</html>