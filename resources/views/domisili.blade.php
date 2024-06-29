<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pindah Domisili</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>

  <body>
    <div class="container">
      <h1 style="padding: 50px; text-align: center" class="col-12">
        Formulir Surat Pindah Domisili
      </h1>
      <div
        class="col-12"
        style="box-shadow: 0 4px 6px rgb(0, 0, 0); padding: 20px"
      >
        <form action="{{ route('domisilistore') }}" method="POST">
          @csrf
          <input type="hidden" id="id_client" name="id_client" value="@if($data) {{ $data }} @endif">
          <div class="form-group">
            <label for="nokk">Nomor Kartu Keluarga (KK)</label>
            <input
              type="text"
              class="form-control"
              id="nokk"
              name="nokk"
              required
            />
          </div>
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
            <label for="alamatsekarang">Alamat Sekarang</label>
            <textarea
              class="form-control"
              id="alamatsekarang"
              name="alamatsekarang"
              rows="3"
              required
            ></textarea>
          </div>
          <div class="form-group">
            <label for="alamatpindah">Alamat Pindah</label>
            <textarea
              class="form-control"
              id="alamatpindah"
              name="alamatpindah"
              rows="3"
              required
            ></textarea>
          </div>
          <div class="form-group">
            <label for="alasanpindah">Alasan Pindah</label>
            <select
              class="form-control"
              id="alasanpindah"
              name="alasanpindah"
              required
            >
              <option value="">Pilih Alasan Pindah</option>
              <option value="Pekerjaan">Pekerjaan</option>
              <option value="Pendidikan">Pendidikan</option>
              <option value="Kesehatan">Kesehatan</option>
              <option value="Perumahan">Perumahan</option>
              <option value="Keamanan">Keamanan</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tanggalpindah">Tanggal Pindah</label>
            <input
              type="date"
              class="form-control"
              id="tanggalpindah"
              name="tanggalpindah"
              required
            />
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Buat Surat</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
