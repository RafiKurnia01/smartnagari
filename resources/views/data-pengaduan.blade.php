<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pengajuan Pelayanan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- daterange picker -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}"
    />
    <!-- iCheck for checkboxes and radio inputs -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"
    />
    <!-- Bootstrap Color Picker -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"
    />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
    />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}"
    />
    <!-- Bootstrap4 Duallistbox -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }
      .input-group-sm > .form-control:not(textarea) {
        height: calc(1.8125rem + 8px);
      }

      .user-panel img {
        height: auto;
        width: 2.1rem;
      }

      [class*="sidebar-dark-"] {
        background-color: #ff0022;
      }
      .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
        background-color: #f06108;
        color: #fff;
      }
      .small-box .icon > i {
        color: aliceblue;
      }
      .info-box {
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
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
      .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
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
      .das {
        margin-top: 50rem;
      }
      @media (max-width: 991.98px) {
        .das {
          margin-top: 55rem;
        }
        .space {
          margin-top: 1rem;
        }
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
            <a class="nav-link" data-widget="pushmenu" href="#"
              ><i class="fas fa-bars" style="color: #ff0022"></i
            ></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <div class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->

          <a
            href="../../pages/examples/login.html"
            class="dropdown-item"
            style="border-radius: 9px"
          >
            <!-- Message Start -->
            <div class="media">
              <span class="float-right text-sm"
                ></span>
              
              <div class="media-body">
                <h3 class="dropdown-item-title">Hallo</h3>
                <p style="font-size: small">@if($admin) {{ $admin }}@endif</p>
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
          <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
          <span class="brand-text font-weight-light" style="color: #fff;">SMART NAGARI</span>
        </a>
      
        <!-- Sidebar -->
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
                <div
                  class="section-title position-relative m-0 font-weight-bold"
                >
                  <h1 class="mt-2">Pengajuan Pelayanan</h1>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-6 mt-3">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <i
                      class="nav-icon fas fa-home mr-2"
                      style="color: #ff0022"
                    ></i
                    ><a style="font-weight: bold" href="../../index.html"
                      >Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">User</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.con
                    Main content -->

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <!-- Date and time range -->
                <div class="form-group">
                  <!-- <label>Date range button:</label> -->

                  {{-- <div class="input-group input-group-sm">
                    <input
                      class="form-control form-control-navbar"
                      type="search"
                      style="
                        border-color: #ff0022;
                        border-top-left-radius: 9px;
                        border-bottom-left-radius: 9px;
                      "
                      placeholder="Search"
                      aria-label="Search"
                    />
                    <div class="input-group-append">
                      <button
                        class="btn"
                        style="
                          border-color: #ff0022;
                          background-color: #ff0022;
                          border-top-right-radius: 9px;
                          border-bottom-right-radius: 9px;
                        "
                        type="submit"
                      >
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div> --}}
                  {{-- <label for="id_pegawai">Penanggung Jawab</label>
                    <select class="form-control" style="background-color: #fff;" id="id_pegawai" name="id_pegawai" required>
                    <option value="" disabled selected>Pilih </option>
                      <option value=""></option>
                                                
                    <!-- Add more categories as needed -->
                    </select> --}}
                </div>
                <!-- /.form group -->
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      Pastikan anda memilih akses yang tepat
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover">
                      <thead style="background-color: #ff0022">
                        <tr style="color: #fff">
                          <th>Nama Sender</th>
                          <th>Email Sender</th>
                          <th>Subjek</th>
                          <th>Pesan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($datapengaduan as $p)
                          <tr>
                            <td>
                              <div class="user-panel d-flex">
                                <div class="info">
                                  <p class="d-block">{{ $p->namasender }}</p>
                                </div>
                              </div>
                            </td>
                            <td>{{ $p->emailsender }}</td>
                            <td>{{ $p->subjek }}</td>
                            <td>{{ $p->pesan }}</td>
                            <td>
                              <button type="button" class="btn" style="background-color: #f07171; border-radius: 9px; width: 100px; "> Remove </button>
                            </td>
                          </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="row my-4 container">
                    <div class="col-lg-12 d-flex justify-content-end">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.row -->
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('assets/dist/js/demo.js') }}"></script> --}}
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Initialize Select2 Elements
        $(".select2bs4").select2({
          theme: "bootstrap4",
        });

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $("#reservation").daterangepicker();
        //Date range picker with time picker
        $("#reservationtime").daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: "MM/DD/YYYY hh:mm A",
          },
        });
        //Date range as a button
        $("#daterange-btn").daterangepicker(
          {
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [
                moment().subtract(1, "days"),
                moment().subtract(1, "days"),
              ],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [
                moment().startOf("month"),
                moment().endOf("month"),
              ],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
            startDate: moment().subtract(29, "days"),
            endDate: moment(),
          },
          function (start, end) {
            $("#reportrange span").html(
              start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
            );
          }
        );

        //Timepicker
        $("#timepicker").datetimepicker({
          format: "LT",
        });

        //Bootstrap Duallistbox
        $(".duallistbox").bootstrapDualListbox();

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        $(".my-colorpicker2").on("colorpickerChange", function (event) {
          $(".my-colorpicker2 .fa-square").css("color", event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function () {
          $(this).bootstrapSwitch("state", $(this).prop("checked"));
        });
      });
    </script>
  </body>
</html>
