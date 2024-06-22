<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRINT </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

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
                        <h3 class="card-title ">Data Lansia di Kota Padang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Riwayat Penyakit</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Syakila Anastasya</td>
                                    <td>0202020200202 </td>
                                    <td>72 Tahun</td>
                                    <td>Perempuan </td>
                                    <td>Asma</td>
                                    <td>Padang Kota</td>
                                    
                                </tr>
        
                                <tr>
                                    <td>Antonio Rifaldi</td>
                                    <td>1202020200202 </td>
                                    <td>67 Tahun</td>
                                    <td>Laki-Laki </td>
                                    <td>Jantung</td>
                                    <td>Siteba</td>
                                   
                                    
                                </tr>
        
        
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