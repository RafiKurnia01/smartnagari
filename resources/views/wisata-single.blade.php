<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wisata</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo padang.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
        <h1><a href="{{ route('home') }}">PADANG SMART CITY</a></h1>
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
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('wisata') }}">Wisata</a></li>
        </ol>
        <h2>Informasi Tempat Wisata</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    @if($data)
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-8 entries">

              <article class="entry entry-single">

                <div class="entry-img">
                  <img src="{{ asset('storage/'.$data->image) }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="">{{ $data->tittle }}</a>
                </h2>

                

                <div class="entry-content">
                  <p>{{ $data->deskripsi }}</p>
                </div>

                

              
                
              </div><!-- End blog author bio -->

              
                    </div><!-- End comment reply #2-->

                  </div><!-- End comment reply #1-->

                </div><!-- End comment #2-->

                

              

              </div><!-- End blog comments -->

            </div><!-- End blog entries list -->


                
                </div><!-- End sidebar search formn-->

              
                </div><!-- End sidebar categories-->

                
                
                </div><!-- End sidebar tags-->

              </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

          </div>

        </div>
      </section><!-- End Blog Single Section -->
    @endif

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Data Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Program Kerja Kota</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Wisata</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Surat Pindah Domisili</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Surat Keterangan Penghasilan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Surat Keterangan Kepemilikian Tanah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Surat Keterangan Meninggal Dunia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Surat Keterangan Tidak Mampu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Surat Keterangan Menikah</a></li>
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
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>