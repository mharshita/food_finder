<?php 
include("connection.php");
    /*$loggedUsername = $_SESSION['username'];*/

    if(isset($_POST['add1a']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 1 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add1b']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 2 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add1c']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 3 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add1d']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 4 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add2a']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 5 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add2b']))
    {
        $q = "INSERT INTO orders 
        SELECT * FROM menu WHERE id = 6 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add2c']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 7 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add2d']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 8 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add3a']))
    {
        $q = "INSERT INTO orders 
        SELECT * FROM menu WHERE id = 9 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add3b']))
    {
        $q = "INSERT INTO orders 
        SELECT * FROM menu WHERE id = 10 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add3c']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 11 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add3d']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 12 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add4a']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 13 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add4b']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 14 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add4c']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 15 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    if(isset($_POST['add4d']))
    {
        $q = "INSERT INTO orders 
                SELECT * FROM menu WHERE id = 16 ";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }
?>