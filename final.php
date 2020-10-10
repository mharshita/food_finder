<?php 
session_start();
include("connection.php");
    $loggedUsername = $_SESSION['username'];

    if(isset($_POST['final']))
    {
        $sql = 'DELETE FROM orders';
        $res = mysqli_query($con, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <link rel="stylesheet" href="css/cart-css.css">
</head>
<body>
    <h1 style="margin-top: 5em">PAYMENT SUCCESSFUL !!!</h1>
    <a href="home.php" class="button button-accent button-small">HOME</a></br>
    <a href="logout.php" class="button button-accent button-small">LOGOUT</a>
</body>
</html>