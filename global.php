<?php 
	$db = mysqli_connect("localhost", "root", "password", "db_cpd_recorder");
	
	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Start session
	session_start();
	date_default_timezone_set('Australia/Brisbane');
	
	//Check if logged in
	$private_pages = array("add_cpd.php","view_record.php","search_cpd.php");

	//If page is for users only AND person is NOT logged in then force login
	if (in_array(basename($_SERVER["SCRIPT_FILENAME"]),$private_pages) and
		$_SESSION["is_logged_in"] == FALSE)
	{
		header("location: login.php");
		exit();
	}

?>
