<!--PHP inclusions-->
	<?php 
		include 'global.php';
		include 'header.php';
		include 'sidebar.php';
	?>

<!--Section-->
	<section>
		<h1>Registration</h1>
		
		<form action = "action_registration.php" method = "post">
			
			Given name*:<br>
			<input type="text" name="firstname"><br><br>
			
			Last name*:<br>
			<input type = "text" name = "surname"><br><br>
			
			Email*:<br>
			<input type = "email" name = "email"><br><br>
			
			Password*:<br>
			<input type = "password" name = "password"><br><br>
			
			Confirm Password*:<br>
			<input type = "password" name = "confirmed_password"><br><br>
			
			<input type = "submit" value = "Register Now">
			<input type="reset">
			
		</form>
		
	</section>

<!--PHP inclusions-->	
	<?php
		include 'footer.php';
	?>
