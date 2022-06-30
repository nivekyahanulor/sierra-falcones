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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swaFp" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .container1 {
      width: 100%;
      overflow: hidden;
      border: 10px solid #ffffff;
      border-radius: 8px;
    }

    .wrapper {
      width: 100%;
      display: flex;
      animation: slide 16s infinite;
    }

    @keyframes slide {
      0% {
        transform: translateX(0);
      }

      25% {
        transform: translateX(0);
      }

      30% {
        transform: translateX(-100%);
      }

      50% {
        transform: translateX(-100%);
      }

      55% {
        transform: translateX(-200%);
      }

      75% {
        transform: translateX(-200%);
      }

      80% {
        transform: translateX(-300%);
      }

      100% {
        transform: translateX(-300%);
      }
    }

    img {
      width: 100%;
    }
  </style>
</head>

<body>
  <?php

  $contacts  = $mysqli->query("SELECT * FROM contact");
  $crow    = $contacts->fetch_assoc();


  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.php">
        <img src="assets/img/favicon.png" style="width: 55px; height:55px;">
      </a>
      <div class="logo me-auto">
        <h1>
          <a href="index.php" style="font-size: 20.3px; ">
            Humanitarian Order of
          </a>
          <br>
          <a href="index.php" style="line-height: 33px;">
            Sierra Falconès
          </a>
        </h1>
      </div>

      <nav id="navbar" class="navbar" style="font-family: 'Poppins', sans-serif; font-size: 18px;">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">WHAT WE DO</a></li>
          <li><a class="nav-link scrollto" href="#about">THE ORGANIZATION</a></li>
          <li><a class="nav-link scrollto" href="#services">ADVOCACIES</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
          <li><a class="nav-link scrollto" href="login.php">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('accounts/assets/whatwedo/STS_04.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h4 class="animate__animated animate__fadeInDown" style="font-family: 'Poppins', sans-serif; color: white">Hello! We are the<h4>
                    <h2 class="animate__animated animate__fadeInUp" style="font-family: 'Poppins', sans-serif;">Humanitarian Order of <span> Sierra Falconès</span></h2>
              </div>
            </div>
          </div>
          <?php
          $whatwedo = $mysqli->query("SELECT * from whatwedo");
          while ($val = $whatwedo->fetch_object()) {
          ?>
            <div class="carousel-item " style="background-image: url('accounts/assets/whatwedo/<?php echo $val->photo; ?>');">
              <div class="carousel-container">
                <div class="carousel-content container">
                  <h2 class="animate__animated animate__fadeInDown" style="font-family: 'Poppins', sans-serif;"><?php echo $val->title; ?></h2>
                  <p class="animate__animated animate__fadeInUp" style="font-family: 'Poppins', sans-serif;"><?php echo $val->description; ?></p>
                </div>
              </div>
            </div>
          <?php } ?>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  <br>
  <br>

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <br>
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <?php
          $about = $mysqli->query("SELECT * from theorganization");
          while ($val1 = $about->fetch_object()) {
          ?>
            <div class="col-lg-6 video-box">
              <img src="accounts/assets/about/<?php echo $val1->image; ?>" class="img-fluid" alt="">

            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

              <div class="section-title">
                <h3>The Organization</h3>
                <br>
                <p style="font-family: 'Poppins', sans-serif;">
                  <?php echo $val1->about; ?>
                </p>
              </div>



            </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Counts Section ======= -->
    <section id="services" class="counts section-bg">
      <div class="container" data-aos="fade-up" style="color: #cab64291;">
        <div class="section-title">
          <h3>Advocacies</h3>
        </div><br><br>
        <div class="row">

          <?php
          $advocacy = $mysqli->query("SELECT * from advocacy");
          while ($val2 = $advocacy->fetch_object()) {
          ?>
            <div class="col-lg-4 col-md-6 text-center" data-aos="fade-up">
              <a href="photo.php?advocacy=<?php echo $val2->advocacy_id; ?>&title=<?php echo $val2->advocacy_title; ?>&advocacy_sub_title=<?php echo $val2->advocacy_sub_title; ?>" title="Click to View This Advocacy Gallery">
                <div class="count-box">
                  <img src="assets/img/favicon.png" style="width:120px !important;">
                  <i class="bi bi-simple-smile" style="color: #cca934;"></i>
                  <h2> <?php echo $val2->advocacy_title; ?> </h2>
                  <br>
                  <p><?php echo $val2->advocacy_sub_title; ?></p>
                  <br>
                  <p>Date :
                    <?php
                    $date = date_create($val2->advocacy_schedule_date);
                    echo date_format($date, 'F d, Y ');
                    ?>
                  </p>
              </a>
            </div>
        </div>
      <?php } ?>


      </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Contact Us</h3>
        </div>
        <br>
        <br>

        <div class="row">

          <div class="col-lg-3 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $crow['location']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo $crow['email']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo $crow['contact']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bxl-facebook-circle"></i>
              <h3>Messenger </h3>
              <p><a href="<?php echo $crow['Messenger']; ?>" target="blank">Humanitarian Order of Sierra Falconès</a></p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <iframe src="<?php echo $crow['map']; ?>" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="color: #cca934;"><i class="bi bi-arrow-up-short"></i></a>

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
  <script>
    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 3000);
  </script>
</body>

</html>