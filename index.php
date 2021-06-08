<?php

require 'config.php';
if ( isset($_POST['email']) && isset($_POST['password']) ) 
{
	if ( empty($_POST['email']) || empty($_POST['password']) ) 
	{
		$error = "Please enter email and password.";
	}
	else 
	{
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($mysqli->connect_errno) {
			echo $mysqli->connect_error;
			exit();
		}

		$passwordInput = hash("sha256", $_POST["password"]);

		$sql = "SELECT * FROM users
			WHERE email = '" . $_POST['email'] . "' AND password = '" . $passwordInput . "';";

		echo "<hr>" . $sql . "<hr>";
		
		$results = $mysqli->query($sql);

		if(!$results) {
			echo $mysqli->error;
			exit();
		}

		if($results->num_rows > 0) 
		{
			header("main.php");
		}
		else 
		{
			$error = "Invalid email or password.";
		}
	} 
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

</head>
<body>
	<div class= "main" id ="login">
		<h1> Login </h1>
		<div class="form-popup" id="myForm">
			<form action="main.php" method="POST">
			<div class = "input">
				<label for="email"> Email </label>
				<input type="text" placeholder="Enter Email" name="email" required>
			</div>
			<div class = "input">
				<label for="password"> Password </label>
				<input type="password" placeholder="Enter Password" name="psw" required>
			</div>
			<div>
				<button type="submit" class="btn">Login</button>
				<a class="links" href="signup.php" target="_self"> Sign Up </a>
			</div>
			</form>
		</div>
	</div>
	<div class = "main">
		<div id="time-main"></div>
	</div>
	<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<script src="index.js"> </script>
</body>

</html>