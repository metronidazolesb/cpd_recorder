<!-- Action the new rego request -->
<?php 
	include 'global.php';
	
	$firstname = $surname = $email = $password = $hashed_password = "";
	
	if(isset($_POST["email"]) && isset($_POST["password"])){
		$email = mysqli_real_escape_string($db, $_POST["email"]);
		$password = mysqli_real_escape_string($db, $_POST["password"]);
		$firstname = mysqli_real_escape_string($db, $_POST["firstname"]);
		$surname = mysqli_real_escape_string($db, $_POST["surname"]);
	}
	
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	
	$create_user = mysqli_query($db, "INSERT INTO users (email, password, firstname, surname) VALUES ('".$email."','".$hashed_password."','".$firstname."','".$surname."')");
	
	if ($create_user){
		echo "You have been registered!";
	}
	else{
		echo "User registration failed.";
	}
?>
