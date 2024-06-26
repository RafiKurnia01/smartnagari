<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Tidak Mampu</title>
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>

  <body>
    <div class="container">
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
      <h1 style="padding: 50px; text-align: center;" class="col-12">Formulir Surat Keterangan Tidak Mampu</h1>
      <div class="col-12" style="box-shadow: 0 4px 6px rgb(0, 0, 0); padding: 20px;">
      <form action="{{ route('sktmstore') }}" method="POST">
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
              <label for="tempat_lahir">Tempat Lahir</label>
              <input
                type="text"
                class="form-control"
                id="tempatlahir"
                name="tempatlahir"
                required
              />
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input
                type="text"
                class="form-control"
                id="tanggallahir"
                name="tanggallahir"
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
          </div>
          <div class="col-md-6">
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
              <label for="pekerjaan">Pekerjaan</label>
              <input
                type="text"
                class="form-control"
                id="pekerjaan"
                name="pekerjaan"
                required
              />
            </div>
            <div class="form-group">
              <label for="penghasilan_bulanan">Penghasilan Bulanan</label>
              <input
                type="text"
                class="form-control"
                id="penghasilan"
                name="penghasilan"
                required
              />
            </div>
            <div class="form-group">
              <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
              <input
                type="text"
                class="form-control"
                id="jumlah_tanggungan"
                name="jumlah_tanggungan"
                required
              />
            </div>
            <div class="form-group">
              <label for="keperluan">Keperluan</label>
              <textarea
                class="form-control"
                id="keperluan"
                name="keperluan"
                rows="3"
                required
              ></textarea>
            </div>
          </div>
        </div>

        <div class="form-group">
          <button type= "submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
