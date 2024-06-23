<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRINT </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->

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
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
           
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div>
                            <h2 class="card-title font-weight-bold text-capitalize text-center ">REPORT DETAIL</h2>
                        </div>
                        <br>
                        <h3 class="card-title ">Data Anak yang Terkena Stunting di Kota Padang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Anak</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Ibu</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stunting as $s)
                                    <tr>
                                        <td>{{ $s->nik }}</td>
                                        <td>{{ $s->nama }}</td>
                                        <td>{{ $s->umur }} </td>
                                        <td>{{ $s->jenis_kelamin }}</td>
                                        <td>{{ $s->nama_ibu }}  </td>
                                        <td>{{ $s->alamat }}</td>
                                    </tr>
                                @endforeach
        
                            </tbody>
        
                        </table>
                        
        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
            
            
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->

    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>