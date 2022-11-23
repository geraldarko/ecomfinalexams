<?php

include("../controllers/plan_controller.php");
// Retrieves the category name and passes it into the add category controller
$category_name = $_POST['cat_name'];

$category_check = add_category_ctrl($category_name);

if ($category_check) {
	echo "Category name inserted successfully";
	header('Location: ../view/a_addcategories.php');
}
else{
	echo "Category name insertion failed";
}

?>

