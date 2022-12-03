<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] != 1) {
    header("location: ../index.php");
    exit;
}

require_once("../controllers/customer_controller.php");

require_once("../controllers/cart_controller.php");




?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - DAS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/admin_bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/admin_templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="a_dashboard.php">
                    <h1 class="tm-site-title mb-0">Administrator</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="a_addcategories.php">
                                <i class="fas fa-shopping-cart"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="a_addstyles.php">
                                <i class="fas fa-shopping-cart"></i>
                                Styles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="a_plan.php">
                                <i class="fas fa-shopping-cart"></i>
                                Plans
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="a_viewaccounts.php">
                                <i class="far fa-user"></i>
                                Users Accounts
                            </a>
                        </li>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="../actions/logout.php">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>



            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <h2 class="tm-block-title">Sales List</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"> FIRST NAME</th>
                                <th scope="col"> LAST NAME</th>
                                <th scope="col"> EMAIL</th>
                                <th scope="col">DATE</th>
                                <th scope="col">INVOICE NO</th>
                                <!-- <th scope="col">PLAN TITLE</th> -->
                            </tr>
                        </thead>


                        <tbody>
                            <?php

                            $orderlist = select_orders_ctr();
                            foreach ($orderlist as $showorder) :

                                $c_id = $showorder['customer_id'];
                                // $plan_id = $showproduct['plan_id'];
                                $customer = select_one_user($c_id);
                                // $product = select_product_ctrl($product_id);
                                //foreach ($customerlist as $showcustomer) :

                            ?>

                            
                            


                                    <tr>
                                        <th scope="row"><b><?php echo $customer['customer_firstname'] ?> </b></th>
                                        <td class="tm-product-name"><?php echo $customer['customer_lastname'] ?></td>
                                        <td><?php echo $customer['customer_email'] ?></td>
                                        <td><?php echo $showorder['order_date'] ?></td>
                                        <td><?php echo $showorder['invoice_no'] ?></td>
                                        <!-- <td>$<?php echo $showdetails['plan_price'] ?></td> -->

                                    </tr>
                                <?php
                                endforeach;
                                ?>
                        </tbody>
                    </table>

                    <?php
                    // endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
                Copyright &copy; <b>2022</b> All rights reserved.
                Darkus Architectural Services<a rel="nofollow noopener" href="" class="tm-footer-link"></a>
            </p>
        </div>
    </footer>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="../js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="../js/tooplate-scripts.js"></script>
    </script>
</body>

</html>