<?php session_start(); ?>
<?php
include("connection.php");
    $loggedUsername = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile-css.css" type="text/css">
</head>
<body>
    
<div class="row">
    <div class="column side-bar">
        <h1 class="side-head">Food Finder</h1>
        <p class="side-tag">delivering the best food at your doorstep :)</p>
</br></br>
        <h1>
 <span class="text_1">Hungry?</span>
<span class="text_2">Order food now!!</span>
</h1>
</br></br>
<a href="home.php" class="button button-accent button-small">Order Now</a>
</br></br>
<a href="home.php" class="button button-accent button-small">Rate & Review</a> </br>

    </div>
    <div class="column main-page">

    <!-- <header> --> 

        <nav>
       
            <ul>
           
                <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
                <li><a href="" class="nav-li">CART</a></li>
              
            </ul>
            
        </nav>

<!--</header>-->

        <h1 class="main-head">To make changes, just click the edit button!!</h1>
        <p>Username : <?php echo $loggedUsername ?></p>
    </div>
</div>

</body>
</html>