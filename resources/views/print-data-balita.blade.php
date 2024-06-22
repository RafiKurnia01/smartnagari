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
                        <h3 class="card-title ">Data Balita di Kota Padang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
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