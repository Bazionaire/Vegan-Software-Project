<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "1709517";
    $dbpass = "1709517";
    $db = "db1709517_vegan";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

