<?php
require("../controllers/plan_controller.php");
include("../settings/core.php");

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
  <link rel="stylesheet" href="../css/admin_bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="../css/admin_templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
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
            <a class="nav-link d-block" href="login.html">
              Admin, <b>Logout</b>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="tm-bg-primary-dark tm-block tm-block-products">
    <a href="a_addplan.php" class="btn btn-primary btn-block text-uppercase mb-3">Add new plan</a>
    <!-- <button class="btn btn-primary btn-block text-uppercase">
      Delete selected Plans
    </button> -->
    <br>
    <div class="tm-product-table-container">
      <table class="table table-hover tm-table-small tm-product-table">
        <thead>
          <tr>
            <th scope="col">CATEGORY</th>
            <th scope="col">STYLE</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">IMAGE</th>
            <th scope="col">KEYWORDS</th>
            <th scope="col">ACTIONS</th>

          </tr>

          <?php
          $productlist = select_all_product_ctrl();
          foreach ($productlist as $showproduct) :

          ?>
        </thead>
        <tbody>
          <tr>
            <td class="tm-product-name"> <?php $cat = select_category_ctrl($showproduct['plan_cat']);
                                          echo $cat['cat_name']; ?></td>
            <td> <?php $brand = select_style_ctrl($showproduct['plan_style']);
                  echo $brand['style_name']; ?></td>
            <td> <?php echo $showproduct['plan_title'] ?></td>
            <td> <?php echo $showproduct['plan_price'] ?></td>
            <td> <?php echo $showproduct['plan_desc'] ?></td>
            <td> <img src="<?php echo $showproduct['plan_image'] ?>" width="50" height="50"></td>
            <td> <?php echo $showproduct['plan_keywords'] ?></td>
            <td>

              <a href='../view/a_updateplan.php?id=<?php echo $showproduct['plan_id'];?>' class="tm-product-delete-link">
                <i class="far fa-edit tm-product-delete-icon"></i>
              </a>
              <a href="../actions/delete_plan.php?pid=<?php echo $showproduct['plan_id'];?>" class="tm-product-delete-link">
                <i class="far fa-trash-alt tm-product-delete-icon"></i>
              </a>
            </td>

          <?php
          endforeach;
          ?>
          </tr>


        </tbody>
      </table>
    </div>
    <!-- table container -->
  </div>
  </div>
  </div>
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
  <script src="../js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function() {
      $(".tm-product-name").on("click", function() {
        window.location.href = "edit-product.html";
      });
    });
  </script>
</body>

</html>