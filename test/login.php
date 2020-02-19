<?php
session_start();

// Includes
require_once "./Database/db_connect.php";
include "./Database/userQueries.php";
include "./Database/AdminSetup.php";  // DEVELOPMENT ONLY

$userFeedback = null;

// Entry should only be from login form via POST request
if (IsSet($_POST) && IsSet($_POST["uname"]) && IsSet($_POST["psw"])) {

    // POST request and user has entered data in both form fields
    $username = trim($_POST['uname']);
    $password = trim($_POST['psw']);

    // Data in both fields so check login credentials
    $userData = checkUserLogin($db, $username, $password);
    if ($userData != null) {

        // Valid login credentials so set session variable and redirect
        $_SESSION["user"] = $username;
        $db->close();
        header("Location: ./index.php");
        exit();
    } else {

        // Invalid login credentials so inform user
        $userFeedback = "Username and password did not match.";
    }
}

// Incomplete or no data in form fields
session_destroy();
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegan App Login  </title>
    <link rel="stylesheet" type="text/css" href="Style.css" >
</head>
<body class="login_page">
<div class="loginbox">
    <img src="images/computer-1331579_1280.png" class="profile">
    <h1> Login Here</h1>
    <form>
        <p>Username</p>
        <input type="text" name="" placeholder="Enter Username">
        <p> Password</p>
        <input type="password" name="" placeholder="Enter Password">
        <input type="submit" name="" value="Login"><br>
        <a href="#">Forgot your passwork</a> <br>
        <a href="RegistrationForm.html">Don't have an account </a>

    </form>

</div>
</body>
</html>
