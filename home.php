<?php session_start(); ?>
<?php
include("connection.php");
    $loggedUsername = $_SESSION['username'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="css/css-home.css" rel="stylesheet" type="text/css">
</head>

<body>
<script src="dropdown.js"></script>
<script src="filter.js"></script>

<header> 

        <nav>
       
            <ul>
           
                <li><a href="logout.php" class="nav-li">LOGOUT</a></li>

                <div class="dropdown">

                <li><a href="" class="dropbtn">FILTER</a></li>

                <div class="dropdown-content">
               <a href="" class="btn active" onclick="filterSelection('all')">Show All</a>
               <a href="" class="btn" onclick="filterSelection('veg')">Veg</a>
               <a href="" class="btn" onclick="filterSelection('non_veg')">Non-Veg</a>
               </div>
       


                </div>

                <li><a href="profile.php" class="nav-li">PROFILE</a></li>

                <?php 
                  $query = "SELECT item FROM orders WHERE id = 1";
                  $result = mysqli_query($con, $query);
                  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                  if(isset($row['item'])){ 
                ?>
                <li><a href="cart.php" class="nav-li">CART</a></li>
                    <?php 
                  }
                  else{ 
                    ?>
                    <li><a href="empty_cart.php" class="nav-li">CART</a></li>
                  <?php } ?>
            </ul>
            
        </nav>

</header>

<div class="portfolio">

<div class="card filterDiv veg">
  <img src="https://images.unsplash.com/photo-1565895405227-31cffbe0cf86?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="Resturant 1" style="width:100%; height: 101.5%">
  <h1>Restaurant 1</h1>
  <p class="price">Veg</br>Delivery Time: 30 minutes</p>
  <p style="font-weight: bold"> Lorem ipsum dolor sit amet</p>
  <form action="menu1.php" method="POST"><input type="submit" class="button" name="Resturant 1" value="SHOW MENU"></form>
</div>

<div class="card filterDiv veg">
  <img src="https://images.unsplash.com/photo-1579711220373-155ffc441b36?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="Resturant 2" style="width:100%; height: 101.5%">
  <h1>Restaurant 2</h1>
  <p class="price">Veg</br>Delivery Time: 45 minutes</p>
  <p style="font-weight: bold"> Lorem ipsum dolor sit amet</p>
 <form action="menu2.php" method="POST"><input type="submit" class="button" name="Resturant 2" value="SHOW MENU"></form>
</div>

<div class="card1 filterDiv non_veg">
  <img src="https://images.unsplash.com/photo-1578922794704-7bdd46f70ce0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="Resturant 3" style="width:100%; height: 101.5%">
  <h1>Restaurant 3</h1>
  <p class="price">Non-Veg</br>Delivery Time: 40 minutes</p>
  <p style="font-weight: bold"> Lorem ipsum dolor sit amet</p>
  <form action="menu3.php" method="POST"><input type="submit" class="button1" name="Resturant 3" value="SHOW MENU"></form>
</div>

<div class="card1 filterDiv non_veg">
  <img src="https://images.unsplash.com/photo-1556178675-eb094aaa8447?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=350&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=400" alt="Denim Jeans" style="width:100%; height: 101.5%">
  <h1>Restaurant 4</h1>
  <p class="price">Non-Veg</br>Delivery Time: 35 minutes</p>
  <p style="font-weight: bold"> Lorem ipsum dolor sit amet</p>
  <form action="menu4.php" method="POST"><input type="submit" class="button1" name="Resturant 4" value="SHOW MENU"></form>
</div>

</div>

</body>
</html>