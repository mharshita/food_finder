<?php 
session_start();
include("connection.php");
    $loggedUsername = $_SESSION['username'];

    if(isset($_GET['delete']))
    {
	    $id = $_GET['delete'];
	    $sql= "delete from orders where id=$id";
	    mysqli_query($con,$sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart-css.css" type="text/css">
</head>
<body>

<nav>
    <ul>
        <li><a href="logout.php" class="nav-li">LOGOUT</a></li>
        <li><a href="profile.php" class="nav-li">PROFILE</a></li>
        <li><a href="home.php" class="nav-li">HOME</a></li>
    </ul>
</nav>
<h1 class="top">CART</h1>
<div class="list">
<table id = "container">
    <tr>
        <td class="h">Restaurant</td>
        <td class="h">Item</td>
        <td class="h">Price</td>
        <td class="h">Remove Item</td>
    </tr>

    <?php 
        $q = ("SELECT * FROM orders");
        $result = mysqli_query($con, $q);
        $num = mysqli_num_rows($result);

        for($i = 1; $i <= $num; $i++)
        {
            $row = mysqli_fetch_array($result);
    ?>

    <tr>
        <td class="list-item"><?php echo $row['item']; ?></td>
        <td class="list-item"><?php echo $row['resturant']; ?></td>
        <td class="list-item" id="price"><?php echo $row['price']; ?></td>
        <td class="list-item"><a href="cart.php?delete=<?php echo $row['id'] ?>" id="delete" class="delete">REMOVE</a></td>
    </tr>
    <?php } ?>
</table>
</div>

<form method="POST" action="final.php">
<input type="hidden" name="hidden">
    <input type="submit" name="final" class="button button-accent button-small" value="ORDER NOW" />
    </form>
</body>
</html>