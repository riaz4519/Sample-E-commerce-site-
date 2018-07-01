<?php 
	require("database.php");
	/**
	* 
	*/
	class need_function 
	{
		
		function __construct()
		{
			$data = new database;

		}
		public function select_data($query){
			global $connect;
			$result = $connect->query($query);
			return $connect->fetch_assoc($result);

		}
	}
	$hello = new need_function;




?>