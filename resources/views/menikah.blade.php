<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Menikah</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>

  <body>
    <div class="container">
      <h1 style="padding: 50px; text-align: center;" class="col-12">Formulir Surat Keterangan Menikah</h1>
      <div class="col-12" style="box-shadow: 0 4px 6px rgb(0, 0, 0); padding: 20px;">
      <form action="{{ route('nikahstore') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <input type="hidden" name="id_client" id="client" value="@if($data) {{ $data }} @endif">
            <div class="form-group">
              <label for="tempat_menikah">Tempat Menikah</label>
              <input
                type="text"
                class="form-control"
                id="tempatmenikah"
                name="tempatmenikah"
                required
              />
            </div>
            <h3>Data Diri</h3>
            <div class="form-group">
              <label for="nama_suami">Nama Lengkap</label>
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
              <label for="tempat_lahir">Tempat Lahir</label>
              <input
                type="text"
                class="form-control"
                id="tempat_lahir"
                name="tempat_lahir"
                required
              />
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input
                type="date"
                class="form-control"
                id="tanggal_lahir"
                name="tanggal_lahir"
                required
              />
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select
                class="form-control"
                id="jenis_kelamin"
                name="jenis_kelamin"
                required
              >
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
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
              <label for="agama">Agama</label>
              <input
                type="text"
                class="form-control"
                id="agama"
                name="agama"
                required
              />
            </div>
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input
                type="text"
                class="form-control"
                id="pekerjaan"
                name="pekerjaan"
                required
              />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="tanggalmenikah">Tanggal Menikah</label>
              <input
                type="date"
                class="form-control"
                id="tanggalmenikah"
                name="tanggalmenikah"
                required
              />
            </div>
            <h3>Data Pasangan</h3>
            <div class="form-group">
              <label for="nama_pasangan">Nama Lengkap Pasangan</label>
              <input
                type="text"
                class="form-control"
                id="namapasangan"
                name="namapasangan"
                required
              />
            </div>
            <div class="form-group">
              <label for="nik_pasangan">NIK Pasangan</label>
              <input
                type="text"
                class="form-control"
                id="nikpasangan"
                name="nikpasangan"
                required
              />
            </div>
            <div class="form-group">
              <label for="tempat_lahir_pasangan">Tempat Lahir Pasangan</label>
              <input
                type="text"
                class="form-control"
                id="tempat_lahir_pasangan"
                name="tempat_lahir_pasangan"
                required
              />
            </div>
            <div class="form-group">
              <label for="tanggal_lahir_pasangan">Tanggal Lahir Pasangan</label>
              <input
                type="date"
                class="form-control"
                id="tanggal_lahir_pasangan"
                name="tanggal_lahir_pasangan"
                required
              />
            </div>
            <div class="form-group">
              <label for="jenis_kelamin_pasangan">Jenis Kelamin Pasangan</label>
              <select
                class="form-control"
                id="jenis_kelamin_pasangan"
                name="jenis_kelamin_pasangan"
                required
              >
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat_pasangan">Alamat Pasangan</label>
              <textarea
                class="form-control"
                id="alamat_pasangan"
                name="alamat_pasangan"
                rows="3"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <label for="agama_pasangan">Agama Pasangan</label>
              <input
                type="text"
                class="form-control"
                id="agama_pasangan"
                name="agama_pasangan"
                required
              />
            </div>
            <div class="form-group">
              <label for="pekerjaan_pasangan">Pekerjaan Pasangan</label>
              <input
                type="text"
                class="form-control"
                id="pekerjaan_pasangan"
                name="pekerjaan_pasangan"
                required
              />
            </div>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
