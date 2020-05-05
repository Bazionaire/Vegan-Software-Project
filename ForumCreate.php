<?php
/**
 * Created by PhpStorm.
 * User: Helen Harle
 * Date: 19/04/2020
 * Time: 21:02
 */
session_start();

require_once "./Database/dbconnect.php";
include "./Database/forumThreadQuery.php";

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $email = $_SESSION['email'];
    insertThread($db, $title, $description, $email);
    $db->close();
    header('Location: Forum.php');
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegan App Forum</title>
    <link rel="stylesheet" type="text/css" href="css/forum.css" >
    <link rel="shortcut icon" href="dist/img/VEGAN%20PROJECT%20LOGO.png" type="image/x-icon">
</head>
<body id="forum_page">
<header>
    <?php include ("Header.php");?>
</header>
<div class="w3-container">
    <div class="forumbox" >
        <img src="images/computer-1331579_1280.png" class="profile">
        <h1>RGU Vegan Project Forum</h1>
        <h2>Create a new discussion thread</h2>
        <form action="" method="post" id="threadForm">
            <p><label for="title"><b>Thread Title</b></label>
            <input type="text" placeholder="Been up to anything lately?" name="title" size="50" required></p>
            <p><label for="description"><b>Thread Description</b></label>
            <textarea name="description" rows="5" cols="50" placeholder="How did it go?" form="threadForm" required></textarea></p>
            <p>Thread created by: <?php echo " " . $_SESSION['user'] . " " . $_SESSION['lastname'] ?></p>
            <p><input type="submit" value="Create Thread"</input></p>
        </form>
    </div>
</div>

</body>
</html>