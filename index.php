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
$message = "<a class='nav-link' href='view/login.php'>Login</a>";
if (isset($_SESSION['loggedin'])){
  $message = "<a class='nav-link' href='actions/logout.php'>Logout</a>";
}

$cartcheck = "<a class='nav-link' href='view/login.php'>Cart</a>";
if (isset($_SESSION['loggedin'])){
  $cartcheck = "<a class='nav-link' href='view/cart.php'>Cart</a>";
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
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/user/style.css">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Darkus Architectural Services, Ghana</p>
                    </li>
                </ul>
              </div>
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
                    <a class="d-block" href="../index.php">
                      <!-- <img loading="lazy" src="images/logo.png" alt="Constra"> -->
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item dropdown active">
                           <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                          <ul class="dropdown-menu" role="menu">
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="view/about.php">About Us</a></li>
                            <li><a href="view/faq.php">Faq</a></li>
                            <li><a href="view/services.php">Services</a></li>
                            <li><a href="view/contact.php">Contact</a></li>
                          </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href="view/plan.php">Plans</a></li>

                      <li class="nav-item"><?php echo $cartcheck;?></li>

                      <li class="nav-item"><?php echo $message;?></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="view/plan.php">Get Your Building Plans</a>
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

<div class="banner-carousel banner-carousel-2 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/user/slider-main/bg1.jpg)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title">15 Years Of Excellence In</h2>
              <h3 class="box-slide-sub-title">Construction Industry</h3>
              <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
                thinking team looking for talent like.</p>
              <p>
                <a href="view/services.php" class="slider btn btn-primary">Our Service</a>
              </p>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/user/slider-main/bg5.jpg)">
    <div class="slider-content text-left">
        <div class="container">
          <div class="box-slider-content">
              <div class="box-slider-text">
                <h2 class="box-slide-title">When Services Matters</h2>
                <h3 class="box-slide-sub-title">Your Choice is Simple</h3>
                <p class="box-slide-description">If you’re looking to design your dream home but don’t know where to begin, you’re in the right place! </p>
                <p><a href="view/plan.php" class="slider btn btn-primary" aria-label="about-us">Our Designs</a></p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on construction</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-primary" href="view/plan.php">Get A Building Plan</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
             
              <div class="d-flex">
                <div class="ts-service-box-img">
                    <img loading="lazy" src="images/user/icon-image/service-icon1.png" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                    <h3 class="service-box-title">Zero Harm Everyday</h3>
                    <p>We prioritize the safety of our clients and workers, hence we ensure any one who visits our offices for business plans or visit the site is secured and protected.</p>
                </div>
              </div>
          </div><!-- Service1 end -->
        </div><!-- Col 1 end -->

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              
              <div class="d-flex">
                <div class="ts-service-box-img">
                    <img loading="lazy" src="images/user/icon-image/service-icon2.png" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                    <h3 class="service-box-title">Customize Any Plan</h3>
                    <p>You've found a home plan that you like a lot, but you'd prefer the rooms to be placed differently.Our in-house specialists to suit your precise requirements!</p>
                </div>
              </div>
          </div><!-- Service2 end -->
        </div><!-- Col 2 end -->

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              
              <div class="d-flex">
                <div class="ts-service-box-img">
                    <img loading="lazy" src="images/user/icon-image/service-icon3.png" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                    <h3 class="service-box-title">Best Price Guaranteed</h3>
                    <p>We offer a wide selection of designs at the most affordable price, so whether you're looking for a modest house plan or a lavish mansion design, we have it. </p>
                </div>
              </div>
          </div><!-- Service3 end -->
        </div><!-- Col 3 end -->
    </div><!-- Content row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/user/icon-image/fact1.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="54">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/user/icon-image/fact2.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="3">0</span></h2>
                <h3 class="ts-facts-title">Services </h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/user/icon-image/fact3.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="65">0</span></h2>
                <h3 class="ts-facts-title">Total Building Plans</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/user/icon-image/fact4.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4">0</span></h2>
                <h3 class="ts-facts-title">Region Experience</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
        </div>


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/user/projects/project1.jpeg" aria-label="project-img">
                <img class="img-fluid" src="images/user/projects/project1.jpeg" alt="project-img">
                <!-- <span class="gallery-icon"><i class="fa fa-plus"></i></span> -->
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="view/plan.php">Semi Detached Office Building</a>
                  </h3>
                  <p class="project-cat">Commercial, Exterior</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/user/projects/project2.jpeg" aria-label="project-img">
                <img class="img-fluid" src="images/user/projects/project2.jpeg" alt="project-img">
                <!-- <span class="gallery-icon"><i class="fa fa-plus"></i></span> -->
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="view/plan.php"> Special Home and Office Plaza</a>
                  </h3>
                  <p class="project-cat">Homes and Offices</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/user/projects/project3.png" aria-label="project-img">
                <img class="img-fluid" src="images/user/projects/project3.png" alt="project-img">
                <!-- <span class="gallery-icon"><i class="fa fa-plus"></i></span> -->
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="view/plan.php">Semi Detached Office Building</a>
                  </h3>
                  <p class="project-cat">Left Wing, Exterior</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->
        </div><!-- shuffle end -->
      </div>
    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      It has been a pleasure working with you guys. We always put your name forward to anyone asking for an architect as the documentation you supply is more thorough than any of the other architects we work with. If only everyone detailed their work so well.
                    </span>

                    <div class="quote-item-footer">
                      <!-- <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial"> -->
                      <div class="quote-item-info">
                          <h3 class="quote-author">Mr Osei</h3>
                          <span class="quote-subtext">Lexta, Ghana</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Mr Darko helped us to transform our dark 1980s brick house in to a beautiful modern light filled home. We would highly recommend MLA to anyone considering renovating a property
                    </span>

                    <div class="quote-item-footer">
                      <!-- <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial"> -->
                      <div class="quote-item-info">
                          <h3 class="quote-author">Mr Martin</h3>
                          <span class="quote-subtext">CEO, Super Santi</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/user/clients/lexta.jpeg" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/user/clients/myron.jpeg" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/user/clients/ama.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/user/clients/dev.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/user/clients/ag.jpg" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/user/clients/client6.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+233) 244 417 579</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Email Us</h4>
                <p class="text-white">Customise your plans with us</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="darkusarchservices@gmail.com" readonly>
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>

<!--/ News end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <!-- <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra"> -->
            <p>Darkus Architecture Service provides services that include concept design development, preparation of construction documents and construction administration</p>
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 5 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="view/services.php">Interior Design</a></li>
              <li><a href="view/services.php">Exterior Design</a></li>
              <li><a href="view/services.php">Construction Management</a></li>
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
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by Gerald Industries</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
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
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>
