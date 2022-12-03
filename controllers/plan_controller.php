<?php
//connect to the user account class
include_once("../classes/plan_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  return $data;
}


// STYLE
//--INSERT--//


function add_style_ctrl($style_name){

  //creating an instance
  $add_style = new plan_class();

  // return method
  return $add_style -> insert_style($style_name);
}

//--SELECT--//
//selecting one style
function select_style_ctrl($style_id){

  // creating instance
  $select_style = new plan_class();

  // return method
  $data = $select_style -> select_a_style($style_id);
    return $data;
}

//selecting all styles
function select_all_styles_ctrl(){

  // creating instance
  $select_styles = new plan_class();

  // return method
  $data = $select_styles -> select_style();
    return $data;
}
//--UPDATE--//
//update all styles
function update_all_styles_ctrl($style_id, $style_name){

  //creating instance
  $update_style = new plan_class();

  // return method
  $data = $update_style -> update_style($style_id, $style_name);
    return $data;
}

//Delete styles 
function delete_style_ctr($style_id)
{
  $del = new plan_class();

  return $del->delete_style_cls($style_id);
}

/* CATEGORIES */
//insert
function add_category_ctrl($category_name){

  //creating an instance
  $add_category = new plan_class();

  // return method
  return $add_category -> insert_category($category_name);
}

//--SELECT--//
//selecting one category
function select_category_ctrl($cat_id){

  // creating instance
  $select_category = new plan_class;

  // return method
  $data = $select_category -> select_one_category($cat_id);
  
  if ($data) {
    return $data; 
  } else {
    return array(); 
  }
}

//selecting all categories
function select_all_category_ctrl(){

  // creating instance
  $select_category = new plan_class;

  // return method
  $data = $select_category -> select_category();
    return $data;
}
//--UPDATE--//

//update all brands
function update_all_category_ctrl($cat_id, $cat_name){

  //creating instance
  $update_category = new plan_class();

  // return method
  return $update_category->update_category_cls($cat_id, $cat_name);
}

//--DELETE CATEGORY--//
function delete_category_ctr($cat_id)
{
  $del = new plan_class();

  return $del->delete_category_cls($cat_id);
}



/* PRODUCT */

//--INSERT--//

function add_product_ctrl($pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey){

  //creating an instance
  $add_product = new plan_class();

  // return method
  return $add_product -> insert_product($pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey);
}

//SELECT
//selecting all product
function select_all_product_ctrl(){

  // creating instance
  $select_product = new plan_class();

  // return method
  return $select_product -> select_product();
  
}

//selecting all products
function select_all_products_ctrl(){

  // creating instance
  $select_product = new plan_class();

  // return method
  $data = $select_product -> select_product();
    return $data;
}

function search_products_ctrl($a){

  $search_product = new plan_class();

  return $search_product -> search_products($a);

}

//selecting one product
function select_product_ctrl($product_id){

  // creating instance
  $select_product = new plan_class();

  // return method
  $data = $select_product -> select_one_product($product_id);
    return $data;
}

//--UPDATE--//
//update all product
function update_all_product_ctrl($pid, $pcat, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkey){

  //creating instance
  $update_category = new plan_class();

  // return method
  return $update_category -> update_product_cls($pid, $pcat, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkey);
  
}

//--DELETE PLANS--//
function delete_plan_ctr($plan_id)
{
  $del = new plan_class();

  return $del->delete_plan_cls($plan_id);
}



// CART
function add_cart_ctrl($p_id, $ip_add, $c_id){

  //creating an instance
  $add_cart = new plan_class();

  // return method
  return $add_cart -> insert_cart($p_id, $ip_add, $c_id);
}

function select_cart_ctrl(){

  //creating an instance
  $select_cart = new plan_class();

  // return method
  return $select_cart -> select_cart();
}

// count cart
function count_cart_ctrl($cid){

  $count_cart = new plan_class();

  return $count_cart -> count_cart($cid);
}

// count one cart item
function count_one_cart_ctrl($cid){

  $count_one_cart = new plan_class();

  return $count_one_cart -> count_one_cart($cid);
}

function duplicate_cart_ctrl($pid, $cid){

  $duplicate_cart = new plan_class();

  return $duplicate_cart -> duplicate_cart($pid, $cid);
}

function duplicate_one_cart_ctrl($pid, $cid){

  $duplicate_one_cart = new plan_class();

  return $duplicate_one_cart -> duplicate_one_cart($pid, $cid);
}

function update_cart_qty_ctrl($pid, $cid){
  $update_cart = new plan_class();
  return $update_cart -> update_cart_qty($pid, $cid);
}

function update_more_cart_qty_ctrl ($pid, $cid){
  $update_more_cart = new plan_class();
  return $update_more_cart -> update_more_cart_qty($pid, $cid);
}

  // 
function delete_cart_qty_ctrl($pid, $cid){
  $delete_cart = new plan_class();
  return $delete_cart -> delete_cart_qty($pid, $cid);
}

function update_textbox_ctrl($pid, $cid, $txtbox){
  $update_textbox = new plan_class();
  return $update_textbox -> update_textbox($pid, $cid, $txtbox);
}



?>

