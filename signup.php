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
		<h1> Sign Up </h1>
		<div class="form-popup" id="myForm">
			<form action="signupsuccess.php" method="POST">
			<div class = "input">
				<label for="email"> Email </label>
				<input type="text" id = "email-id" placeholder="Enter Email" name="email" required>

				<small class="invalid-feedback">Email is required.</small>

			</div>
			<div class = "input">
				<label for="password"> Password </label>
				<input type="password" placeholder="Enter Password" id= "password-id" name="password" required>
				<small class="invalid-feedback">Password is required.</small>
			</div>
			<div>
				<button type="submit" class="btn">Register</button>
				<a class="links" href="index.php" target="_self"> Exit </a>
			</div>
			</form>
		</div>

	</div>
</body>
	<script>
		document.querySelector('form').onsubmit = function(){
			if ( document.querySelector('#email-error').value.trim().length == 0 ) {
				document.querySelector('#email-error').classList.add('is-invalid');
			} else {
				document.querySelector('#email-error').classList.remove('is-invalid');
			}

			if ( document.querySelector('#password-error').value.trim().length == 0 ) {
				document.querySelector('#password-error').classList.add('is-invalid');
			} else {
				document.querySelector('#password-error').classList.remove('is-invalid');
			}

			return ( !document.querySelectorAll('.is-invalid').length > 0 );
		}
	</script>
</html>