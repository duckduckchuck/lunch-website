<?php
/**
 * Handles the login process: Verifies, then logs in, a valid user, or throws an
 * error if login credentials are faulty.
 *
 * TODO: handle the error situations in the else clauses.
 *
 * PHP version 5.3.28
 *
 * @category Web_App
 * @package  Web_App
 * @author   Roy Vanegas <roy@thecodeeducators.com>
 * @license  https://gnu.org/licenses/gpl.html GNU General Public License
 * @link     https://bitbucket.org/code-warrior/web-app/
 */

session_start();

require_once "includes/main.php";

if (isset($_POST["submitted"])) {
    if (1 == $_POST["submitted"]) {
            if (0 < strlen($_POST['email']) && 0 < strlen($_POST['password'])) {
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                if (authenticateUser($email, $password)) {
                    $_SESSION['valid'] = true;
                    $_SESSION['email'] = $email;
                    header("Location: home.php");
                } else {
                    header("Location: error.php?message_type=login_error");
                }
            }
    }
}
