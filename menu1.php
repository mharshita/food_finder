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

<header>
<nav>

    <ul>
        <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
        <li><a href="" class="nav-li">CART</a></li>
        <li><a href="profile.php" class="nav-li">PROFILE</a></li>
    </ul>

</nav>
</header>

<h1 class="top">MENU</h1>

<?php
        $q = ("SELECT resturant,item FROM menu WHERE resturant = 'Resturant 1' ");
        $result = mysqli_query($con,$q);
        $num = mysqli_num_rows($result);
    
    for($i = 1; $i <= $num; $i++)
    {
        $row = mysqli_fetch_array($result);
    ?>
    <?php  echo $row['resturant']; ?>
    <?php echo $row['item'];?> 
    </br>
    <?php } ?>

    </body>
    </html>