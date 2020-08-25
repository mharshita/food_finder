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

<p class="side-tag">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>

</br></br>
        <h1>
 <span class="text_3">Hungry?</span>
<span class="text_2">Order food now! </span>
</h1>
</br></br>

<p class="side-tag">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>

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
        $q = ("SELECT resturant,item,price,food_type FROM menu WHERE resturant = 'Resturant 2' ");
        $result = mysqli_query($con,$q);
        $num = mysqli_num_rows($result);
    
    for($i = 1; $i <= $num; $i++)
    {
        $row = mysqli_fetch_array($result);
    ?>

<!-- CARD 1 -->
<?php if($i == 1) { ?>

<div class="row">
<div class="card1">

<div class="column image">
<img src="https://images.unsplash.com/photo-1579711220373-155ffc441b36?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="image">
</div>

<div class="column content">
<a href="" class="button button-accent button-small"><strong>+</strong></a>
<h1 class="card-head"> <strong><?php echo $row['item'];?></strong> </h1>

<p class="card-data"><strong>Resturant: </strong><?php  echo $row['resturant']; ?></p></br>
<p class="card-data"><strong>Price: </strong><?php echo $row['price'];?></p></br>
<p class="card-data"><strong>Type: </strong><?php echo $row['food_type']; ?></p>
</br>

</div>

</div>
</div>
<?php } ?>
<!-------------------------------->


<!-- CARD 2-->
<?php if($i == 2){ ?>

<div class="row">
<div class="card1">

<div class="column image">
<img src="https://images.unsplash.com/photo-1579712267685-42da80f60aa4?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="image">
</div>

<div class="column content">
<a href="" class="button button-accent button-small"><strong>+</strong></a>
<h1 class="card-head"><strong> <?php echo $row['item'];?></strong> </h1>

<p class="card-data" ><strong>Resturant: </strong><?php  echo $row['resturant']; ?></p></br>
<p class="card-data" ><strong>Price: </strong><?php echo $row['price'];?></p></br>
<p class="card-data" ><strong>Type: </strong><?php echo $row['food_type']; ?></p>
</br>

</div>

</div>
</div>
<?php } ?>
<!-------------------------------->

<!-- CARD 3-->
<?php if($i == 3){ ?>

<div class="row">
<div class="card1">

<div class="column image">
<img src="https://images.unsplash.com/photo-1547333440-51f85a3220bf?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="image">
</div>

<div class="column content">
<a href="" class="button button-accent button-small"><strong>+</strong></a>
<h1 class="card-head"> <strong><?php echo $row['item'];?></strong> </h1>

<p class="card-data" ><strong>Resturant: </strong><?php  echo $row['resturant']; ?></p></br>
<p class="card-data" ><strong>Price: </strong><?php echo $row['price'];?></p></br>
<p class="card-data" ><strong>Type:</strong> <?php echo $row['food_type']; ?></p>
</br>

</div>

</div>
</div>
<?php } ?>
<!-------------------------------->

<!-- CARD 4-->
<?php if($i == 4){ ?>

<div class="row">
<div class="card1">

<div class="column image">
<img src="https://images.unsplash.com/photo-1528207776546-365bb710ee93?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="image">
</div>

<div class="column content">
<a href="" class="button button-accent button-small"><strong>+</strong></a>
<h1 class="card-head"><strong> <?php echo $row['item'];?></strong> </h1>

<p class="card-data"><strong>Resturant:</strong> <?php  echo $row['resturant']; ?></p></br>
<p class="card-data"><strong>Price: </strong><?php echo $row['price'];?></p></br>
<p class="card-data"><strong>Type:</strong> <?php echo $row['food_type']; ?></p>
</br>

</div>

</div>
</div>
<?php } ?>
<!-------------------------------->

<?php } ?>
</div>

    </body>
    </html>