<!-- Action the new log-in request -->
<?php 
	//Include other files
	include 'global.php';
	
	//Declare variables
	$logged_user = $logged_pass = "";
	$usr_id = $usr_first = "";
	
	//Assign input tags data to variables
	//Check if any hackers are on my site hahaha
	if(isset($_POST["email"]) && isset($_POST["password"])){
		$logged_user = mysqli_real_escape_string($db, $_POST["email"]);
		$logged_pass = mysqli_real_escape_string($db, $_POST["password"]);
	}
	
	//Pull the users table
	$find_users = mysqli_query($db, 
	"SELECT * FROM users
	WHERE email = '$logged_user'") 
	or die(mysqli_error());
	
	//Confirm the user
	if (mysqli_num_rows($find_users) == 1){
		$result = mysqli_fetch_assoc($find_users);
		
		if(password_verify($logged_pass, $result["password"])){
			//If password correct, assign user to the current session.
			$_SESSION["cur_usr"] = $result["firstname"];
			echo "Correct password";
			header("Location: view_record.php");
			exit();
		}
		else{
			//If incorrect password, return to login page
			echo "Incorrect password";
			header("Location: login.php");
			exit();
		}
	}
	else{
		//If email incorrect, return to login page
		echo "No users by that email";
		header("Location: login.php");
		exit();
	}
?>
