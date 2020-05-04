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

if (!isset($_SESSION['populate'])) {

    include "./Database/forumSetup.php";
    $_SESSION['populate'] = "populated";
}

$threads = readThreads($db);

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegan App Forum</title>
    <link rel="stylesheet" type="text/css" href="css/forum.css" >
    <link rel="shortcut icon" href="recipe_favour/img/VEGAN%20PROJECT%20LOGO.png" type="image/x-icon">
</head>
<body id="forum_page">
<header>
    <?php include ("Header.php");?>
</header>
<div class="w3-container">
    <div class="forumbox" >
        <img src="images/computer-1331579_1280.png" class="profile">
        <h1>RGU Vegan Project Forum</h1>
        <?php
        if (count($threads) > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr><th>Thread Title</th><th>Started by</th><th>Date Created</th><th>Comments</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($threads as $thread) {
                $row = "<tr><td><a href='ForumThread.php?threadID=" . $thread['threadID'] . "'>" . $thread['title'] . "</a></td>";
                $row .= "<td>" . $thread['firstname'] . " " . $thread['lastname'] . "</td>";
                $row .= "<td>" . $thread['threaddate'] . "</td>";
                $row .= "<td class ='center'>" . $thread['commentCount'] ."</td></tr>";
                echo  $row;
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No discussion threads yet - we need someone to start the ball rolling!</p>";
        }
        ?>
        <p class = 'notification'>Click title to comment on thread</p>
        <p class = 'notification'><a href="ForumCreate.php">Click here to create a new thread</a></p>
    </div>
</div>

</body>
</html>