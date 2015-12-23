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
// $event_id = select("event_id", "event", )

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
        <h2><a href="./logout.php">Logout</a></h2>
        <h2>
           Here is what's coming up.
        </h2>

<?php
//                $amount_of_events = SELECT COUNT(*) FROM event;
for ($index = 1; $index <= 3; $index++) {
$venue_id = select("venue_id", "display", "event_id", $index);
$event_name = select("name", "event", "event_id", $index);
$venue_name = select("venue_name", "venue", "venue_id", $venue_id);
$address = select("street_address", "venue", "venue_id", $venue_id);
$city = select("city", "venue", "venue_id", $venue_id);
echo "
<div class='stuff'>
   <h3>$event_name</h3>
   <div class='restaurant'>
   <p class='restaurant-name'>$venue_name</p>
   <p class='restaurant-info'>$address, $city</p>
   </div>
   <div class='bottom'>
      <div class='rsvp'>
for ($user_number = 1; $user_number <= 6; $user_number++){
         $user_id = select("user_id", "display", "event_id", $index);
         $firstname = select("firstname", "user", "user_id", $user_number)
         $rsvp = select_two("$rsvp", "display", "event_id", $index, "user_id", $user_number);
         if ($rsvp == 1) {
            echo"<p class='going'>$firstname</p>"
         } else if ($rsvp == 2) {
            echo"<p class='not_going'>$firstname</p>"
         }
      }
      </div>
      <div class='yes'>
      <h4>I'M<br>GOING</h4>
      </div>
      <div class='no'>
      <h4>NOT<br>TODAY</h4>
      </div>
   </div>
</div>";
}
?>


<!---->
<!--        <div class="stuff">-->
<!--            <h3>Dinner with Joey & Rebekah</h3>-->
<!--            <div class="restaurant">-->
<!--                <p class="restaurant-name">B&H</p>-->
<!--                <p class="restaurant-info">6:30PM December 4</p>-->
<!--                <p class="restaurant-info">127 2nd Ave, New York</p>-->
<!--            </div>-->
<!--            <div class="bottom">-->
<!--                <div class="rsvp"></div>-->
<!--                <div class="yes">-->
<!--                    <h4>I'M<br>GOING</h4></div>-->
<!--                <div class="no">-->
<!--                    <h4>NOT<br>TODAY</h4></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <h2>-->
<!--           Here's what you've been eating.-->
<!--        </h2>-->
<!--        <div class="stuff">-->
<!--            <h3>Thanksgiving Dinner</h3>-->
<!--            <div class="restaurant">-->
<!--                <p class="restaurant-name">Dan's Place</p>-->
<!--                <p class="restaurant-info">6:00PM November 26</p>-->
<!--                <p class="restaurant-info">368 Eastern Pkwy #4D</p>-->
<!--            </div>-->
<!--             <div class="bottom">-->
<!--                <div class="thoughts"></div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</body>

</html>
