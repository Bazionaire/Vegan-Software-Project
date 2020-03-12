<?php
session_start();

require_once "./Database/dbconnect.php";
include "./Database/Query.php";
include "./Database/Admin.php";
include "./Admin/DataCheck.php";

$feedback = null;

//if (IsSet($_POST) && IsSet($_POST["firstname"]) && IsSet($_POST["lastname"]) && IsSet($_Post["email"]) && IsSet($_POST["pass"]) && IsSet($_POST["confirm"])) {
$dataSet = IsSet($_POST) && IsSet($_POST["firstname"]) && IsSet($_POST["lastname"]);
$dataSet = $dataSet && IsSet($_POST["email"]) && IsSet($_POST["pass"]) && IsSet($_POST["confirm"]);

if ($dataSet) {

    $firstName = trim($_POST['firstname']);
    $lastName = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
    $confirm = trim($_POST['confirm']);

    // Belt and braces - server side check, fields are already required in the HTML form
    $feedback = checkUserData($firstName, $lastName, $email, $password, $confirm);
    // Check email address not already used
    $result = findUser($db, $email);

    if (isset($result['email'])) {
        $feedback .= "Email already taken - please enter another email address<br />";
    }

    if ($feedback == '') {
        // create user
        insertUser($db, $firstName, $lastName, $email, $password);
        $feedback .= 'User created<br />';
        $db->close();

        header('Location: login.php');
        exit();
    }
}

session_destroy();
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="registration_sheet">
<h1 id="header">Registration Form</h1>

<div  class="register">
    <h2>Register Here</h2><br>
    <?php if ($feedback != null) echo '<p id="feedback">' . $feedback . '</p>' ?>
    <form method="post" id="register" action="">

        <label>First Name </label><br>
        <input type="text" name="firstname" id="name" placeholder="Please Enter Your Name"><br><br>

        <label>Last Name </label><br>
        <input type="text" name="lastname" id="name" placeholder="Please Enter Your Last Name"><br><br>

        <label>Email </label><br>
        <input type="email" name="email" id="name" placeholder="Please Enter your Email"><br><br>

        <label>Password </label><br>
        <input type="password" name="pass" id="name" placeholder="Please Enter Password"><br><br>

        <label>Confirm Password </label><br>
        <input type="password" name="confirm" id="name" placeholder="Confirm Your Password"> <br><br>



        <input type="submit" id="send" value="Sign Up">

    </form>



</div>


</body>
</html>