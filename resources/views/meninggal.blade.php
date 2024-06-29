<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Surat Keterangan Meninggal Dunia</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 style="padding: 50px; text-align: center;" class="col-12">Formulir Surat Keterangan Meninggal Dunia</h1>
    <div class="col-12" style="box-shadow: 0 4px 6px rgb(0, 0, 0); padding: 20px;">
      <form action="{{ route('suratmeninggalstore') }}" class="row" method="POST">
        @csrf
        <input type="hidden" id="id_client" name="id_client" value="@if($data) {{ $data }} @endif">
        <div class="form-group col-6">
          <label for="namalengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
        </div>
        <div class="form-group col-6">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
        <div class="form-group col-6">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group col-6">
          <label for="tanggallahir">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
        </div>
        <div class="form-group col-6">
          <label for="tempatlahir">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
        </div>
        <div class="form-group col-6">
          <label for="tanggalmeninggal">Tanggal Meninggal</label>
          <input type="date" class="form-control" id="tanggalmeninggal" name="tanggalmeninggal" required>
        </div>
        <div class="form-group col-6">
          <label for="pekerjaan">Pekerjaan</label>
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
        </div>
        <div class="form-group col-6">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group col-12">
          <label for="sebabmeninggal">Sebab Meninggal</label>
          <textarea class="form-control" id="sebabmeninggal" name="sebabmeninggal" rows="3" required></textarea>
        </div>
        <div class="form-group col-6">
          <label for="namapelapor">Nama Pelapor</label>
          <input type="text" class="form-control" id="namapelapor" name="namapelapor" required>
        </div>
        <div class="form-group col-6">
          <label for="nikpelapor">NIK Pelapor</label>
          <input type="text" class="form-control" id="nikpelapor" name="nikpelapor" required>
        </div>
        <div class="form-group col-12">
          <label for="hubunganpelapor">Hubungan dengan Almarhum/Almarhumah</label>
          <input type="text" class="form-control" id="hubunganpelapor" name="hubunganpelapor" required>
        </div>
        <div class="form-group col-12">
          <button type="submit" class="btn btn-primary float-right">Buat Surat</button>
        </div>
        </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>