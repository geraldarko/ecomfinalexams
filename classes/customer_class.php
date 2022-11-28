<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Customer class to handle all customer functions 
*/
/**
 *@author Gerald Darko
 *
 */

class customerclass extends db_connection
{
	//--INSERT--//

	function insertcustomer($cus_fname, $cus_lname, $cus_email, $cus_pass, $cus_contact)
	{
		$sql = "INSERT INTO `customer`(`customer_firstname`, `customer_lastname`, `customer_email`, `customer_pass`, `customer_contact`, `user_role`) VALUES ('$cus_fname', '$cus_lname','$cus_email','$cus_pass','$cus_contact', '2')";

		return $this->db_query($sql);
	}

	//--SELECT--//
	function logincustomer($cus_email){

		$sql = "SELECT * FROM `customer` WHERE `customer_email` = '$cus_email'";

		return $this -> db_fetch_one($sql);
	}

	function user_email($c_id){
		$sql = "SELECT customer_email FROM customer WHERE customer_id = '$c_id'";

		return $this -> db_fetch_one($sql);
	}

	function select_user(){
		$sql ="SELECT * FROM `customer`";

		$prods = $this -> db_fetch_all($sql);
		return $prods;
	}




	//--UPDATE--//



	//--DELETE--//
	

}

?>