<?php
/**
 * Initial Index/Landing Page
 *
 * A basic login page.
 *
 * PHP version 5.3.28
 *
 * @category Web_App
 * @package  Web_App
 * @author   Roy A Vanegas <roy@thecodeeducators.com>
 * @license  https://gnu.org/licenses/gpl.html GNU General Public License
 * @link     https://bitbucket.org/code-warrior/web-app/
 */

session_start();

if (isset($_SESSION["valid"])) {
    if (1 == $_SESSION["valid"]) {
        header("Location: home.php");
    }
}

// if (!isset($_GET['action'])) {
//     $_GET['action'] = "register";
//     header("Location: ./index.php?action=". $_GET['action']);
// }

require "includes/main.php";

// if (isset($_GET['action'])) {
//     if ("login" == $_GET['action']) {
//         $action_value = "login.php";
//     } else {
//         if ("register" == $_GET['action']) {
//             $action_value = "register.php";
//         }
//     }
// }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>LUNCH!</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="layer">
            <h1>
      LUNCH!
   </h1>
            <div class="stuff">
                <form action="login.php" method="post">
                    <p class="white">Email</p>
                    <input type="email" name="email" placeholder="username" required autofocus>
                    <p class="white">Password</p>
                    <input type="password" name="psw" required>
                </form>
                <p><input type="hidden" name="submitted" value="1"></p>
                <input type="submit" value="Log in">
                <p class="button"><a href="register.php">Make an Account?</a></p>
            </div>
        </div>
    </body>

    </html>
