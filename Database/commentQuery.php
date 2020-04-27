<?php

function checkIfCommentExists($db, $message, $threadID, $userID) {
    $result = null;
    //$mysqldatetime = date ("Y-m-d H:i:s", $timestamp);
    $query = "SELECT commentID FROM comment WHERE message = ? and threadID = ? and email = ?";
    $stmt = $db->prepare($query);

    $stmt->bind_param('sis', $message, $threadID, $userID);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->free_result();
    return $result;
}

function insertComment($db, $message, $threadID, $userID) {
    $query = "INSERT INTO comment (message, threadID, email, commentdate) VALUES (?, ?, ?, NOW())";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sis', $message, $threadID, $userID);
    $stmt->execute();
    return ($stmt->affected_rows > 0);
}

function readComments($db, $threadID) {
    $commentID = null;
    $message = null;
    $commentDate = null;
    $firstname = null;
    $lastname = null;
    $results = array();
    $index = 0;


    $query = "SELECT comment.commentID, comment.message, comment.commentdate, users.firstname, users.lastname FROM comment, users 
              WHERE comment.email = users.email and comment.threadID = ? 
              ORDER BY comment.commentdate ASC";
    $stmt = $db->prepare($query);

    $stmt->bind_param('i', $threadID);
    $stmt->execute();
    $stmt->bind_result($commentID, $message, $commentDate, $firstname, $lastname);
    while ($stmt->fetch()) {
        $results[$index]['commentID'] = $commentID;
        $results[$index]['message'] = $message;
        $results[$index]['commentdate'] = $commentDate;
        $results[$index]['firstname'] = $firstname;
        $results[$index]['lastname'] = $lastname;
        $index += 1;
    }
    $stmt->free_result();
    return $results;
}