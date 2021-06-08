<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form </title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<?php include 'nav.php'; ?> 
    <div class="main">
        <div id="time"></div>
        <div>
            <div class="temp-container">
                <div id="weather-description"class="inline"></div>
                <div class="inline"> - </div>
                <div id="temp" class="inline"></div>
            </div>
            <div class = "temp-container">
                <div class = "inline"> feels like - </div>
                <div id="feels_like" class ="inline"></div>
            </div>
        </div>
        <div class="links-container">
            <div class="links-set">
            	<div class = "fork">
            		<a class="links" href="add.php" target="_self">Add</a>
            	</div>
            </div>
             <div class="links-set">
             	<div class = "fork">
             		<a class="links" href="edit.php" target="_self">Edit</a>
             	</div>
            </div>
            <div class="links-set">
            	<div class = "fork">
          			<a class="links" href="delete.php" target="_self">Delete</a>
          		</div>
            </div>
        </div>
    </div>
    <script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="main.js"> </script>
</body>
</html>