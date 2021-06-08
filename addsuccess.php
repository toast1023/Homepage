<?php
require 'config.php';
$isUpdated = false;
if (!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['link']) || empty($_POST['link']))
{
	$error = "Please fill out all fields";
}
else 
{
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($mysqli->connect_errno) 
		{
			echo $mysqli->connect_error;
			exit();
		}
	$sql_prepared = "INSERT INTO bookmark (link, name) VALUES (?,?);";
        
        $statement = $mysqli->prepare($sql_prepared);
        $statement->bind_param("ss", $_POST["name"], $_POST["link"]);
        
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
		<a class="links" href="main.php" target="_self"> Main </a>
	</div>
</body>
</html>