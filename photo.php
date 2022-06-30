<!DOCTYPE html>
<html lang="en">
<?php
include('controller/database.php');

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sierra Falconès</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.php">
        <img src="assets/img/favicon.png" style="width: 55px; height:55px;">
      </a>
      <div class="logo me-auto">
        <h1>
          <a href="index.php" style="font-size: 20.3px;">
            Humanitarian Order of
          </a>
          <br>
          <a href="index.php" style="line-height: 33px;">
            Sierra Falconès
          </a>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">What we do</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">The Orgnaization</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Advocacies</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Our Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <h2><?php echo $_GET['title']; ?></h2>
        <h6><?php echo $_GET['advocacy_sub_title']; ?></h6>
      </div><br><br><br>

      <div class="row portfolio-container">
        <?php
        $id = $_GET['advocacy'];
        $about = $mysqli->query("SELECT * from advocacy_photo where advocacy_id='$id'");
        while ($val1 = $about->fetch_object()) {
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="accounts/assets/advocacy/<?php echo $val1->photo; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="accounts/assets/advocacy/<?php echo $val1->photo; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>
  <!--
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Humanitarian Order of Sierra Falconès</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="#">Humanitarian Order of Sierra Falconès</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>