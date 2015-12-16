<?php
session_start();

if (isset($_SESSION['valid'])) {
    if ($_SESSION['valid'] !== true) {
        header("Location: ./index.php");
    }
} else {
    header("Location: ./index.php");
}

require_once "includes/db.php";
require_once "includes/main.php";

$firstname = select("firstname", "user", "email", $_SESSION['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>S'up</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="layer">
        <h1>
      Hi, <?php echo $firstname; ?>!
        </h1>
        <h2>
           Here is what's coming up.
        </h2>
        <div class="stuff">
            <h3>Dinner with Joey & Rebekah</h3>
            <div class="restaurant">
                <p class="restaurant-name">B&H</p>
                <p class="restaurant-info">6:30PM December 4</p>
                <p class="restaurant-info">127 2nd Ave, New York</p>
            </div>
            <div class="bottom">
                <div class="rsvp"></div>
                <div class="yes">
                    <h4>I'M<br>GOING</h4></div>
                <div class="no">
                    <h4>NOT<br>TODAY</h4></div>
            </div>
        </div>
        <div class="stuff">
            <h3>Dinner with Joey & Rebekah</h3>
            <div class="restaurant">
                <p class="restaurant-name">B&H</p>
                <p class="restaurant-info">6:30PM December 4</p>
                <p class="restaurant-info">127 2nd Ave, New York</p>
            </div>
            <div class="bottom">
                <div class="rsvp"></div>
                <div class="yes">
                    <h4>I'M<br>GOING</h4></div>
                <div class="no">
                    <h4>NOT<br>TODAY</h4></div>
            </div>
        </div>
        <h2>
           Here's what you've been eating.
        </h2>
        <div class="stuff">
            <h3>Thanksgiving Dinner</h3>
            <div class="restaurant">
                <p class="restaurant-name">Dan's Place</p>
                <p class="restaurant-info">6:00PM November 26</p>
                <p class="restaurant-info">368 Eastern Pkwy #4D</p>
            </div>
<!--             <div class="bottom">
                <div class="thoughts"></div>
            </div> -->
        </div>
    </div>
</body>

</html>
