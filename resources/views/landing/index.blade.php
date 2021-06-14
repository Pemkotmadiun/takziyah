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
        <a href="{{ url('/login') }}" class="scrollto">Login</a>
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
          <li class="active"><a href="#header">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#faq">Alur Laporan</a></li>
          <li><a href="#contact">Buat Laporan</a></li>
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
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
          <p class="animate__animated animate__fadeInUp">Aplikasi Takziyah merupakan aplikasi untuk mengurus akta kematian dan dapat digunakan untuk mengurus santunan kematian. Aplikasi ini merupakan terobosan dari Dispendukcapil, Dinas Sosial dan Dinas Kominfo Kota Madiun agar pengurusan dari akta kematian dan santunan kematian dapat diurus dengan cepat dan efisien.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
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

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Laporan Kematian</a></h4>
              <p class="description">Informasi laporan kematian dan pengajuan santunan kematian dari warga Kota Madiun.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Verifikasi Data & Berkas</a></h4>
              <p class="description">Verifikasi data & berkas oleh Dinas Kependudukan dan Pencatatan Sipil dan Dinas Sosial.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Penerimaan Santunan</a></h4>
              <p class="description">Informasi dan penerimaan santunan kematian dari Dinas Sosial ke ahli waris / pengurus.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mengenai Takziyah</h2>
          <p>Aplikasi Takziyah merupakan aplikasi untuk mengurus akta kematian dan dapat digunakan untuk mengurus santunan kematian berdasarkan laporan dari masyarakat. Pelapor menginputkan data warga meninggal di aplikasi lalu Dinas Kependudukan dan Pencatatan Sipil melakukan pengecekan data tersebut, jika data valid maka akan diterbitkan akta kematian. Selain itu pelapor juga dapat mengajukan santunan kematian yang nantinya akan ditindak lanjuti oleh Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak.</p>
        </div>

        <div class="row content">
          <div class="col-lg-12">
            <p>
              Berikut adalah persyaratan untuk mengajukan santunan kematian :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Surat Permohonan Santunan Kematian dengan Mengetahui Ketua RT (ASLI)<li>
              <li><i class="ri-check-double-line"></i> Foto Copy KTP-EL Masyarakat yang Meninggal<li>
              <li><i class="ri-check-double-line"></i> Foto Copy Akta Kematian atau Surat Keterangan Lahir Mati<li>
              <li><i class="ri-check-double-line"></i> Foto Copy KTP-EL Ahli Waris<li>
              <li><i class="ri-check-double-line"></i> Foto Copy KK Ahli Waris<li>
              <li><i class="ri-check-double-line"></i> Surat Pernyataan Ahli Waris dengan Materai 10.000 (ASLI)<li>
              <li><i class="ri-check-double-line"></i> Foto Copy Akta Kelahiran Bagi Ahli Waris yang Belum Memiliki KTP-EL<li>
              <li><i class="ri-check-double-line"></i> Foto Copy Rekening Atas Nama Ahli Waris<li>
            </ul>
          </div>
          <!-- <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div> -->
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('assets/landing/assets/img/clients/client-1.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-2.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-3.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-4.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-5.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-6.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-7.png') }}" alt="">
          <img src="{{ asset('assets/landing/assets/img/clients/client-8.png') }}" alt="">
        </div>
      </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Alur Laporan Kematian dan Pengajuan Santunan</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Laporan Kematian dan Pengajuan Santunan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Pelapor dalam hal ini bisa keluarga atau masyarakat melakukan laporan kematian pada aplikasi Takziyah Bersama di alamat web takziyah.madiunkota.go.id. Selain laporan kematian, pelapor juga dapat mengajukan santunan untuk warga yang meninggal dengan mengupload berkas yang disyaratkan pada aplikasi tersebut.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Verifikasi Data Dukcapil<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Setelah masyarakat melakukan laporan ke aplikasi takziyah, Dinas Kependudukan dan Pencatatan Sipil melakukan verifikasi laporan.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Penerbitan Akta Kematian<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Setelah data laporan diverifikasi dan dinyatakan valid, Dinas Kependudukan dan Pencatatan Sipil menerbitkan akta kematian, KTP dan KK yang dapat dicek oleh pelapor melalui aplikasi Takziyah Bersama.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Verifikasi Data Dinas Sosial <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Jika pelapor juga mengajukan santunan kematian dan telah mengupload berkas, maka Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak melakukan validasi berkas yang sudah diupload ke aplikasi takziyah bersama.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Informasi & Penerimaan Santunan Kematian <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Setelah melakukan validasi berkas dan dinyatakan valid, pelapor akan mendapat informasi ke email mengenai penerimaan santunan kematian.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Buat Laporan Kematian</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Alamat : </h4>
                <p>Jl. Dr. Sutomo No.85, Kejuron, Kec. Taman, Kota Madiun, Jawa Timur 63117</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email :</h4>
                <p>disdukcapilkotamadiun@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telepon :</h4>
                <p>(0351) 454301 / 462792</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <!-- <form action="{{ route('laporan.store') }}" method="POST">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Pelapor" data-msg="Masukkan nama lengkap pelapor" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" data-msg="Masukkan nama email valid" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="No Telepon" data-msg="Masukkan nomor telepon" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Nama Lengkap Warga Meninggal" data-msg="Masukkan nama lengkap warga meninggal" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="3" data-msg="Please write something for us" placeholder="Keterangan lain : Alamat Lengkap, NIK, dll"></textarea>
                <div class="validate"></div>
              </div>
              <input type="submit" value="Simpan" class="btn btn-primary">
            </form> -->

            <form action="{{ route('laporan.store') }}" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="nama_pelapor" class="form-control" id="nama_pelapor" placeholder="Nama Pelapor" data-rule="minlen:2" data-msg="Masukkan nama lengkap pelapor" value="{{ old('nama_pelapor') }}"/>
                    @error('nama_pelapor')
                      <span class="help-block">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="alamat_email" id="alamat_email" placeholder="Alamat Email" data-rule="email" data-msg="Masukkan nama email valid" value="{{ old('alamat_email') }}" />
                    @error('alamat_email')
                      <span class="help-block">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="No Telepon" data-rule="minlen:7" data-msg="Masukkan nomor telepon" value="{{ old('no_telepon') }}" />
                  @error('no_telepon')
                    <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nama_meninggal" id="nama_meninggal" placeholder="Nama Lengkap Warga Meninggal" data-rule="minlen:2" data-msg="Masukkan nama lengkap warga meninggal" value="{{ old('nama_meninggal') }}" />
                  @error('nama_meninggal')
                    <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="keterangan" name="keterangan" rows="3" data-msg="Please write something for us" placeholder="Keterangan lain : Alamat Lengkap, NIK, dll">{{ old('nama_pelapor') }}</textarea>
                </div>
                <div class="form-group">

                  <input type="datetime-local" class="form-control" name="waktu_kematian" id="waktu_kematian" value="" />
                  <span><i style="color:red; font-size:12px;">* Waktu Kematian</i></span>
                </div>

                <input type="hidden" class="form-control" name="email_body" placeholder="Enter your message here..."></input>
                    
                <div class="form-group">
                    <input type="submit" value="Kirim Laporan" class="btn btn-primary">
                </group>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Pemerintah Kota Madiun
      </div>
      <div class="credits">
        <a href="https://capil.madiunkota.go.id/">Dinas Kependudukan dan Pencatatan Sipil</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/landing/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/landing/assets/js/main.js') }}"></script>

</body>

</html>