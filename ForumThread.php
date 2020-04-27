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
include "./Database/forumCommentQuery.php";

if (isset($_GET['threadID'])) {
    $threadID = (int)$_GET['threadID'];
    $thread = readThread($db, $threadID);
    $comments = readComments($db, $threadID);
}

if (isset($_POST['comment'])) {
    $threadID = (int)$_POST['threadID'];
    $email = $_SESSION['email'];
    $message = htmlspecialchars($_POST['comment']);
    insertComment($db, $message, $threadID, $email);
    $thread = readThread($db, $threadID);
    $comments = readComments($db, $threadID);
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegan App Forum</title>
    <link rel="stylesheet" type="text/css" href="css/forum.css" >
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
        $threadTitle = "<h2>" . $thread['title'] . "</h2>";
        $threadTitle .=  "<h3>Started by: " . $thread['firstname'] . " " . $thread['lastname'] . "</h3>";
        $threadTitle .= "<h3>At: " . $thread['threaddate'] . "</h3>";
        echo $threadTitle;
        echo "<p>" . $thread['description'] . "</p>";
        if (count($comments) > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr><th>Comment</th><th>By</th><th>Date Created</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($comments as $comment) {
                $row = "<tr><td>" . $comment['message'] . "</td>";
                $row .= "<td>" . $comment['firstname'] . " " . $comment['lastname'] . "</td>";
                $row .= "<td>" . $comment['commentdate'] . "</td></tr>";
                echo  $row;
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No comments yet - be the first to add your wisdom!</p>";
        }
        ?>
        <form action="" method="post" id="commentForm">
            <label for="comment"><b>Your Comment</b></label>
            <textarea name="comment" rows="5" cols="50" placeholder="Want to add anything?" form="commentForm" required></textarea>
            <p>Comment made by: <?php echo " " . $_SESSION['user'] . " " . $_SESSION['lastname'] ?></p>
            <input type="hidden" name="threadID" value="<?php echo $threadID; ?>">
            <p><input type="submit" value="Post Comment"</input></p>
        </form>
    </div>
</div>

</body>
</html>