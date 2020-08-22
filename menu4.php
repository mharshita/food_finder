<?php 
session_start();
include("connection.php");
    $loggedUsername = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="css/menu-css.css" type="text/css">
</head>

<body>

<div class="row">
    <div class="column side-bar">
        <h1 class="side-head">Food Finder</h1>
        <p class="side-tag">delivering the best food at your doorstep :)</p>
</br></br>
        <h1>
 <span class="text_1">Code: AB2316Z</span>
<span class="text_2">For 20% discount </span>
</h1>
</br></br>
<!--<a href="home.php" class="button button-accent button-small"><strong>Order Now</strong></a>
</br></br>
<a href="" class="button button-accent button-small"><strong>Rate & Review</strong></a> </br>
-->

<p class="side-tag">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    </div>

<div class="column main-page">

<header>
<nav>

    <ul>
        <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
        <li><a href="cart.php" class="nav-li">CART</a></li>
        <li><a href="profile.php" class="nav-li">PROFILE</a></li>
        <li><a href="home.php" class="nav-li">HOME</a></li>
    </ul>

</nav>
</header>

<h1 class="top">MENU</h1>
<?php
        $q = ("SELECT resturant,item,price FROM menu WHERE resturant = 'Resturant 4' ");
        $result = mysqli_query($con,$q);
        $num = mysqli_num_rows($result);
    
    for($i = 1; $i <= $num; $i++)
    {
        $row = mysqli_fetch_array($result);
    ?>
    <?php  echo $row['resturant']; ?>
    <?php echo $row['item'];?> 
    <?php echo $row['price'] ?>
    </br>
    <?php }  ?>
    </div>
    </body>
    </html>