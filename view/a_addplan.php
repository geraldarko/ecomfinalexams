<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] != 1){
    header("location: ../index.php");
    exit;
}

require("../controllers/plan_controller.php");
// include("../settings/core.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Add Plan - DAS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="../css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="../jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
  <!-- http://api.jqueryui.com/datepicker/ -->
  <link rel="stylesheet" href="../css/admin_bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="../css/admin_templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>

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
              <i class="fa fa-square"></i> Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a_addstyles.php">
              <i class="fa fa-map"></i> Styles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a_plan.php">
              <i class="fa fa-home"></i> Plans
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a_viewaccounts.php">
              <i class="far fa-user"></i> Accounts
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
  <div class="container tm-mt-big tm-mb-big">
    <div class="row">

      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">

          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Add Building Plan</h2>
            </div>
          </div>



          <div class="row tm-edit-product-row">

            <div class="col-xl-6 col-lg-6 col-md-12">

              <form action="../actions/add_plan.php" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">


                <div class="form-group mb-3">

                  <label for="name">Plan Name
                  </label>
                  <input id="name" name="ptitle" type="text" class="form-control validate" required />

                </div>

                <div class="form-group mb-3">
                  <label for="description" name="pdescr">Plan Description</label>
                  <input id="name" name="pdescr" type="text" class="form-control validate" rows="3" required />
                </div>
                <div class="form-group mb-3"> <label for="category">Plan Category</label>
                  <!-- <select class="custom-select tm-select-accounts" id="category">
                      <option selected>Select category</option>
                      <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option> -->

                  <select class="custom-select tm-select-accounts" id="category" name="category" id="category">
                  <option selected>Select Category</option>
                    <?php

                    $cat_option = select_all_category_ctrl();

                    if ($cat_option) {
                      foreach ($cat_option as $cat_one) {
                        $cat_id = $cat_one['cat_id'];
                        $cat_name = $cat_one['cat_name'];

                        echo "<option value = $cat_id>$cat_name</option>";
                      }
                    } else {
                      echo "<option value = 'not available'>Category not found</option>";
                    }

                    ?>
                  </select>
                  </select>
                </div>
                <div class="form-group mb-3"> <label for="style">Plan Style</label>
                  <select name="style" id="stle" class="custom-select tm-select-accounts" id="style">
                  <option selected>Select Style</option>
                    <?php
                    $style_option = select_all_styles_ctrl();

                    if ($style_option) {
                      foreach ($style_option as $style_one) {
                        $style_id = $style_one['style_id'];
                        $style_name = $style_one['style_name'];

                        echo "<option value = $style_id>$style_name</option>";
                      }
                    } else {
                      echo "<option value = 'not available'>Brand not found</option>";
                    }

                    ?>
                  </select>
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="expire_date">Plan Price (GH₵) 
                    </label>
                    <input id="expire_date" name="pprice" type="number" min="0" class="form-control validate" data-large-mode="true" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="stock">Keywords
                    </label>
                    <input id="stock" name="pkey" type="text" class="form-control validate" required />
                  </div>
                </div>

            </div>
            <div class="tm-product-img-dummy mx-auto">

            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
             <div class="tm-product-img-dummy mx-auto">
                <i class="fas fa-cloud-upload-alt tm-upload-icon" ></i> 

              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="fileInput" type="file" style="display:none;" />
                <input type="file" name="pimage" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE"/>
              </div> 

            </div>
            </div>
            <div class="col-12">
              <button type="submit" name="add_product" class="btn btn-primary btn-block text-uppercase">Add Plan Now</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2022</b> All rights reserved.

        Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
      </p>
    </div>
  </footer>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
  <!-- https://jqueryui.com/download/ -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function() {
      $("#expire_date").datepicker();
    });
  </script>
</body>


</html>