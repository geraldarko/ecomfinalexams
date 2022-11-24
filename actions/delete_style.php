<?php
include("../controllers/plan_controller.php");

    //check if user data exists.

        //grab form data
        // capture form data

$style_id = $_GET['sid'];
      
        
        // // call controller
        // this should be update
$check = delete_style_ctr($style_id);
        

        // // method check
        // set session, redirect to home page, 
if($check){
header('location: ../view/a_addstyles.php'); 
}
else{
echo "Insertion failed!";  
}
    
?>