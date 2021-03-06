<?php
session_start();


require_once "./Database/dbconnect.php";
include "./Database/Query.php";
include "./Database/Admin.php";  

$userFeedback = null;


if (IsSet($_POST) && IsSet($_POST["Fname"]) && IsSet($_POST["psw"])) {

    $firstName = trim($_POST['Fname']);
    $password = trim($_POST['psw']);

    $userEmail = checkUserLogin($db, $firstName, $password);
    if ($userEmail != null) {
        $userName = returnUserName($db, $userEmail);
        $_SESSION["user"] = $firstName;
        $_SESSION["lastname"] = $userName['lastname'];
        $_SESSION["email"] = $userEmail;
        $db->close();
        header("Location: index.php");
        exit();
    } else {
        $userFeedback = "First Name and password did not match.";
    }
}

session_destroy();
$db->close();
?>
<!--Htlm start-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegan App Login  </title>
    <link rel="stylesheet" type="text/css" href="css/login1.css" >
    <link rel="shortcut icon" href="dist/img/VEGAN%20PROJECT%20LOGO.png" type="image/x-icon">
</head>
<body id="login_page">
<header>
    <?php include ("Header.php");?>
</header>
<div class="w3-container">
<div class="loginbox" >
    <img src="images/computer-1331579_1280.png" class="profile">
    <h1> Login Here</h1>
    <?php if ($userFeedback != null) echo '<p id="feedback">' . $userFeedback . '</p>' ?>
    <form action="" method="post">
        <div id="contentbox" class="container">
            <label for="Fname"><b>Username</b></label>
            <input type="text" placeholder="Enter First Name" name="Fname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
        </div>

    </form>


</div>
</div>

</body>
</html>


