<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
                <div class="links-title">Common</div>
                <div class="links-inner">
                    <a class="links" href="https://inbox.google.com/" target="_blank">Inbox</a>
                    <a class="links" href="https://reddit.com/" target="_blank">Reddit</a>
                    <a class="links" href="https://youtube.com" target="_blank">Youtube</a>
                    <a class="links" href="https://netflix.com" target="_blank">Netflix</a>
                </div>
            </div>
             <div class="links-set">
                <div class="links-title">Social Media</div>
                <div class="links-inner">
                    <a class="links" href="https://twitter.com" target="_blank">Twitter</a>
                    <a class="links" href="https://facebook.com" target="_blank">Facebook</a>
                </div>
            </div>
            <div class="links-set">
                <div class="links-title">Shopping</div>
                <div class="links-inner">
                    <a class="links" href="https://" target="_blank">Amazon Prime</a>
                </div>
            </div>
            <div class="links-set">
            <div class="links-title">Misc.</div>
                <div class="links-inner">
                    <a class="links" href="https://github.com/" target="_blank">Github</a>
                    <a class="links" href="https://drive.google.com/" target="_blank">Drive</a>
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
