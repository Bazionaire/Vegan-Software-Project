<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="dist/img/VEGAN%20PROJECT%20LOGO.png" type="image/x-icon">
    <title>Header</title>
</head>
<body>
<header>
    <!--    nav start-->
    <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top" >
        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php">
            <img src="Images/Logo/VEGAN%20PROJECT%20LOGO.png" alt="logo" style="width:60px;">

        </a>
        <strong style="color:white">RGU VEGAN PROJECT</strong>
        <!-- Links -->
        <ul  class="navbar-nav">
            <li class="nav-item ">
                <a class="w3-button w3-hover-yellow " href="index.php" style="color: yellow">Home</a>
            </li>
            <li class="nav-item">
                <a class="w3-button w3-hover-yellow" href="store.php" style="color: yellow">Store</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="w3-button w3-hover-yellow" href="recipe.php" style="color: yellow">Recipe</a>-->
<!--            </li>-->
<!--We need to decide-->
            <li class="nav-item">
                <a class="w3-button w3-hover-yellow" href="favourite.php" style="color: yellow">Recipe & Shopping List</a>
            </li>
            <li class="nav-item">
                <a class="w3-button w3-hover-yellow" href="news_and_event.php" style="color: yellow">News & Events</a>
            </li>
            <!-- <li class="nav-item">-->
            <?php if (!isset($_SESSION['user'])) {
                echo "<li class='nav-item '>";
                echo "<a class='w3-button w3-hover-yellow' style='color: yellow' href=\"login.php\" >Sign In to access Forum</a>";
                echo "</li>";
            } else {
                echo "<li class='nav-item '>";
                echo "<a class='w3-button w3-hover-yellow' href='Forum.php' style='color: yellow'>Forum</a>";
                echo "</li>";
            }
            ?>

            </li>
            <li class="nav-item">
                <a class="w3-button w3-hover-yellow" href="about.php" style="color: yellow;transition:0.9s ease;">About Us</a>
            </li>

        </ul>
<!-- Login or Sign up-->
    <div class="w3-display-right">
        <ul class="navbar-nav">
        <?php if (!isset($_SESSION['user'])) {
            echo "<li class='nav-item '>";
            echo "<a class='w3-button w3-hover-yellow' href='login.php' style='color: yellow'>Sign In</a>";
            echo "</li>";
            echo "<li class='nav-item '>";
            echo "<a class='w3-button w3-hover-yellow' href='RegistrationForm.php' style='color: yellow'>Sign Up</a>";
            echo "</li>";
        } else {
            echo "<li class='nav-item '>";
            echo "<span class='w3-button w3-text-yellow'>Welcome: ".$_SESSION['user']."</span>";
            echo "</li>";
            echo "<li class='nav-item '>";
            echo "<a class='w3-button w3-hover-yellow' href='logout.php' style='color: yellow'>Sign Out</a>";
            echo "</li>";
        }
        ?>
<!--       Login     ends-->

            <!--<li class="nav-item ">
                <a class="w3-button w3-hover-yellow" href="login.php" style="color: yellow">Sign In</a>
            </li>
            <li class="nav-item ">
                <a class="w3-button w3-hover-yellow" href="RegistrationForm.php" style="color: yellow">Sign Up</a>
            </li> -->
        </ul>

    </div>

    </nav>
    <!--    nav ends-->
</header>


</body>
</html>
