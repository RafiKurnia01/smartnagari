<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Berita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
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
        <h1><a href="{{ route('blog') }}">Berita</a></h1>
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
          <li><a href="{{ route('blog') }}">News</a></li>
        </ol>
        <h2>Detail Berita</h2>

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
                  <img src="{{ asset('assets/img/blog/'.$data->image) }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <b>
                    {{ $data->title }}
                  </b>
                </h2>

                <div class="entry-content">
                  <p>
                    {{ $data->content }}
                  </p>
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
    @else
    <p>DATA TIDAK DITEMUKAN</p>
    @endif

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            
          </div>
          
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2024</span></strong>TimFrontend
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