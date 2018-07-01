<?php 
	require("config.php");
	/**
	* 
	*/
	class database
	{
		
		function __construct(){
		global $connect;
		$connect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if($connect->connect_error){
			echo "connect error";
	
		}


	}
	}



	

?>