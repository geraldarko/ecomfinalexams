<?php
include("../controllers/plan_controller.php");

    //check if user data exists.

        //grab form data
        // capture form data

$cat_id = $_GET['cid'];
      
        
        // // call controller
        // this should be update
$check = delete_category_ctr($cat_id);
        

        // // method check
        // set session, redirect to home page, 
if($check){
header('location: ../view/a_addcategories.php'); 
}
else{
echo "Insertion failed!";  
}
    
?>