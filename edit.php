<?php
require 'config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($mysqli->connect_errno) {
			echo $mysqli->connect_error;
			exit();
		}
$sql_category = "SELECT * FROM category;";
$results_category= $mysqli->query($sql_category);
if ( $results_category == false ) {
	echo $mysqli->error;
	exit();
}
$sql_bookmark = "SELECT * FROM bookmark;";
$results_bookmark= $mysqli->query($sql_bookmark);
if ( $results_bookmark == false ) {
	echo $mysqli->error;
	exit();
}


$mysqli->close();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<div class = "main" id = "signup">
		<h1> Edit Bookmark </h1>
		<div class="form-popup" id="myForm">
			<form action = "editsuccess.php" method="POST">
			<div>
				<label for="category"> Bookmark </label>
				<select id="categories" name="alllinks">
					<!-- REMEMBER TO COME BACK AND FIX -->
					<option value="link1"> Reddit</option>
					<option value="link2"> Facebook</option>
					<option value="link3"> Google </option>
					<option value="link4"> Github</option>
					<option value="link5"> Youtube</option>
					<option value="link6"> Netflix</option>
				</select>
			</div>
			<div class = "input">
				<label for="name"> Name </label>
				<input type="text" id = "email-id" placeholder="Enter Email" name="email" required>
				<small class="invalid-feedback">Name is required.</small>
			</div>
			<div class = "input">
				<label for="link"> Link </label>
				<input type="text" placeholder="Enter Link" id= "password-id" name="password" required>
				<small class="invalid-feedback">Link is required.</small>
			</div>
			<div>
				<label for="category"> Category </label>
				<select id="categories" name="alllinks">
					<option value="common">Common</option>
					<option value="social">Social</option>
					<option value="shopping">Shopping</option>
					<option value="misc">Misc</option>
				</select>
				<!-- doesnt know why it doesn't work? -->
				<!-- <option value="" selected disabled>-- Select One --</option>

						<?php while( $row = $results_category->fetch_assoc() ): ?>

							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['id']; ?>
							</option>

						<?php endwhile; ?> -->
			</div>


			<div>
				<button type="submit" class="btn">Edit </button>
				<a class="links" href="main.php" target="_self"> Exit </a>
			</div>
			</form>
		</div>
	</div>

</body>
</html>