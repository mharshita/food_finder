<?php session_start(); ?>
<?php
include("connection.php");
    $loggedUsername = $_SESSION['username'];

    if(isset($_POST['edit']))
    {
        $e_mail = $_POST['e_mail'];
        $password = $_POST['password'];

        $sql = "UPDATE user SET e_mail = '$e_mail', password = '$password' ";
        $result = mysqli_query($con, $sql);
    }

    if(isset($_POST['rateReview']))
    {
        $rate = $_POST['rate'];
        $review = $_POST['review'];

        $sql = "INSERT INTO reviews (username, rating, review) values ('$loggedUsername', '$rate', '$review')";
        $result = mysqli_query($con, $sql);
    }
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
<a href="#review" class="button button-accent button-small"><strong>Rate & Review</strong></a> </br>

    </div>
    <div class="column main-page">

    <!-- <header> --> 

        <nav>
       
            <ul>
           
                <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
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
        <table class="profile-main">
        <tr>
            <td class="profile-td">Username</td>
            <td class="profile-td"><?php echo $row['username']; ?></td>
        </tr>
        <tr>
            <td class="profile-td">E-mail</td>
            <td class="profile-td"><?php echo $row['e_mail']; ?></td>
        </tr>
        <tr>
            <td class="profile-td">Password</td>
            <td class="profile-td"><?php echo $row['password']; } ?></td>
        </tr>
        </table>
        </br></br>
        <a href="#edit" class="button button-accent button-small"><strong>Edit Details</strong></a>
        <a href="#showReview" class="button button-accent button-small"><strong>Show Previous Reviews</strong></a>
    </div>
</div>

<div id="edit" class="overlay">
            <div class="popup">
                <h2>Enter New Details</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    
                    <form action="" method="POST">
                        <table>
                            <tr class="popup-tr">
                                <td class="popup-td">New E-mail</td>
                                <td class="popup-td"><input type="text" name="e_mail" id="input"></td>
                            </tr>
                            <tr class="popup-tr">
                                <td class="popup-td">New password</td>
                                <td class="popup-td"><input type="password" name="password" id="input"></td>
                            </tr>
                            <tr class="popup-tr">
                                <td></td>
                                <td class="popup-td" style="float: right;"><input type="submit" name="edit" value="EDIT" class="button button-accent button-small"></td>
                            </tr>
                        </table>

                    </form>

                </div>
            </div>
        </div>


        <div id="review" class="overlay">
            <div class="popup">
                <h2>Rate and Review</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    
                    <form action="" method="POST">
                        <table>
                            <tr class="popup-tr">
                                <td class="popup-td">Rate</td>
                                <td class="popup-td"><input type="number" name="rate" id="inputRate"></td>
                            </tr>
                            <tr class="popup-tr">
                                <td class="popup-td">Review</td>
                                <td class="popup-td"><input type="text" name="review" id="inputReview" style="height: 6em"></td>
                            </tr>
                            <tr class="popup-tr">
                                <td></td>
                                <td class="popup-td" style="float: right;"><input type="submit" name="rateReview" value="SUBMIT" class="button button-accent button-small"></td>
                            </tr>
                        </table>

                    </form>

                </div>
            </div>
        </div>


        <div id="showReview" class="overlay">
            <div class="popup">
                <h2>Previous Ratings and Reviews</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    
                        <table>
                            <tr class="popup-tr" style="margin-left: 3.5em; display: block">
                                <td class="popup-td" style="font-size: 1.3em">Rate</td>
                                <td class="popup-td" style="font-size: 1.3em">Review</td>
                            </tr>
                            <?php
                                $q = ("SELECT rating, review  FROM reviews WHERE username = '$loggedUsername' ");
                                $res = mysqli_query($con, $q);
                                $num = mysqli_num_rows($res);

                                for($i = 1; $i <= $num; $i++)
                                {
                                    $row = mysqli_fetch_array($res);  
                            ?>
                            <tr class="popup-tr">
                                <td class="popup-td"><?php echo $row['rating']; ?></td>
                                <td class="popup-td"><?php echo $row['review']; ?></td>
                            </tr>
                                <?php } ?>
                        </table>

                </div>
            </div>
        </div>

</body>
</html>