<?php
require("../controllers/customer_controller.php");

$errors = array();



if (isset($_POST["submit"])) {
    $fname = $_POST['fullname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $contact = $_POST['contact'];

    if(empty($fname)){
        array_push($errors, "Enter first name");
    }

    if(empty($lname)){
        array_push($errors, "Enter last name");
    }


    if(empty($email)){
        array_push($errors, "Enter Email");
    }


    if(empty($password)){
        array_push($errors, "Enter first name");
    }


    if(empty($contact)){
        array_push($errors, "Enter a valid contact");
    }

    if ($password != $confirm) {
        array_push($errors, "Passwords must match"); 
    }

    if(strlen($contact) != 10){
        array_push($errors, "Invalid contact info");  
    }

    if ($contact[0] != '0') {
        array_push($errors, "Invalid Number format"); 
    }

    $data = duplicate_email($email); 
    if (!empty($data)) {
        array_push($errors, "email already exists"); 
    }


    /*$image = $_POST['image'];*/

    // encryption of password using hash.
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (count($errors) == 0) {
        $check = addcustomer_ctrl($fname, $lname, $email, $hash, $contact);
        if ($check) {
            echo "Registration Successful";
            header("Location: ../view/login.php");
        } else {
            echo "registration failed";
            header('location: ../view/register.php'); 
        }
    }
    // check whether function works  This is a controller 
   else{
        session_start();
        $_SESSION['errors'] = $errors;
        header('location: ../view/register.php'); 
    }

}


?>