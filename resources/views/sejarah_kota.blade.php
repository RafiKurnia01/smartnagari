<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Padang Smart City</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Kontak</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html">Padang Smart City</a></h1>
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
              <li><a href="pages/forms/report-harian.html">Jumlah Penduduk Stunting</a></li>
              <li><a href="pages/forms/report-harian.html">Jumlah Penduduk Lansia</a></li>
              <li><a href="pages/forms/report-harian.html">Jumlah Penduduk Balita </a></li>
             
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
          <li><a href="index.html">Profil</a></li>
          <li> Sejarah Kota</li>
        </ol>
       

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/slide/padang4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Sejarah Kota Padang</h3>
            <h4><b>Pendahuluan</b></h4>
            <p><p>Padang adalah ibu kota Provinsi Sumatera Barat di Indonesia. Terletak di pantai barat pulau Sumatera, kota ini dikenal sebagai pusat budaya Minangkabau dan telah lama menjadi titik penting dalam sejarah perdagangan, politik, dan budaya di wilayah tersebut</p></p>
            <h4><b>Periode Awal dan Asal Usul</b></h4>
            <p>Padang telah dihuni sejak zaman prasejarah oleh berbagai suku yang dikenal dengan adat dan budaya mereka yang unik. Sebelum kedatangan pengaruh asing, Padang merupakan daerah yang subur dan kaya akan hasil bumi seperti lada, emas, dan berbagai rempah.</p>
            <h4><b>Zaman Kerajaan dan Awal Perdagangan</b></h4>
            <p>Pada abad ke-14 hingga ke-16, wilayah Padang dan sekitarnya berada di bawah pengaruh Kerajaan Pagaruyung yang merupakan pusat dari budaya dan politik Minangkabau. Pada periode ini, Padang mulai menjadi pusat perdagangan penting di pesisir barat Sumatera. Pedagang dari India, Tiongkok, dan Timur Tengah datang untuk berdagang lada, emas, dan rempah-rempah lainnya.</p>
            <h4><b>Kedatangan Portugis dan Belanda</b></h4>
            <p>Pada abad ke-16, para pedagang Portugis adalah orang asing pertama yang tiba di Padang, namun pengaruh mereka tidak terlalu signifikan. Kemudian, pada abad ke-17, Belanda mulai menunjukkan minat yang besar di wilayah ini karena potensi ekonominya. Pada tahun 1663, Belanda mendirikan pos perdagangan di Padang untuk mengontrol perdagangan lada dan emas.</p>
            <h4><b>Penjajahan Belanda dan Pertumbuhan Ekonomi</b></h4>
            <p>Pada akhir abad ke-17 dan awal abad ke-18, Padang berkembang menjadi salah satu pusat perdagangan terbesar di pantai barat Sumatera di bawah kontrol VOC (Vereenigde Oostindische Compagnie) Belanda. Pelabuhan Padang menjadi titik strategis untuk pengiriman barang-barang seperti kopi, rempah-rempah, dan hasil bumi lainnya ke Eropa.</p>
            <p>Belanda mendirikan berbagai infrastruktur, termasuk jalan, jembatan, dan bangunan pemerintahan, yang banyak di antaranya masih ada hingga kini. Namun, kolonialisme Belanda juga membawa penderitaan bagi masyarakat setempat melalui eksploitasi ekonomi dan penindasan budaya.</p>
            <h4><b>Pengaruh Inggris dan Konflik Kolonial</b></h4>
            <p>Pada tahun 1795, Padang sempat berada di bawah kendali Inggris setelah Belanda menyerah kepada Inggris selama Perang Napoleon. Namun, kendali Inggris hanya berlangsung hingga tahun 1819, ketika wilayah tersebut dikembalikan ke Belanda melalui Konvensi London.</p>
            <p>Selama periode ini, ada banyak konflik antara Belanda dan penduduk setempat, termasuk Perang Padri (1821-1837), yang melibatkan kelompok-kelompok Minangkabau yang berusaha untuk menyingkirkan pengaruh asing dan memberlakukan hukum Islam yang lebih ketat.</p>
            <h4><b>Masa Kebangkitan Nasional</b></h4>
            <p>Pada awal abad ke-20, Padang menjadi pusat dari kebangkitan nasional Indonesia. Banyak tokoh penting dalam pergerakan kemerdekaan Indonesia berasal dari Padang dan Sumatera Barat, termasuk Mohammad Hatta, yang kemudian menjadi Wakil Presiden pertama Indonesia. Perlawanan terhadap penjajahan Belanda meningkat, dan Padang memainkan peran penting dalam perjuangan menuju kemerdekaan.</p>
            <h4><b>Perang Dunia II dan Kemerdekaan</b></h4>
            <p>Selama Perang Dunia II, Padang diduduki oleh Jepang pada tahun 1942. Pendudukan Jepang membawa perubahan besar dalam kehidupan sosial dan ekonomi kota, meskipun juga memicu lebih banyak perlawanan dari rakyat setempat.</p>
            <p>Setelah kemerdekaan Indonesia pada tahun 1945, Padang menjadi ibu kota dari Provinsi Sumatera Tengah dan kemudian menjadi ibu kota Provinsi Sumatera Barat pada tahun 1957. Selama periode ini, kota Padang mengalami berbagai pembangunan infrastruktur dan peningkatan ekonomi.</p>
            <h4><b>Masa Modern</b></h4>
            <p>Pada paruh kedua abad ke-20 dan awal abad ke-21, Padang telah berkembang menjadi pusat ekonomi, pendidikan, dan kebudayaan di Sumatera Barat. Kota ini menjadi rumah bagi berbagai universitas dan institusi pendidikan, serta menjadi pusat perdagangan dan pariwisata yang penting di wilayah tersebut.</p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
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
            <h3>About Eterna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
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
        &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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