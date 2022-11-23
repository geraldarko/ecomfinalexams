<?php
include("../controllers/plan_controller.php");
include("../settings/core.php");


$sid = $_GET['sid'];
$style_detail = select_style_ctrl($sid);

//initiating a server to get the post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Sname_update = $_POST['update_style'];
    $check_update = update_all_styles_ctrl($sid, $Sname_update);
    if ($check_update) {
        header("location: ../view/a_addstyles.php");
    }
    else{
        return false;
    }
}

// if (logged_in() == false){
//   header('Location: ../index.php');
// }
// else {



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update Style- DAS</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
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
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
                <i class="fas fa-shopping-cart"></i> Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_addstyles.php">
                <i class="fas fa-shopping-cart"></i> Styles
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_plan.php">
                <i class="fas fa-shopping-cart"></i> Plans
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
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="d-flex justify-content-center">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Update Style</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form method="POST" action="../actions/update_style.php" class="tm-edit-product-form">
                  <input type="hidden" name="style_id" value="<?php echo($sid)?>">
                    <div class="form-group mb-3">
                      <label for="update_style">Style Name</label>
                      <input id="name" name="update_style" type="text" class="form-control validate" required value="<?php echo($style_detail['style_name'])?>">
                    </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                      </div>
                      <div class="col-6">
                        <button type="submit" name ="submit" class="btn btn-primary btn-block text-uppercase">Update Style Now</button>
                      </div>
                 </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <!-- <script>
      $(function() {
        $("#expire_date").datepicker();
        });

      
    </script> -->
  </body>
<?php
?>

</html>
