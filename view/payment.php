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
$message = "<a class='nav-link' href='login.php'>Login</a>";
if (isset($_SESSION['loggedin'])) {
    $message = "<a class='nav-link' href='../actions/logout.php'>Logout</a>";
}

$cartcheck = "<a class='nav-link' href='login.php'>Cart</a>";
if (isset($_SESSION['loggedin'])){
  $cartcheck = "<a class='nav-link' href='cart.php'>Cart</a>";
}

require("../controllers/cart_controller.php");

require("../controllers/customer_controller.php");

$c_id = $_SESSION['customer_id'];

$count_cart = count_cart_ctrl($c_id);
$every_item = every_cart_item_ctr($c_id);
$total_price = total_price_ctrl($c_id);
$c_email = user_email_ctrl($c_id);


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
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
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
                    </div>
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
                                    <a class="d-block" href="../index.html">
                                        <!-- <img loading="lazy" src="images/logo.png" alt="Constra"> -->
                                    </a>
                                </div><!-- logo end -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="faq.php">Faq</a></li>
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="contact.php">Contact</a></li>

                                            </ul>
                                        </li>

                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="plan.php">Plans</a></li>

                                        <li class="nav-item"><?php echo $cartcheck;?></li>

                                        <li class="nav-item"><?php echo $message; ?></li>

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

        <center>

            <br>
            <br>
            <br>
            <p> Total number of plans in the cart: <b><?php echo $count_cart[0]['SUM(qty)'] ?></b></p>
        </center>
        <center>
            <div class="page-wrapper">
                <div class="cart shopping">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="block">
                                    <div class="product-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="">Plan Name</th>
                                                    <th class="">Price</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                                $cart_option = select_cart_ctrl($_SESSION['customer_id']);
                                                //print_r($cart_option);

                                                //if ($product_option) {
                                                foreach ($cart_option as $cart_one) {
                                                    // print_r($cart_one);
                                                    $product_name = $cart_one['plan_title'];
                                                    // echo "$product_name";
                                                    $product_price = $cart_one['plan_price'];
                                                    $product_desc = $cart_one['plan_desc'];
                                                    $product_image = $cart_one['plan_image'];

                                                    //echo "<option value = $product_id>$product_name</option>";
                                                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                        $pid = $_POST['id'];
                                                    }

                                                    //else {echo "<option value = 'not available'>product not found</option>";
                                                ?>
                                                    <tr class="">
                                                        <td class="">
                                                            <div class="product-info">
                                                                <img src="<?php echo $cart_one['plan_image'] ?>" alt="" height=100% width="40%" />
                                                                <a href="#!"><?php echo $cart_one['plan_title'] ?></a>
                                                            </div>
                                                        </td>
                                                        <td class="">??<?php echo $cart_one['plan_price'] ?></td>
                                                        <td class="">

                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="">


                                                            <a href="#!">Total Price:</a>
                                    </div>
                                    </td>
                                    <td class="">GH?? <?php echo $total_price["SUM(cart.qty * plan.plan_price)"] ?>.00</td>
                                    <td class="">

                                    </td>

                                    </tr>

                                    </tbody>




                                    </table>
                                    <!-- <a href="payment.php" class="btn btn-main pull-right">Checkout</a> -->
                                    <form action="#" method="post">
                                        <form id="paymentForm">
                                            <div class="form-group">
                                                <!-- <label for="email"><b>Email Address:</b></label><br> -->
                                                <input type="hidden" id="email-address" value="<?php echo $c_email['customer_email'] ?>" required />
                                            </div>

                                            <br>
                                            <center>
                                                <div class="form-group">
                                                    <!-- <label for="amount"><b>Amount (GHS):</b></label><br> -->
                                                    <!-- <input type="number" id="amount" required /> -->
                                                    <textarea name="amount" id="amount" cols="5" rows="1" readonly="readonly" hidden><?php echo $total_price["SUM(cart.qty * plan.plan_price)"] ?></textarea>
                                                </div>
                                            </center>

                                            <div class="form-submit">
                                                <center> <button type="submit" class="btn btn-main pull-right" onclick="payWithPaystack()"> Pay </button></center>
                                            </div>
                                        </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </center>



   <!-- Payment Method -->
    <script>
   
        function payWithPaystack() {
            event.preventDefault();
            let handler = PaystackPop.setup({

                key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Live Public Key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                currency: 'GHS',
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                    // add_payment_detail_ctrl
                    email = document.getElementById("email-address").value;
                    amount = document.getElementById("amount").value;
                    var dataString = 'email=' + email + '&amount=' + amount;
                    if (response.status == 'success') {
                        //alert("Please Fill All Fields");

                        $.ajax({
                            type: "POST",
                            url: "../actions/process_payment.php",
                            data: dataString,
                            cache: false,
                            success: function(result) {
                                // alert(result);
                                window.location = "paymentsuccess.php";
                                // window.location = "pay"
                            }
                        });
                    }


                }


            });
            handler.openIframe();
        }
    </script>




    <br>
    <section class="subscribe no-padding">


        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">About Us</h3>
                            <!-- <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra"> -->
                            <p>Darkus Architecture Service provides services that include concept design development, preparation of construction documents and construction administration</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div><!-- Footer social end -->
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
                                <span>Copyright &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script>, Designed &amp; Developed by Gerald Industries</a></span>
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