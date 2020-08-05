<?php session_start(); ?>

<?php
include("connection.php");
if(isset($_POST['log_in']))
{
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$s = "select * from user where username = '$username' && password = '$password' ";
	$result = mysqli_query($con,$s);
	$row = mysqli_fetch_assoc($result);
	if(is_array($row))
	{
		$_SESSION['user_id'] = $row['user_id'];
	}
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "YOU ARE NOW LOGGED IN";
		header("location: home.php");
	}
}

if(isset($_POST['sign_up']))
{
    $email = mysqli_real_escape_string($con,$_POST['e_mail']);
	$username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
	$query = "insert into user(password,e_mail,username) values('$password','$email','$username')";
	mysqli_query($con,$query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "YOU ARE NOW LOGGED IN";
	header("location: #login");
}

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <title>FOOD FINDER</title>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="#login">LOGIN</a></li>
                    <li id="sign"><a href="#signup">SIGN UP</a></li>
                </ul>
            </nav>
        </header>





        <div id="login" class="overlay">
            <div class="popup">
                <h2>LOGIN</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" id="input"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="input"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="float: right;"><input type="submit" name="log_in" value="LOGIN" class="button button-accent button-small"></td>
                            </tr>
                        </table>

                    </form>

                </div>
            </div>
        </div>




        <div id="signup" class="overlay">
            <div class="popup">
                <h2>SIGN UP</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                   
                <form action="" method="POST">
                   <table>
                       <tr>
                           <td>Username</td>
                           <td><input type="text" name="username" id="input"></td>
                       </tr>
                       <tr>
                           <td>Email</td>
                           <td><input type="text" name="e_mail" id="input"></td>
                       </tr>
                       <tr>
                           <td>Password</td>
                           <td><input type="password" name="password" id="input"></td>
                       </tr>
                       <tr>
                           <td></td>
                           <td style="float: right;"><input type="submit" value="SIGN UP" name="sign_up" class="button button-accent button-small"></td>
                       </tr>
                   </table>
                   </form>

                </div>
            </div>
        </div>





        <section class="index-first">
            <div class="container">
                <h1 class="title">THE FOOD FINDER</br>
                    <span id="cursive"><em>delivering the best food at your doorstep</em></span>
                </h1>
            </div>
        </section>

         <!--Work-->
        <section class="portfolio" id="work">
            <!--<div class="container">-->
                <h3 class="work">Our Services and Collections </h3>



                 <!--portfolio item 1-->
            <figure class="port-item">
<a href="#popup">
<img src="./images/pic-1.JPG" alt="portfolio item" >

<figcaption class="port-desc">
    <p>Order Food Online</p>
   
</figcaption>
</a>
</figure>

<!--portfolio item 2-->
<figure class="port-item">
<a href="#popup">
<img src="./images/pic-2.JPG" alt="portfolio item">

<figcaption class="port-desc">
    <p>Go Out For A Meal</p>

</figcaption>
</a>
</figure>

<!--portfolio item 3-->
<figure class="port-item">
<a href="#popup">
<img src="./images/pic-3.JPG" alt="portfolio item">

<figcaption class="port-desc">
    <p>Nightlife And Clubs</p>
   
</figcaption>
</a>
</figure>

<!--portfolio item 4-->
<figure class="port-item">
<a href="#popup">
<img src="./images/pic-4.JPG" alt="portfolio item">

<figcaption class="port-desc">
    <p>Just Delivery</p>
   
</figcaption>
</a>
</figure>

<!--portfolio item 5-->
<figure class="port-item">
<a href="#popup">
<img src="./images/pic-5.JPG" alt="portfolio item">

<figcaption class="port-desc">
    <p>Late Night Delivery</p>
    
</figcaption>
</a>
</figure>

<!--portfolio item 6-->
<figure class="port-item">
<a href="#popup">
<img src="./images/pic-6.JPEG" alt="portfolio item">

<figcaption class="port-desc">
    <p>Takeaway And Delivery</p>
   
</figcaption>
</a>
</figure>
            
</section>
            







<div id="popup" class="overlay">
            <div class="popup">
                <h2>Lorem ipsum</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
        </div>








<div class="blank">
</div>

                      
                       


        <section class="cta">
            <div class="container">
                <h1 class="title"> FOOD is the ingredient that
                    <span> binds us together :)</span>
                </h1>
                </div>
        </section>

        <img src="./images/food-finder.jpg" alt="logo" width="40%" height="40%" id="logo">

        <footer id="contact">
            <div class="container">
                <h1>Contact Us</h1>
            <div class="col-3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum urna quis porttitor congue. Nulla viverra feugiat leo, vitae scelerisque nisi finibus id. Aenean massa dolor, ultricies eu nibh ac, rhoncus porta metus. Nam eu gravida neque, vel accumsan enim.
            </p>
            </br>
            <h1>Connect With Us</h1>
             <!--icons-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <a href="#" class="fa fa-facebook"></a>

            <a href="#" class="fa fa-twitter"></a>

            <a href="#" class="fa fa-instagram"></a>
            
            <a href="#" class="fa fa-linkedin"></a>

            <!--icons till here-->

            </div>

            <div class="col-1">
                <ul class="unstyled-list"> 
                    <li><strong>Lorem ipsum dolor sit amet</strong></li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ul>
            </div>

            <div class="col-1">
                <ul class="unstyled-list"> 
                    <li><strong>Lorem ipsum dolor sit amet</strong></li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ul>
            </div>

            <div class="col-1">
                <ul class="unstyled-list"> 
                    <li><strong>Lorem ipsum dolor sit amet</strong></li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ul>
                </div>
            </div>


        </footer>


    </body>
</html>