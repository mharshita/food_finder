<?php 
include("connection.php");
    /*$loggedUsername = $_SESSION['username'];*/

    if(isset($_POST['add1a']))
    {
        $item = ("SELECT item from menu WHERE id = '1' ");
        $resturant = ("SELECT resturant from menu WHERE id = '1' ");
        $price = ("SELECT price from menu where id = '1' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add1b']))
    {
        $item = ("SELECT item from menu WHERE id = '2' ");
        $resturant = ("SELECT resturant from menu WHERE id = '2' ");
        $price = ("SELECT price from menu where id = '2' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add1c']))
    {
        $item = ("SELECT item from menu WHERE id = '3' ");
        $resturant = ("SELECT resturant from menu WHERE id = '3' ");
        $price = ("SELECT price from menu where id = '3' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add1d']))
    {
        $item = ("SELECT item from menu WHERE id = '4' ");
        $resturant = ("SELECT resturant from menu WHERE id = '4' ");
        $price = ("SELECT price from menu where id = '4' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add2a']))
    {
        $item = ("SELECT item from menu WHERE id = '5' ");
        $resturant = ("SELECT resturant from menu WHERE id = '5' ");
        $price = ("SELECT price from menu where id = '5' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add2b']))
    {
        $item = ("SELECT item from menu WHERE id = '6' ");
        $resturant = ("SELECT resturant from menu WHERE id = '6' ");
        $price = ("SELECT price from menu where id = '6' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add2c']))
    {
        $item = ("SELECT item from menu WHERE id = '7' ");
        $resturant = ("SELECT resturant from menu WHERE id = '7' ");
        $price = ("SELECT price from menu where id = '7' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add2d']))
    {
        $item = ("SELECT item from menu WHERE id = '8' ");
        $resturant = ("SELECT resturant from menu WHERE id = '8' ");
        $price = ("SELECT price from menu where id = '8' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add3a']))
    {
        $item = ("SELECT item from menu WHERE id = '9' ");
        $resturant = ("SELECT resturant from menu WHERE id = '9' ");
        $price = ("SELECT price from menu where id = '9' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add3b']))
    {
        $item = ("SELECT item from menu WHERE id = '10' ");
        $resturant = ("SELECT resturant from menu WHERE id = '10' ");
        $price = ("SELECT price from menu where id = '10' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add3c']))
    {
        $item = ("SELECT item from menu WHERE id = '11' ");
        $resturant = ("SELECT resturant from menu WHERE id = '11' ");
        $price = ("SELECT price from menu where id = '11' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add3d']))
    {
        $item = ("SELECT item from menu WHERE id = '12' ");
        $resturant = ("SELECT resturant from menu WHERE id = '12' ");
        $price = ("SELECT price from menu where id = '12' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add4a']))
    {
        $item = ("SELECT item from menu WHERE id = '13' ");
        $resturant = ("SELECT resturant from menu WHERE id = '13' ");
        $price = ("SELECT price from menu where id = '13' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add4b']))
    {
        $item = ("SELECT item from menu WHERE id = '14' ");
        $resturant = ("SELECT resturant from menu WHERE id = '14' ");
        $price = ("SELECT price from menu where id = '14' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add4c']))
    {
        $item = ("SELECT item from menu WHERE id = '15' ");
        $resturant = ("SELECT resturant from menu WHERE id = '15' ");
        $price = ("SELECT price from menu where id = '15' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }

    if(isset($_POST['add4d']))
    {
        $item = ("SELECT item from menu WHERE id = '16' ");
        $resturant = ("SELECT resturant from menu WHERE id = '16' ");
        $price = ("SELECT price from menu where id = '16' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
    }
?>