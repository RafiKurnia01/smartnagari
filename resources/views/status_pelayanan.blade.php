<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Program Kerja Kota</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo padang.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
    }
    .container-custom {
        background-color: rgb(255, 255, 255);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 80%;
        max-width: 800px; /* menambah panjang */
        margin: 40px auto;
        min-height: 400px; /* menambah tinggi */
}

    h1 {
      margin-bottom: 20px;
    }
    input[type="text"] {
      padding: 10px;
      width: calc(100% - 22px);
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      padding: 5px 10px;
      font-size: 14px;
      background-color: #cd1c1c;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #cd1c1c;
    }
    .timeline {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      margin-top: 20px;
    }
    .timeline::before {
      content: '';
      position: absolute;
      width: 100%;
      height: 2px;
      background-color: #ccc;
      top: 50%;
      left: 0;
      z-index: 1;
    }
    .timeline-step {
      background-color: white;
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      border: 2px solid #ccc;
      z-index: 2;
      position: relative;
      font-size: 12px;
    }
    .timeline-step.active {
      border-color: #cd1c1c;
      background-color: #cd1c1c;
      color: rgb(0, 0, 0);
    }
    .timeline-label {
        margin-top: 10px;
        font-size: 12px;
        font-weight: bold;
    }
    .margin-bottom {
        margin-bottom: 100px;
    }

  </style>

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="{{ route('home') }}">Padang Smart City</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ route('home') }}">Profil Kota</a></li>
          <li><a href="{{ route('about') }}">Visi & Misi</a></li>
          <li><a href="{{ route('services') }}">Pelayanan</a></li>
          <li><a href="{{ route('portofolio') }}">Data Produk</a></li>
          <li><a href="{{ route('team') }}">Program Kerja Kota</a></li>
          <li><a href="{{ route('blog') }}">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Data Penduduk</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('report-detail-stunting') }}">Jumlah Penduduk Stunting</a></li>
              <li><a href="{{ route('report-detail-lansia') }}">Jumlah Penduduk Lansia</a></li>
              <li><a href="{{ route('report-detail-balita') }}">Jumlah Penduduk Balita </a></li>
            </ul>
          </li>
          <li><a href="{{ route('contact') }}">Kontak</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Profil</a></li>
          <li>Status Pelayanan</li>
        </ol>
        <h2>Status Pelayanan</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <div class="container-custom">
        <h3 class = "margin-bottom"><strong>Cek Status Pembuatan Surat</strong></h3>
        <div id="result" >
            <div class="timeline">
                <div class="timeline-step" id="step1">
                    <div>1</div>
                    <div class="timeline-label">Pengajuan</div>
                </div>
                <div class="timeline-step @if($surat == 1) active @endif" id="step2">
                    <div>2</div>
                    <div class="timeline-label">Pengajuan Diterima</div>
                </div>
                <div class="timeline-step @if($surat == 2) active @endif" id="step3">
                    <div>3</div>
                    <div class="timeline-label">Diproses</div>
                </div>
                <div class="timeline-step @if($surat == 3) active @endif" id="step4">
                    <div>4</div>
                    <div class="timeline-label">Selesai</div>
                </div>
                <div class="timeline-step @if($surat == 4) active @endif" id="step5">
                    <div>5</div>
                    <div class="timeline-label">Diambil</div>
                </div>
            </div>
        </div>
    </div>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="visi_misi.html">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pelayanan.html">Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="data_produk.html">Data Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="program_kerja.html">Program Kerja Kota</a></li>
              <li><i class="bx bx-chevron-right"></i> < a href="wisata.html">Wisata</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h4>About Padang Smart City</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Padang Smart City</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
