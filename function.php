<?php 
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "fashion");
$connect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($connect->connect_error){
	echo "connect error";

}
	function select_fun($query){
		global $connect;
		return $result =$connect->query($query);
		

	}
	function update_fun($query){
		global $connect;
		return $result =$connect->query($query);

	}
	function insert_fun($query){
		global $connect;
		return $result = $connect->query($query); 	
	}
	function delete_fun($query){
		global $connect;
		return $result = $connect->query($query);
	}

?>