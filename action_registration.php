<!-- Action the new rego request -->
<?php 
	//Include other files
	include 'global.php';
	
	//Declare variables
	$firstname = $surname = $email = $password = $hashed_password = "";
	$date_current = date("Y/m/d");
	
	//Assign input tags data to variables
	//Check if any hackers are on my site hahaha
	if(isset($_POST["email"]) && isset($_POST["password"])){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$firstname = $_POST["firstname"];
		$surname = $_POST["surname"];
	}
		
	//Hash the password #NotForYouNSA
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	
	//Submit the new user to database
	$create_user = mysqli_query($db,
	"INSERT INTO users (email, password, firstname, surname, date_created, date_modified) 
	VALUES ('".$email."','".$hashed_password."','".$firstname."','".$surname."','".$date_current."','".$date_current."')") or die(mysqli_error());
	
	//Let me know if it works - it doesn't :(
	if ($create_user){
		echo "You have been registered!";
	}
	else{
		echo "User registration failed.";
	}
	
	/* Redirect browser to home page*/
	header("Location: index.php");
	exit();
?>
