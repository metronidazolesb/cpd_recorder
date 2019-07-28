<!--PHP inclusions-->
	<?php 
		include 'global.php';
		include 'header.php';
		include 'sidebar.php';
		
		$firstname = $surname = $email = $password = $hashed_password = "";
		
		if(isset($_POST["email"]) && isset($_POST["password"])){
			$email = mysqli_real_escape_string($db, $_POST["email"]);
			$password = mysqli_real_escape_string($db, $_POST["password"]);
			$firstname = mysqli_real_escape_string($db, $_POST["firstname"]);
			$surname = mysqli_real_escape_string($db, $_POST["surname"]);
		}
		
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
		$create_user = mysqli_query($db,
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
		}
		
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

<!--Section-->
	<section>
		<h1>Registration</h1>
		
		<form method = "post">
			
			
			<?php /* if(isset($msg_success)){?><div class="alert alert-success" role="alert"><?php echo $msg_success; ?></div><?php} ?>
			<?php if(isset($msg_fail)){?><div class="alert alert-fail" role="alert"><?php echo $msg_fail; ?></div><?php} */?>
			
			Given name*:<br>
			<input type="text" name="firstname" maxlength="64"><br><br>
			
			Last name*:<br>
			<input type = "text" name = "surname" maxlength="64"><br><br>
			
			Email*:<br>
			<input type = "email" name = "email" maxlength="64"><br><br>
			
			Password*:<br>
			<input type = "password" name = "password" maxlength="64"><br><br>
			
			<input type = "submit" value = "Register Now">
			<input type="reset">
			
		</form>
		
	</section>

<!--PHP inclusions-->	
	<?php
		include 'footer.php';
	?>
