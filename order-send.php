<?php 
    require_once "queryDb.php";
    
    session_start();

    if(isset($_SESSION['pork_egg']) && isset($_SESSION['beef']) && isset($_SESSION['pho']) && isset($_SESSION['noodle']) && isset($_POST['lname']) && isset($_POST['fname']) && isset($_POST['phone']) && isset($_POST['pickup']) && isset($_POST['date'])){
        $noodle = $_SESSION['noodle'];
        $pho = $_SESSION['pho'];
        $pork_egg = $_SESSION['pork_egg'];
        $beef = $_SESSION['beef'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $pickup = $_POST['pickup'];
        $date = $_POST['date'];

        $price=$pho*14 + $pork_egg*23 + $beef*20 + $noodle*20;
        $pickup = $date." at ".$pickup;

        if($pho != 0){
            $dishes= $dishes."Pho ".$pho." ";
        }
        if($beef != 0){
            $dishes= $dishes."Beef Stew ".$beef." ";
        }
        if($pork_egg != 0){
            $dishes= $dishes."Pork Egg ".$pork_egg." ";
        }
        if($noodle != 0){
            $dishes= $dishes."BS Noodle ".$noodle." ";
        }

        if($price > 0){
            addOrder($fname, $lname, $phone, $dishes, $price, $pickup);
        }
        else{
            $pickup = "the day the earth stands still";
            $message = "You dont order anything, so your order wont be processed";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
    else{
        $message = "Seems like you try to break my database aye!? Your order won't be saved :(";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
?>


<!DOCTYPE html> 
<html>
    <head>
        <meta charset=“utf-8”/> 
        <title>Order confirmed</title>
        <link rel="shortcut icon" type="image/png" href="photos\icon\favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet-order-submit.css">
    <body>
        <header>
            <h1 class="logo"><a href="index.php">Little Saigon</a></h1>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
                <ul>
                    <li><a href="index.php">Menu</a></li>
                    <li><a href="order-online.php">Order now</a></li>
                    <li><a href="promotion.php">Promotion</a></li>
                    <li><a href="contact-us.php">Contact us</a></li>
                    <li><a href="hiring.php">Join the team!</a>
                    <li><a href="login.php">Admin page</a>
                </ul>
            </nav>
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
        </header>

        <div class="banner-wrapper-order-online"></div>

        <div class="site-title">
            <h1>Order Confirmed!</h1>
        </div>

        <div id="page">

            <p class="page-description">Thank you so much! We will arrange the timing for cooking it, so you can enjoy it hot and fresh.</p>
            
            <div class="image-wrapper-send"></div>

            <div class="order-confirmed">
                <h2 style="text-align: center; margin-bottom: 0.1em;">This is what you have ordered, <?php echo $fname?></h2>
                <div class="order-list">
                    <div class="food-sublist">
                        <?php
                            if($pho != 0){
                                echo "<p>&#8226; <span style='font-weight: bolder'>".$pho." </span> Beef Noodle Soup</p>";
                            }
                            if($beef != 0){
                                echo "<p>&#8226; <span style='font-weight: bolder'>".$beef." </span> Beef Stew</p>";
                            }
                            if($pork_egg != 0){
                                echo "<p>&#8226; <span style='font-weight: bolder'>".$pork_egg." </span> Pork Belly & Eggs</p>";
                            }
                            if($noodle != 0){
                                echo "<p>&#8226; <span style='font-weight: bolder'>".$noodle." </span> Beef Noodle & Spring Roll</p>";
                            }
                            $payment=$pho*14 + $pork_egg*23 + $beef*20 + $noodle*20;
                            
                            echo "<h4 style='text-align: center; font-size: 1.25em; margin-bottom: 0;'>Total: $".$price."</h4>";    
                            echo "<p style='text-align: center; font-size: 1em; margin-bottom: 0;'>See you on ".$pickup."</p>";
                        ?>
                    </div>
                </div>
                <form action="index.php">
                    <div style="padding: 0em; padding-bottom: 1em;" class="submit-button">
                        <input type="submit" value="Go to homepage" />
                    </div>
                </form>
            </div>
        
        </div>

        <footer>
            <div class="footer-wrapper">
                <div class="footer-text">
                    <h1 style="font-weight: lighter;">Find us on social media </h1>
                </div>
                <div class="footer-logo">
                    <a href="#"><img src="photos\icon\facebook-icon.png"></a>
                    <a href="#"><img src="photos\icon\instagram-icon.png"></a>
                    <a href="#"><img src="photos\icon\messager-icon.png"></a>
                </div>
                <div class="footer-phone">
                    <p>PH: (07) 2548 4869</span></p>
                </div>
                <p id="footer-copyright">&#169 UNREAL WEB COMPANY</p>  
            </div>
        </footer>
    </body>
</html>

