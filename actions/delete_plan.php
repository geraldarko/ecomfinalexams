<?php
include("../controllers/plan_controller.php");

    //check if user data exists.

        //grab form data
        // capture form data

$plan_id = $_GET['pid'];
      
        
        // // call controller
        // this should be update
$check = delete_plan_ctr($plan_id);
        

        // // method check
        // set session, redirect to home page, 
if($check){
header('location: ../view/a_plan.php'); 
}
else{
echo "Insertion failed!";  
}
    
?>