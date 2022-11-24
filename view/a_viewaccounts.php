<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] != 1){
    header("location: ../index.php");
    exit;
}


require("../controllers/customer_controller.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Contacts</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="../css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="../css/admin_bootstrap.min.css" />
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
              <a class="nav-link" href="a_dashboard.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_addcategories.php">
                <i class="fa fa-square"></i>
                Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_addstyles.php">
                <i class="fa fa-map"></i>
                Styles
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_plan.php">
                <i class="fa fa-home"></i>
                Plans
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_viewaccounts.php">
                <i class="far fa-user"></i>
                Users Accounts
              </a>
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
    <div class="tm-product-table-container">
      <table class="table table-hover tm-table-small tm-product-table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">FIRST NAME</th>
            <th scope="col">LAST NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CONTACT</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>

        <tr>
          <?php
          $customerlist = select_user_ctrl();
          foreach ($customerlist as $showcustomer) :
          ?>

            <tbody>

              <th scope="row"></th>
              <td class="tm-product-name"><?php echo $showcustomer['customer_firstname'] ?></td>
              <td class="tm-product-name"><?php echo $showcustomer['customer_lastname'] ?></td>
              <td><?php echo $showcustomer['customer_email'] ?></td>
              <td><?php echo $showcustomer['customer_contact'] ?></td>
              <th scope="row"></th>
              <!-- <td>
                <a href="#" class="tm-product-delete-link">
                  <i class="far fa-pencil-alt tm-product-delete-icon"></i>
                </a>
                <a href="#" class="tm-product-delete-link">
                  <i class="far fa-trash-alt tm-product-delete-icon"></i>
                </a>
              </td> -->

            <?php
          endforeach;
            ?>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br>
  <br>

  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2022</b> All rights reserved.

        Darkus Architectural Services <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link"></a>
      </p>
    </div>
  </footer>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
</body>

</html>