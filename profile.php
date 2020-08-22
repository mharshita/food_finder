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
 <span class="text_1">Hungry??</span>
<span class="text_2">Order food now!!</span>
</h1>
</br></br>
<a href="home.php" class="button button-accent button-small"><strong>Order Now</strong></a>
</br></br>
<a href="" class="button button-accent button-small"><strong>Rate & Review</strong></a> </br>

    </div>
    <div class="column main-page">

    <!-- <header> --> 

        <nav>
       
            <ul>
           
                <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
                <li><a href="cart.php" class="nav-li">CART</a></li>
                <li><a href="home.php" class="nav-li">HOME</a></li>
              
            </ul>
            
        </nav>

<!--</header>-->
<?php
    $sql = ("SELECT * FROM user WHERE username = '$loggedUsername' ");
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    for($i = 1; $i <= $num; $i++)
    {
        $row = mysqli_fetch_array($result);
?>

        <h1 class="main-head">Profile Page</h1>
        <table>
        <tr>
            <td>Username</td>
            <td><?php echo $row['username']; ?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $row['e_mail']; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $row['password']; } ?></td>
        </tr>
        </table>
        </br></br>
        <a href="" class="button button-accent button-small"><strong>Edit Details</strong></a>
        <a href="" class="button button-accent button-small"><strong>Show Previous Reviews</strong></a>
    </div>
</div>

</body>
</html>