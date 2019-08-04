<!--PHP inclusions-->
	<?php 
		include 'global.php';
		include 'header.php';
		include 'sidebar.php';
	?>

<!--Section-->
	<section>
		<h1>Login</h1>
		
		<form method = "post" action = "action_login.php">
			
			Email:<br>
			<input type = "email" name = "email" maxlength="64"><br><br>
			
			Password:<br>
			<input type = "password" name = "password" maxlength="64"><br><br>
			
			<input type = "submit" value = "Login">
			<input type="reset">
			
		</form>
		
	</section>

<!--PHP inclusions-->	
	<?php
		include 'footer.php';
	?>
