<?php 
	$db = mysqli_connect("localhost", "root", "password", "db_cpd_recorder");
	
	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Start session
	session_start();
	date_default_timezone_set('Australia/Brisbane');
	
	/* $name_of_query_return = mysqli_query($db,"sql query")
	 * while ($ls_var = mysqli_fetch_assoc($name_of_query_return)){
	 * echo $ls_var['item in array']
	 * } 
	 */
?>
