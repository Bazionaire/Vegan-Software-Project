<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "1813047";
    $dbpass = "1813047";
    $db = "db1813047_vegan";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

