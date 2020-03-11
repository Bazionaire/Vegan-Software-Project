<?php

echo "Hello!!,";

if (!isset($_COOKIE['logged'])){

    header('location:index.php');

}

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>Home</title>

</head>

<body>

<p>Welcome to success page</p>

<p><a href="../logout.php">Logout</a></p>

</body>

</html>
