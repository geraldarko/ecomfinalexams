<?php
require("../controllers/customer_controller.php");

if (isset($_POST["submit"])) {
    $fname = $_POST['fullname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    /*$image = $_POST['image'];*/

    // encryption of password using hash.
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // check whether function works  This is a controller 
    $check = addcustomer_ctrl($fname, $lname, $email, $hash, $contact);

    if ($check) {
        echo "Registration Successful";
        header("Location: ../view/login.php");
    }else{
        echo "not working";
    }

}


?>