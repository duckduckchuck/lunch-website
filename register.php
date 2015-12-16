<?php

require_once "includes/main.php";

// If the variable “submitted” was sent in the form,
if (isset($_POST["submitted"])) {
    // and, it’s equal to 1, meaning that it was actually submitted,
    if (1 == $_POST["submitted"]) {
        // and, every variable that is part of the form was actually received by
        // this file, meaning that the form was not hi- or side-jacked,
        if (whiteList()) {
            // and, both the email and password contain at least one character
            // (this is a redundancy check, since each form variable is marked
            // as “required” in the HTML form),
            if (0 < strlen($_POST['email']) && 0 < strlen($_POST['password'])) {
                // then process the email and password.

                // 1. Remove whitespace surrounding the email.
                // 2. Convert <, >, ', and " to their respective HTML entities
                // 3. Handle HTML5 code
                // 4. Use the UTF-8 character set
                $email = htmlentities(
                    trim($_POST['email']), ENT_QUOTES | 'ENT_HTML5', "UTF-8"
                );

                $password = trim($_POST['password']);


                if (!doesUserExist($email)) {

                    registerNewUser($email, $password);

                    include_once "includes/register_success.inc";

                    header("Refresh: 5; ./index.php?action=login");
                } else {
                    header("Location: error.php?message_type=registration_error");
                }
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Column and Baseline Grid</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="layer">
        <h1>
      REGISTER!
   </h1>
        <div class="stuff">
            <form action="login.php" method="post">
                <p class="white">Email</p>
                <input type="email" name="email">
                <p class="white">Password</p>
                <input type="password" name="password">
                <p class="white">First Name</p>
                <input type="text" name="firstname">
            </form>
                <input type="submit" value="Make an Account!">
        </div>
    </div>
</body>
</html>


