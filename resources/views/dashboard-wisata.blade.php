<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Padang Smart City</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo padang.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a href="{{ route('wisata') }}">Wisata</a></li>
          <li class="dropdown"><a href="#"><span>Data Penduduk</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('report-detail-stunting') }}">Jumlah Penduduk Stunting</a></li>
              <li><a href="{{ route('report-detail-lansia') }}">Jumlah Penduduk Lansia</a></li>
              <li><a href="{{ route('report-detail-balita') }}">Jumlah Penduduk Balita </a></li>
             
            </ul>
          </li>
          <li><a href="{{ route('contact') }}">Kontak</a></li>
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
          <li><a href="{{ route('home') }}">Profil</a></li>
          <li>Wisata</li>
        </ol>
        <h2>Tempat Wisata</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            @foreach($data as $d)
              <article class="entry">
                <div class="entry-img">
                  <img src="{{ asset('storage/'.$d->image) }}" alt="" class="img-fluid" width="700">
                </div>

                <h2 class="entry-title">
                  <a href="">{{ $d->tittle }}</a>
                </h2>

                <div class="entry-content">
                  <div class="read-more">
                    <a href="{{ route('wisata-detail', $d->id) }}">Read More</a>
                  </div>
                </div>

              </article><!-- End blog entry -->
            @endforeach


            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

         



            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="wisata.html">Wisata</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="domisili.html">Surat Pindah Domisili</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="penghasilan.html">Surat Keterangan Penghasilan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tanah.html">Surat Keterangan Kepemilikian Tanah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="meninggal.html">Surat Keterangan Meninggal Dunia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tidak_mampu.html">Surat Keterangan Tidak Mampu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menikah.html">Surat Keterangan Menikah</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Jend Sudirman <br>  No.51, Kota Padang, <br>Sumatera Barat <br><br>
              <strong>Phone:</strong> (0751) 31930<br>
              <strong>Email:</strong> @kotapadang.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>ABOUT US</h3>
            <p>Selamat datang di Smart Nagari Padang, platform digital resmi yang dikelola oleh Pemerintah Kota Padang. 
              Kami mengingatkan kepada semua pengunjung bahwa segala informasi dan layanan yang tersedia di website ini adalah 
              milik Pemerintah Kota Padang dan dilindungi oleh hukum. Penggunaan kembali, penyalinan, 
              atau distribusi konten dari website ini tanpa izin tertulis dari pihak berwenang sangat dilarang 
              dan dapat dikenakan sanksi hukum. </p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tim Frontend</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>