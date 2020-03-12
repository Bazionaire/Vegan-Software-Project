<?php

function createAdminsTableIfNeeded($db)
{
    $query = "CREATE TABLE IF NOT EXISTS users (
                              firstname nvarchar(20),
                              lastname nvarchar(20),
                              email nvarchar(50) not null, 
                              password nvarchar(256),
                              PRIMARY KEY(email))";
    $result = $db->query($query);
}

function checkUserLogin($db, $firstName, $password)
{
    $return = null;
    $query = "SELECT email FROM users WHERE firstname = ? and password = ?";
    $stmt = $db->prepare($query);
    $hashedPassword = sha1($password);
    $stmt->bind_param('ss', $firstName, $hashedPassword);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($return);
    $stmt->fetch();
    $stmt->free_result();
    return $return;
}

function insertUser($db, $firstName, $lastName, $email, $password)
{
    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $hashedPassword = sha1($password);
    $stmt = $db->prepare($query);
    $stmt->bind_param('ssss', $firstName, $lastName, $email, $hashedPassword);
    $stmt->execute();
    return ($stmt->affected_rows > 0);
}

function findUser($db, $email)
{
    $result = array();
    $query = "SELECT email FROM users WHERE email = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($result['email']);
    $stmt->fetch();
    $stmt->free_result();
    return $result;
}
