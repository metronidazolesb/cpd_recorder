<!--PHP inclusions-->
	<?php 
		include 'global.php';
		include 'header.php';
		include 'sidebar.php';
	?>

<!--Section-->
	<section>
		<h1>Registration</h1>
		
		<form method = "post" action = "action_registration.php">
			
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
