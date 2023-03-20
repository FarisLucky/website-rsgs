<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RSGS - Cari Dokter</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->

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

  <?php
  require_once('header.php')
  ?>

  <main id="main">
    <section id="pamflet_header" class="pamflet-header">
      <div class="container position-relative cvr-header">
        <h3>Cari Dokter</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatem libero impedit labore, nam neque quae obcaecati numquam, sapiente ipsam quam atque quisquam. Maxime animi laudantium maiores error, aliquid voluptatum.</p>
      </div>
    </section>
    <!-- ======= About Us Section ======= -->
    <section id="cari-dokter" class="cari-dokter">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-3">
            <div class="card mb-4">
              <div class="card-body">
                <form action="" method="post">
                  <div class="mb-2">
                    <label for="" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" name="cari_dokter" placeholder="Ketik Nama Dokter">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Pilih Spesialis</label>
                    <select class="form-select" name="type_spesialis">
                      <option value="">Pilih Spesialis</option>
                    </select>
                  </div>
                  <div class="mb-2 text-center flex-row gap-1">
                    <button type="submit" class="btn btn-primary w-100">
                      <i class="fas fa-search"></i> Cari
                    </button>
                  </div>
                  <div class="mb-2">
                    <button type="reset" class="btn btn-outline-secondary w-100">
                      <i class="fas fa-undo-alt"></i> Reset
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="cs-body">
              <div class="row gy-4">
                <?php
                for ($i = 1; $i <= 4; $i++) :
                ?>
                  <div class="col-6 col-md-3">
                    <div class="card card-dokter">
                      <div class="card-body">
                        <img src="assets/img/bg-1.jpg" alt="" class="card-img">
                        <div class="d-flex flex-column py-2">
                          <span class="card-subtitle dr-type text-primary indent-0">
                            <i class="fas fa-stethoscope" style="margin-right: 3px;"></i>Dokter Umum
                          </span>
                          <span class="card-title dr-name">dr. Susanti Sugianto</span>
                          <p class="dr-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                          <div class="mt-3">
                            <button class="btn btn-primary-2 w-100">Buat Janji</button>
                          </div>
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
        </div>

      </div>
    </section><!-- End About Us Section -->

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