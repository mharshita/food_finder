<?php 
session_start();
include("connection.php");
    $loggedUsername = $_SESSION['username'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart-css.css" type="text/css">
</head>
<body>

<nav style="margin-top: 0em">
    <ul>
        <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
        <li><a href="profile.php" class="nav-li">PROFILE</a></li>
        <li><a href="home.php" class="nav-li">HOME</a></li>
    </ul>
</nav>

<img src="images/empty_cart.svg" style="margin-top: 5em; width: 40%; height: 40%;">

<p style="font-weight: bold; font-size: 3em">Ordered items will appear here!!</p>
</body>
</html>