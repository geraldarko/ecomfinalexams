<?php
//connect to database class
require("../settings/db_class.php");

/**
*Product class to handle all product functions 
*/
/**
 *@author Gerald Darko 
 *
 */

class plan_class extends db_connection
{
	//--INSERT--//

	function insert_style($style_name){

		$sql = "INSERT INTO `style`(`style_name`) VALUES ('$style_name')";

		return $this -> db_query($sql);
	}

	//--SELECT--//
	//Select all
	function select_style(){
		$sql =" SELECT * FROM `style`";

		return $this -> db_fetch_all($sql);
	}

	//Select one
	function select_a_style($style_id){
		$sql =" SELECT * FROM `style` WHERE `style_id` = '$style_id'";

		return $this -> db_fetch_one($sql);
	}

	//--UPDATE--//
	function update_style($style_id, $style_name){
	$sql = "UPDATE style SET style_name = '$style_name' WHERE style_id = $style_id";

	return $this -> db_query($sql);
	}

    	//--DELETE--//
	public function delete_style_cls($style_id){
	$sql= "DELETE FROM `style` WHERE `style_id` = '$style_id'";
	return $this->db_query($sql);
	} 

	/* CATEGORIES */

	//--INSERT--//

	function insert_category($category_name){

		$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$category_name')";

		return $this -> db_query($sql);
	}

	//--SELECT--//
	//Select all
	function select_category(){
		$sql =" SELECT * FROM `categories`";

		return $this -> db_fetch_all($sql);
	}

	//Select one
	function select_one_category($cat_id){
		$sql =" SELECT * FROM `categories` WHERE `cat_id` = '$cat_id'";

		return $this -> db_fetch_one($sql);
	}

	//--UPDATE--//
	function update_category_cls($cat_id, $cat_name){
	$sql = "UPDATE categories SET cat_name = '$cat_name' WHERE cat_id = $cat_id";
	return $this -> db_query($sql);
	}

	public function delete_category_cls($cat_id){
    $sql= "DELETE FROM `categories` WHERE `cat_id` = '$cat_id'";
		return $this->db_query($sql);
	} 
	
	/* PRODUCT */
	//--INSERT--//

	function insert_product($pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey){

		$sql = "INSERT INTO `plan`(`plan_cat`, `plan_style`, `plan_title`, `plan_price`, `plan_desc`, `plan_image`, `plan_keywords`) 
				VALUES ('$pcat', '$pbrand', '$ptitle', '$pprice', '$pdescr', '$pimage', '$pkey')";
	
		return $this -> db_query($sql);
	}
	
	//--SELECT--//
		//Select all
		function select_product(){
			$sql =" SELECT * FROM `plan`";
	
			$prods = $this -> db_fetch_all($sql);
			return $prods;
		}
	
	
	
		//Select one
		function select_one_product($product_id){
			$sql =" SELECT * FROM `plan` WHERE `plan_id` = '$product_id'";
	
			return $this -> db_fetch_one($sql);
		}
	
		//--Search all--//
		function search_products($a){
			$sql = "SELECT * FROM `plan` WHERE `plan_title` LIKE '%$a%'";
			return $this ->db_fetch_all($sql);
			//return $sql;
		}
	
	
		//--UPDATE--//
		function update_product_cls($pid, $pcat, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkey){
			$sql = "UPDATE plan SET plan_cat = '$pcat', plan_style = '$pbrand', plan_title = '$ptitle', plan_price = '$pprice', plan_desc = '$pdesc', plan_image = '$pimage', plan_keywords = '$pkey' 
			WHERE plan_id = $pid";
		
			return $this -> db_query($sql);
			}

		
		public function delete_plan_cls($plan_id){
		$sql= "DELETE FROM `plan` WHERE `plan_id` = '$plan_id'";
		return $this->db_query($sql);
		} 

	}