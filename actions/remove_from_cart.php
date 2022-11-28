<?php
    include_once("../controllers/cart_controller.php");
    session_start();

    if(isset($_GET['deleteProduct'])){
        $cid=$_SESSION['customer_id'];
        $pid= $_GET['id'];

        // echo $cid;
        // echo "space";
        // echo $pid;

        if(delete_from_cart($cid,$pid)){
            echo "deleted";
            header('Location: ../view/cart.php');
        }
        else{
            echo "Not deleted.";
        }
    }
?>
