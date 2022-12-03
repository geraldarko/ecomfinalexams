<?php

include_once("../controllers/cart_controller.php");
// Retrieves the brand name and passes it into the add brand controller
session_start();

if (!isset($_SESSION['customer_id'])) {
    header('Location: ../view/login.php');
} else {
    $cid = $_SESSION['customer_id'];
    $pid = $_GET['id'];

    echo $pid; 


    $ip_address = $_SERVER["REMOTE_ADDR"];


    // echo $cid;
    // echo $pid;

    $duplicate_check = duplicate_cart_ctrl($pid, $cid);


    if(duplicate_cart_ctrl($pid, $cid)>0){
        echo "<script> alert('Item already in cart'); </script>";
        echo "<script> window.location.replace('../view/plan.php'); </script>"; 
        
    }
    else{
        $cart_check = add_cart_ctrl($pid, $ip_address, $cid); 
        if ($cart_check) {
            //echo "Brand name inserted successfully"; 
            header('Location: ../view/plan.php');
        }
        else{
            echo "cart insertion failed";
        }
    }

}


?>

