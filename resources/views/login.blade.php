<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  {{-- <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- <div class="login-logo">
    <a href="../../index2.html"><b>LOGO</a>
  </div> -->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="border-radius: 9px;">
      <p class="login-box-msg">LOG IN</p>

      <form action="../../domisili.html" method="post">
        <div class="input-group mb-3" style="border-radius: 9px;" >
          <input type="text" name="nik" style="border-color: #1384c1; background-color: aliceblue;" class="form-control" placeholder="NIK" pattern="\d{16}" title="Nomor NIK harus terdiri dari 16 digit angka" required>
          <div class="input-group-append" >
            <div class="input-group-text" style="border-color: #1384c1; background-color: aliceblue;">
              <span class="fas fa-id-card" style="color: #1384c1;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" style="border-radius: 9px;">
          <input type="text" name="nama" style="border-color: #1384c1; background-color: aliceblue;" class="form-control" placeholder="Nama" required>
          <div class="input-group-append">
            <div class="input-group-text" style="border-color: #1384c1; background-color: aliceblue;">
              <span class="fas fa-user" style="color: #1384c1;"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="border-radius: 9px; border-color: #1384c1;">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <div class="text-center">
            <a href="{{ route('registrasi_admin') }}" class="belum-punya-akun">Belum Punya Akun?</a>
          </div>
          <style>
            .belum-punya-akun {
              display: inline-block;
              padding: 5px 10px;
              border-radius: 5px;
              text-decoration: none;
              color: #0d1013;
              font-size: 9px;
              font-weight: bold;
            }
          </style>
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
</body>
</html>
