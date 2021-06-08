<?php
require 'config.php';

if ( !isset($_POST['email']) || empty($_POST['email'])
	|| !isset($_POST['password']) || empty($_POST['password']) ) {
	$error = "Please fill out all required fields.";
}
else 
{
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}
	$sql_registered = "SELECT *FROM users WHERE email = '" . $_POST["email"]."';";
	$results_registered = $mysqli->query($sql_registered);
	if(!$results_registered) 
	{
		echo $mysqli->error;
		exit();
	}
	if ($results_registered->num_rows > 0)
	{
		$error = "Email already in use";
	}
    else 
    {
		$password = hash("sha256", $_POST["password"]);

		$sql_prepared = "INSERT INTO users(email,password) VALUES (?,?);";
		$statement = $mysqli->prepare($sql_prepared);
		$statement->bind_param("ss",$_POST["email"],$password);
		$executed = $statement->execute();
		 if(!$executed) 
		 {
	        echo $mysqli->error;
		 }
		    
		 if( $statement->affected_rows == 1 ) 
		 {
		    $isUpdated = true;
		 }
		 $statement->close();
	}

	$mysqli->close();

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<div class = "main" id = "signup">
		<?php if ( isset($error) && !empty($error) ) : ?>
			<div> <?php echo $error; ?></div>
		<?php else : ?>
			<div> Success </div>
		<?php endif; ?>
		<a class="links" href="index.php" target="_self"> Login </a>
	</div>
</body>
</html>