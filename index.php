<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RSGS-Beranda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/vendor/owlcarousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/owlcarousel/dist/assets/owl.theme.green.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php require_once('header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container-fluid position-relative cs-carousel">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-12 p-0">
          <div class="owl-carousel owl-theme">
            <?php for ($i = 1; $i < 3; $i++) : ?>
              <div class="item img-item">
                <div class="carousel-cover container">
                  <h3 class="carousel-title">Rumah Sakit <span class="carousel-gs">Graha Sehat</span></h3>
                  <p class="carousel-subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio repellat placeat ipsum id perferendis</p>
                </div>
                <img src="assets/img/bg-1.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
              </div>
            <?php endfor; ?>
          </div>
        </div>
        <!-- <div
          class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start welcome-txt">
          <h2>Welcome to <span>Impact</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
        </div> -->
      </div>
    </div>

    </div>
  </section>

  <section id="search_dokter">
    <div class="container container-cs">
      <div class="card">
        <div class="card-body my-3 mx-4">
          <form action="">
            <div class="row">
              <div class="col-lg-12">
                <div class="search_dokter_label">
                  <strong>Temukan Dokter yang Tepat</strong>
                  <p>
                    Cari dan temukan dokter yang tepat untuk kebutuhan medis anda, dan buat janji dengan langkah mudah
                  </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="input-group mb-2">
                  <!-- <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span> -->
                  <input type="search" name="q_dokter" id="q_dokter" class="form-control input-search-dokter" placeholder="Nama Dokter">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-2">
                  <select class="form-select input-select-dokter">
                    <option value="">Pilih Spesialis</option>
                    <option value="">Gigi</option>
                    <option value="">Saraf</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-2">
                  <button type="submit" class="btn w-100 btn-search-dokter">
                    Search
                    <i class="fas fa-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <section id="spesialis_kami">
      <div class="container">
        <div class="cs-header">
          <h3>Spesialis Kami</h3>
          <p>
            Rumah sakit memiliki dokter spesialis
          </p>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <?php
          for ($i = 1; $i <= 6; $i++) :
          ?>
            <div class="col-lg-3 col-md-6">
              <div class="position-relative card-spesialis">
                <div class="card-body">
                  <div class="icon">
                    <!-- <img src="https://img.icons8.com/external-icongeek26-outline-icongeek26/64/000000/external-baby-pregnancy-amp-maternity-icongeek26-outline-icongeek26-1.png" class="img-icon" /> -->
                    <img src="assets/img/icons/icons8-baby-64.png" alt="" class="img-icon">
                  </div>
                  <h3>Spesialis <span class="text-primary">Anak</span></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
            </div><!-- End Service Item -->
          <?php
          endfor;
          ?>
        </div>
      </div>
    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">
        <div class="cs-header mb-0">
          <h4>Client Asuransi Kami</h4>
        </div>
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="intro" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <h3>Profil RS <span class="text-primary">Graha Sehat</span></h3>
        <a href="https://www.youtube.com/watch?v=gg5gZDviOVo" class="glightbox play-btn"></a>
        <p>Video profil perkenala graha sehat.
        </p>
        <!-- <a class="cta-btn" href="#">Play</a> -->
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="layanan_kami" class="services">
      <div class="cs-header">
        <div class="container" data-aos="fade-up">
          <h2>Layanan Kami</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laborum. Repudiandae consequatur voluptatem.</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 layanan-card-layout" data-aos="fade-up" data-aos-delay="100">
          <?php
          for ($i = 1; $i <= 8; $i++) :
          ?>
            <div class="col-6 col-lg-3 col-md-6">
              <div class="service-item position-relative card-layanan">
                <div class="icon">
                  <img src="assets/img/icons/icons8-dental-checkup-50.png" alt="">
                </div>
                <h3>Layanan Poli Mata</h3>
                <p>Layanan Operasi Katarak menggunakan teknik <strong>PHAECO EMULSIFIKASI</strong></p>
                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
          <?php
          endfor;
          ?>

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="berita" class="berita">
      <div class="container" data-aos="fade-up">

        <div class="cs-header">
          <h2>Berita Terbaru</h2>
          <p>Rumah Sakit Graha Sehat</p>
        </div>

        <div class="cs-body">
          <div class="row gy-4">
            <?php
            for ($i = 1; $i <= 4; $i++) :
            ?>
              <div class="col-6 col-md-3">
                <div class="card card-berita">
                  <div class="card-body">
                    <img src="assets/img/bg-1.jpg" alt="" class="card-img">
                    <div class="d-flex flex-column card-desc">
                      <span class="card-tgl">20 Januari 2022</span>
                      <span class="card-title">Layanan Jantung Anak</span>
                      <span class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                        quaerat enim aliquam eum vel sint atque repudiandae odit? Provident dolor voluptatem voluptatibus
                        explicabo fugit. Odio iure beatae dolores unde tempora!</span>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endfor;
            ?>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                    gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                    eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                    Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                    Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pengaduan</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
            dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jl. Raya Panglima Sudirman No.02, Sumber Armi, Sumberlele, Kec. Kraksaan, Kabupaten Probolinggo, Jawa Timur <strong>67282</strong></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>pengaduan@grahasehat.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>(0335) 846500</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Jam Buka:</h4>
                  <p>Senin-Sabtu: 08.00 - 15.00</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Deskripsi Pengaduan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
  require_once('footer.php')
  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/owlcarousel/dist/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Carousel -->
  <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        center: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
      });
      // owl.trigger('play.owl.autoplay', [5000])
    })
  </script>
</body>

</html>