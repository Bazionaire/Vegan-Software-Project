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

if (!isset($_SESSION['populate'])) {

    include "./Database/forumSetup.php";
    $_SESSION['populate'] = "populated";
}

$threads = readThreads($db);

$db->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style1.css">
    <link rel="shortcut icon" href="dist/img/favicon.png" type="image/x-icon">
    <title>Search a recipes</title>
    <?php include ("Header.php"); ?>

</head>

<body>
<div class="list_test">
    <header class="header">
        <img src="dist/img/VEGAN%20PROJECT%20LOGO.png" alt="logo" class="header__logo">
        <form class="search">
            <input type="text" class="search__field" placeholder="Search a recipes...">
            <button class="btn search__btn">
                <svg class="search__icon">
                    <use href="dist/img/icons.svg#icon-magnifying-glass"></use>
                </svg>
                <span>Search</span>
            </button>
        </form>
        <h1 style=""> Favourite List</h1>
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
<script type="text/javascript" src="dist/js/bundle.js"></script></body>
<footer>
    <?php include("Footer.php");?>
</footer>
</html>