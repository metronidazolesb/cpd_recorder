<!-- Action the new rego request -->
	<?php 
		include 'global.php';
		
		/* Test the post variables for hackers! */
		
		$firstname = $surname = $email = $password = $confirmed_password = "";
		
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
	?>
