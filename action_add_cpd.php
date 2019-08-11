<!-- Action the new log-in request -->
<?php 
	//Include other files
	include 'global.php';
	
	//Assign variables
	//$_SESSION["cur_usr_id"]
	
	//Insert input into users_activities tables
	$cpd_add_query = mysqli_query($db,"
	INSERT INTO cpd_activities (
		title,
		accredited,
		accred_num,
		hours,
		type,
		provider_id,
		group
	)VALUES (
		'".$_POST["act-title"]."',
		'".(isset($_POST["act-accred"]))."',
		'".$_POST["act-accred-no"]."',
		'".$_POST["act-cred"]."',
		'".$_POST["act-type"]."',
		'".$_POST["act-provider"]."',
		'".$_POST["cpd-group"]."'"
	)or 
	die(mysqli_error());
	
	//Grabs the id for the last insert into the database
	$newActivityID = mysqli_insert_id($db);
	
	//Insert competencies into activity_competencies tables
	//Return inserted activity, then create new record in competency table.
	
	
	//
?>
