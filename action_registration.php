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
		
		echo($email, $hashed_password, $firstname, $surname)
		/*$create_user = mysqli_query($db,
			"
			INSERT INTO 'users' (email, password, firstname, surname)
			VALUES ('$email', '$hashed_password', '$firstname', '$surname')
			"
		);
		
		if ($create_user){
			$msg_success = "You have been registered!";
		}
		else{
			$msg_fail = "User registration failed.";
		}*/
		
		/* Test the post variables for hackers! 		
		
		$firstname_err = $surname_err = $email_err = $password_err = $confirmed_password_err = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			
			$firstname = test_input($_POST["firstname"]);
			$surname = test_input($_POST["surname"]);
			$email = test_input($_POST["email"]);
			$password = test_input($_POST["password"]);
			$confirmed_password = test_input($_POST["confirmed_password"]);
		}
		
		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		*/
	?>
