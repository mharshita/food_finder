<?php 
include("connection.php");
    /*$loggedUsername = $_SESSION['username'];*/

    if(isset($_POST['add1a']))
    {
        $num = 1;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add1b']))
    {
        $num = 2;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add1c']))
    {
        $num = 3;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add1d']))
    {
        $num = 4;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add2a']))
    {
        $num = 5;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add2b']))
    {
        $num = 6;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add2c']))
    {
        $num = 7;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add2d']))
    {
        $num = 8;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add3a']))
    {
        $num = 9;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add3b']))
    {
        $num = 10;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add3c']))
    {
        $num = 11;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add3d']))
    {
        $num = 12;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add4a']))
    {
        $num = 13;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add4b']))
    {
        $num = 14;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add4c']))
    {
        $num = 15;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }

    else if(isset($_POST['add4d']))
    {
        $num = 16;
        $item = ("SELECT item from menu WHERE id = '$num' ");
        $resturant = ("SELECT resturant from menu WHERE id = '$num' ");
        $price = ("SELECT price from menu where id = '$num' ");

        $q = "insert into orders(item, resturant, price) values ('$item', '$resturant', '$price')";
        $result = mysqli_query($con, $q);
        header("location: cart.php");
    }
?>