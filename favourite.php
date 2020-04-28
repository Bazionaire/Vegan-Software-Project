<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recipe_favour/css/style1.css">
    <link rel="shortcut icon" href="recipe_favour/img/VEGAN%20PROJECT%20LOGO.png" type="image/x-icon">
    <title>Search a recipes</title>
    <?php include ("Header.php"); ?>

</head>

<body>
<div class="list_test">
    <header class="header" style="background: wheat">
        <img src="recipe_favour/img/VEGAN%20PROJECT%20LOGO.png" alt="logo" class="header__logo">
        <form class="search" style="margin-left: 350px" >
            <input type="text" class="search__field" placeholder="Search a recipes...">
            <button class="btn search__btn">
                <svg class="search__icon">
                    <use href="dist/img/icons.svg#icon-magnifying-glass"></use>
                </svg>
                <span>Search</span>
            </button>
        </form>
        <h1 class="heading-2" style="margin-left: 400px"> Favourite List:</h1>
        <div class="likes">
            <div class="likes__field">
                <svg class="likes__icon">
                    <use href="dist/img/icons.svg#icon-heart"></use>
                </svg>
            </div>
            <div class="likes__panel">
                <ul class="likes__list">

                </ul>
            </div>
        </div>
    </header>


    <div class="results">
        <h2 class="heading-2">RECIPES</h2>
        <ul class="results__list">

        </ul>

        <div class="results__pages">

        </div>
    </div>


    <div class="recipe">

    </div>


    <div class="shopping">
        <h2 class="heading-2">My Shopping List</h2>

        <ul class="shopping__list">

        </ul>

    </div>
</div>
<script type="text/javascript" src="recipe_favour/js/bundle.js"></script>

</body>
<footer>
    <?php include("Footer.php");?>
</footer>
</html>