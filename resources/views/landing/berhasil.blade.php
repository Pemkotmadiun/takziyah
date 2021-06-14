<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Takziyah Bersama</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/landing/assets/img/Kota-Madiun.png') }}" rel="icon">
  <link href="{{ asset('assets/landing/assets/img/Kota-Madiun.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/landing/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v2.1.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">disdukcapilkotamadiun@gmail.com</a></li>
          <li><i class="icofont-phone"></i> (0351) 454301 / 462792</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Senin-Jum'at 07.00 - 15.30</li>
        </ul>
      </div>
      <div class="cta">
        <a href="{{ route('landing.index') }}" class="scrollto">Beranda</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#header" class="scrollto">Takziyah</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <!-- <li class="active"><a href="#header">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#faq">Alur Laporan</a></li>
          <li><a href="#contact">Buat Laporan</a></li> -->
          <!-- <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Terima Kasih</h2>
          <p class="animate__animated animate__fadeInUp">Terima kasih atas laporan anda, mohon tunggu kami akan menindaklanjuti laporan anda secepat mungkin, progres dari laporan yang anda buat dapat anda lihat melalui link yang dikirimkan ke email terdaftar. </br>Mohon jaga kerahasiaan informasi dengan tidak membagikan atau menunjukkan link yang dikirimkan ke email anda. Mohon hubungi contact person diatas jika anda mengalami kendala atau perlu penjelasan lain.
          </br>Jika email tidak ditemukan mohon lakukan pengecekan di menu spam.</p>
          <a href="{{ route('landing.index') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Kembali</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section><!-- End Hero -->
</body>

</html>