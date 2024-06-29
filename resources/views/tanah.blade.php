<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Kepemilikan Tanah</title>
    <link
      rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>

  <body>
    <div class="container">
      <h1 style="padding: 50px; text-align: center;" class="col-12">Formulir Surat Keterangan Kepemilikan Tanah</h1>
      <div class="col-12" style="box-shadow: 0 4px 6px rgb(0, 0, 0); padding: 20px;">
      <form action="{{ route('tanahstore') }}" method="POST">
        @csrf
        <input type="hidden" id="id_client" name="id_client" value="@if($data) {{ $data }} @endif">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="namalengkap">Nama Lengkap</label>
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
              <label for="alamat">Alamat</label>
              <textarea
                class="form-control"
                id="alamat"
                name="alamat"
                rows="3"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <label for="nomor_sertifikat">Nomor Sertifikat</label>
              <input
                type="text"
                class="form-control"
                id="nomor_sertifikat"
                name="nomor_sertifikat"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="letak_tanah">Letak Tanah</label>
              <textarea
                class="form-control"
                id="letak_tanah"
                name="letak_tanah"
                rows="3"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <label for="luas_tanah">Luas Tanah (m²)</label>
              <input
                type="text"
                class="form-control"
                id="luas_tanah"
                name="luas_tanah"
                required
              />
            </div>
            <div class="form-group">
              <label for="batas_tanah">Batas-Batas Tanah</label>
              <textarea
                class="form-control"
                id="batas_tanah"
                name="batas_tanah"
                rows="3"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <label for="tujuanpenggunaan">Tujuan Penggunaan</label>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
