<?php
session_start();
session_destroy();

//Welcome screen
header('Location: login.php');
