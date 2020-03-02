<?php
session_start();


require_once "./Database/dbconnect.php";
include "./Database/Query.php";
include "./Database/Admin.php";  

$userFeedback = null;


if (IsSet($_POST) && IsSet($_POST["uname"]) && IsSet($_POST["psw"])) {

    $username = trim($_POST['uname']);
    $password = trim($_POST['psw']);

    $userData = checkUserLogin($db, $username, $password);
    if ($userData != null) {
        $_SESSION["user"] = $username;
        $db->close();
        header("Location: index.php");
        exit();
    } else {
        $userFeedback = "Username and password did not match.";
    }
}

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
    <?php if ($userFeedback != null) echo '<p id="feedback">' . $userFeedback . '</p>' ?>
    <form action="" method="post">
        <div id="contentbox" class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>

        </div>

        
    </form>
	
	
	

</div>
</body>
</html>


