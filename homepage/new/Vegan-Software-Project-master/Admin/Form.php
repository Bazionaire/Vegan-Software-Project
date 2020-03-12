<?php
session_start();

if (!IsSet($_POST)) {
    session_destroy();
    header("Location: ./login.php");
    exit();
}
if (!IsSet($_POST["uname"]) || !IsSet($_POST["psw"])) {
    session_destroy();		
    header("Location: ./login.php");
    exit();
}
require_once "./Database/dbconnect.php";
include "./Database/Query.php";
$username = 'admin';
$password = 'password';
createAdminsTableIfNeeded($db); 
$result = findUser($db, $username); 
if ($result['username'] == null) {
    insertUser($db, 1, $username, $password);
}
function valid_login($username,$password) {
    global $db;
    $userData = checkUserLogin($db, $username, $password);

    if($userData != null)
        return true;
    return false;
}
$username=$_POST["uname"];
$password=$_POST["psw"];
if (valid_login($username,$password))
{
    $_SESSION["user"]=$username;
    header("Location: ./index.php");
} else {
    session_destroy();
    header("Location: ./login.php");
}
