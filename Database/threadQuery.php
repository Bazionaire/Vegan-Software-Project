<?php

function checkIfThreadExists($db, $title, $description, $userID) {
    $result = null;
    $query = "SELECT threadID FROM thread WHERE title = ? and description = ? and email = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sss', $title, $description, $userID);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->free_result();
    return $result;
}

function insertThread($db, $title, $description, $userID) {
    $query = "INSERT INTO thread (title, description, email, threaddate) VALUES (?, ?, ?, NOW())";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sss', $title, $description, $userID);
    $stmt->execute();
    return ($stmt->affected_rows > 0);
}

function readThread($db, $threadID) {
    $result = array();
    $query = "SELECT thread.title, thread.description, thread.threaddate, users.firstname, users.lastname FROM thread, users 
              WHERE thread.email = users.email and threadID = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $threadID);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($result['title'], $result['description'], $result['threaddate'], $result['firstname'], $result['lastname']);
    $stmt->fetch();
    $stmt->free_result();
    return $result;
}

function readThreads($db) {
    $threadID = null;
    $title = null;
    $description = null;
    $threaddate = null;
    $firstname = null;
    $lastname = null;
    $results = array();
    $index = 0;

    $query = "SELECT thread.threadID, thread.title, thread.description, thread.threaddate, users.firstname, users.lastname FROM thread, users 
              WHERE thread.email = users.email
              ORDER BY threaddate ASC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($threadID, $title, $description, $threaddate, $firstname, $lastname);
    while ($stmt->fetch()) {
        $results[$index]['threadID'] = $threadID;
        $results[$index]['title'] = $title;
        $results[$index]['description'] = $description;
        $results[$index]['threaddate'] = $threaddate;
        $results[$index]['firstname'] = $firstname;
        $results[$index]['lastname'] = $lastname;
        $index += 1;
    }
    $stmt->free_result();
    return $results;
}