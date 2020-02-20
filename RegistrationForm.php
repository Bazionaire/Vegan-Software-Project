<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="registration_sheet">
<h1 id="header">Registration Form</h1>

<div  class="register">
    <h2>Register Here</h2><br>
    <form method="post" id="register" action="">

        <label>First Name </label><br>
        <input type="text" name="Fname" id="name" placeholder="Please Enter Your Name"><br><br>

        <label>Last Name </label><br>
        <input type="text" name="Lname" id="name" placeholder="Please Enter Your Last Name"><br><br>





        <label>Email </label><br>
        <input type="email" id="email" placeholder="Please Enter your Email"  ><br><br>

        <label>Password </label><br>
        <input type="password" name="pass" id="passw" placeholder="Please Enter Password "><br><br>

        <label>Confirm Password </label><br>
        <input type="password" name="confirm" id="con_pass" placeholder="Confirm your password"> <br><br>



        <input type="submit" id="send" value="Sign Up">

    </form>



</div>


</body>
</html>