<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->
<?php 
session_start();

require("../controllers/plan_controller.php");


$message = "<a class='nav-link' href='login.php'>Login</a>";
if (isset($_SESSION['loggedin'])){
  $message = "<a class='nav-link' href='../actions/logout.php'>Logout</a>";
}

$pid = $_GET['id']; 
$product_one = select_plan_ctrl($pid);

$product_id = $product_one['plan_id'];
$product_name = $product_one['plan_title'];


$addtocart = "<a class='btn btn-primary' href='login.php'> Add To Cart </a>";
if (isset($_SESSION['loggedin'])){
  $addtocart = "<a class='btn btn-primary' href='../actions/add_to_cart.php?id={$product_one['plan_id']}'> Add To Cart </a>";
}





?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Home</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="../plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="../plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="../css/user/style.css">

  <link rel="stylesheet" href="../css/user/avicss/style.css">

  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/aviplugins/themefisher-font/style.css">


</head>

<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="top-info text-center text-md-left">
              <li><i class="fas fa-map-marker-alt"></i>
                <p class="info-text">Darkus Architectural Services, Ghana</p>
              </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <!-- <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
              <li>
                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="https://twitter.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-twitter"></i></span>
                </a>
                <a title="Instagram" href="https://instagram.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-instagram"></i></span>
                </a>
                <a title="Linkdin" href="https://github.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-github"></i></span>
                </a>
              </li>
            </ul>
          </div> -->
          <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->


    <header id="header" class="header-two">
      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">

                <div class="logo">
                  <a class="d-block" href="index-2.html">
                    <!-- <img loading="lazy" src="images/logo.png" alt="Constra"> -->
                  </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav ml-auto align-items-center">
                    <li class="nav-item dropdown active">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <ul class="dropdown-menu" role="menu">
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i
                          class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>

                      </ul>
                    </li>

                    </li>
                    <li class="nav-item"><a class="nav-link" href="plan.php">Plans</a></li>

                    <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>

                    <li class="nav-item"><?php echo $message;?></li>

                    <li class="header-get-a-quote">
                      <a class="btn btn-primary" href="plan.php">Get Your Building Plans</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
        </div>
        <!--/ Container end -->

      </div>
      <!--/ Navigation end -->
    </header>
    <!--/ Header end -->


    <?php
             $pid = $_GET['id']; 
              $product_one = select_plan_ctrl($pid);

            $product_id = $product_one['plan_id'];
            $product_name = $product_one['plan_title'];
            
          ?>



    <section class="products section bg-gray">
      <div class="container">
        <div class="row mt-20">
          <div class="col-md-5">
            <div class="single-product-slider">
              <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                <div class='carousel-outer'>
                  <!-- me art lab slider -->
                  <div class='carousel-inner '>
                    <div class='item active'>
                      <img src=<?php echo $product_one['plan_image']?>
                        data-zoom-image="" width="100%" />
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>

          <div class="col-md-7">
            <div class="single-product-details">
              <h3><?php echo $product_one['plan_title']?></h3>
              <p class="product-price">GH??? <?php echo $product_one['plan_price']?></p>

              <div class="tab-content patternbg">
                <div id="details" class="">
                  <h5><?php echo $product_one['plan_desc']?></h5>

                </div>
              </div>

              </div>

              <br>
              <br>

             <?php echo $addtocart;?>
              <!-- <a class="btn btn-primary" href="../actions/add_to_cart.php?id=<?php echo $product_one['plan_id'];?>"> Add To Cart </a> -->
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <br>
  <section class="subscribe no-padding">


    <footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">About Us</h3>
              <!-- <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra"> -->
              <p>Darkus Architecture Service provides services that include concept design development, preparation of
                construction documents and construction administration</p>
              <!-- <div class="footer-social">
                <ul>
                  <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                        class="fab fa-instagram"></i></a></li>
                  <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a>
                  </li>
                </ul>
              </div>Footer social end -->
            </div><!-- Col end -->

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">Working Hours</h3>
              <div class="working-hours">
                We work 5 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                Hotline and Contact form.
                <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                <!-- <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span> -->
              </div>
            </div><!-- Col end -->

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Services</h3>
              <ul class="list-arrow">
                <li><a href="services.php">Interior Design</a></li>
                <li><a href="services.php">Exterior Design</a></li>
                <li><a href="services.php">Construction Management</a></li>
              </ul>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-info">
                <span>Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, Designed &amp; Developed by Gerald Industries</a>
                </span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="footer-menu text-center text-md-right">
                <ul class="list-unstyled">
                  <!-- <li><a href="about.html">About</a></li> -->
                  <!-- <li><a href="team.html">Our people</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="news-left-sidebar.html">Blog</a></li>
                <li><a href="pricing.html">Pricing</a></li> -->
                </ul>
              </div>
            </div>
          </div><!-- Row end -->

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer><!-- Footer end -->


    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="../plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="../plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="../plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="../plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="../plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="../js/script.js"></script>

    </div><!-- Body inner end -->
</body>

</html>