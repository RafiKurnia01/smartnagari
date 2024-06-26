<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Penghasilan</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>

  <body>
    @if(session()->has('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    @endif
                    @if(session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    @endif
    <div class="container">
      <h1 style="padding: 50px; text-align: center;" class="col-12">Formulir Surat Keterangan Penghasilan</h1>
      <div class="col-12" style="box-shadow: 0 4px 6px rgb(0, 0, 0); padding: 20px;">
      <form action="{{ route('penghasilanstore') }}" method="POST">
        @csrf
        <input type="hidden" id="id_client" name="id_client" value="@if($data) {{ $data }} @endif">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input
                type="text"
                class="form-control"
                id="namalengkap"
                name="namalengkap"
                required
              />
            </div>
            <div class="form-group">
              <label for="nik">NIK</label>
              <input
                type="text"
                class="form-control"
                id="nik"
                name="nik"
                required
              />
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input
                type="text"
                class="form-control"
                id="jabatan"
                name="jabatan"
                required
              />
            </div>
            <div class="form-group">
              <label for="nama_perusahaan">Nama Perusahaan</label>
              <input
                type="text"
                class="form-control"
                id="namaperusahaan"
                name="namaperusahaan"
                required
              />
            </div>
            <div class="form-group">
              <label for="alamat_perusahaan">Alamat Perusahaan</label>
              <textarea
                class="form-control"
                id="alamatperusahaan"
                name="alamatperusahaan"
                rows="3"
                required
              ></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="gaji_pokok">Gaji Pokok</label>
              <input
                type="number"
                class="form-control"
                id="gajipokok"
                name="gajipokok"
                required
              />
            </div>
            <div class="form-group">
              <label for="tunjangan">Tunjangan</label>
              <input
                type="number"
                class="form-control"
                id="tunjangan"
                name="tunjangan"
                required
              />
            </div>
            <div class="form-group">
              <label for="penghasilan_tambahan">Penghasilan Tambahan</label>
              <input
                type="number"
                class="form-control"
                id="penghasilantambahan"
                name="penghasilantambahan"
              />
            </div>
            <div class="form-group">
              <label for="total_penghasilan">Total Penghasilan</label>
              <input
                type="text"
                class="form-control"
                id="totalpenghasilan"
                name="totalpenghasilan"
                required
              />
            </div>
            <div class="form-group">
              <label for="tujuan_penggunaan">Tujuan Penggunaan</label>
              <textarea
                class="form-control"
                id="tujuanpenggunaan"
                name="tujuanpenggunaan"
                rows="3"
                required
              ></textarea>
            </div>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Buat Surat</button>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
      var gajiPokokInput = document.getElementById("gaji_pokok");
      var tunjanganInput = document.getElementById("tunjangan");
      var penghasilanTambahanInput = document.getElementById(
        "penghasilan_tambahan"
      );
      var totalPenghasilanInput = document.getElementById("total_penghasilan");

      gajiPokokInput.addEventListener("input", function () {
        updateTotalPenghasilan();
      });

      tunjanganInput.addEventListener("input", function () {
        updateTotalPenghasilan();
      });

      penghasilanTambahanInput.addEventListener("input", function () {
        updateTotalPenghasilan();
      });

      function updateTotalPenghasilan() {
        var gajiPokok = parseFloat(gajiPokokInput.value) || 0;
        var tunjangan = parseFloat(tunjanganInput.value) || 0;
        var penghasilanTambahan =
          parseFloat(penghasilanTambahanInput.value) || 0;

        var totalPenghasilan = gajiPokok + tunjangan + penghasilanTambahan;
        totalPenghasilanInput.value = totalPenghasilan.toFixed(2);
      }
    </script>
  </body>
</html>
