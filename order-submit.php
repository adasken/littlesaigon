<?php 
    session_start();

    $pho = $_POST['pho'];
    $pork_egg = $_POST['pork_egg'];
    $beef = $_POST['beef'];
    $noodle = $_POST['noodle'];
    $_SESSION['pho'] = $_POST['pho'];
    $_SESSION['pork_egg'] = $_POST['pork_egg'];
    $_SESSION['beef'] = $_POST['beef'];
    $_SESSION['noodle'] = $_POST['noodle'];

    $payment=$pho*14 + $pork_egg*23 + $beef*20 + $noodle*20;
    
    if(isset($_SESSION['pork_egg'])){

    }

?>


<!DOCTYPE html> 
<html>
    <head>
        <meta charset=“utf-8”/> 
        <title>Order online</title>
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
            <h1>Order online</h1>
        </div>

        <div id="page">

            <p class="page-description">Enter your detail and place order now </p>
            
            <form action="order-send.php" method="post">

                <h4>Your info</h4>

                <div class="input-guest-info">
                    <div class="guest-fname">
                        <label for="fname">First name</label><br>
                        <input type="text" id="fname" name="fname" placeholder="John" required>
                    </div>
                    <div class="guest-lname">
                        <label for="lname">Last name</label><br>
                        <input type="text" id="lname" name="lname" placeholder="Wick" required>
                    </div>
                    <div class="guest-phone">
                        <label for="phone">Phone number</label><br>
                        <input type="tel" id="phone" name="phone" placeholder="04xxxx" required>
                    </div>
                    <div class="guest-pickup-time">
                        <label for="pickup">What time do you want to pick it up?</label><br>
                        <input type="time" id="pickup" name="pickup" required>
                    </div>
                    <div class="guest-pickup-date">
                        <label for="date">And which date?</label><br>
                        <input type="date" id="date" name="date" required>
                    </div>
                </div>

                <h4>Payment</h4>

                <div class="input-payment">
                    <div class="pay-amount">
                        <p>Total: <?php echo $payment?></p>
                    </div>

                    <div class="order-list">
                        <div class="food-sublist">
                            <?php
                                if($pho != 0){
                                    echo "<p><span style='font-weight: bolder'>".$pho." </span> Beef Noodle Soup</p>";
                                }
                                if($beef != 0){
                                    echo "<p><span style='font-weight: bolder'>".$beef." </span> Beef Stew</p>";
                                }
                                if($pork_egg != 0){
                                    echo "<p><span style='font-weight: bolder'>".$pork_egg." </span> Pork Belly & Eggs</p>";
                                }
                                if($noodle != 0){
                                    echo "<p><span style='font-weight: bolder'>".$noodle." </span> Beef Noodle & Spring Roll</p>";
                                }
                            ?>
                        </div>
                    </div>


                    <div class="guest-cardnumber">
                        <label for="cardnumber">Card number</label><br>
                        <input type="tel" id="cardnumber" name="cardnumber" placeholder="265X XXXX XXXX XXXX">
                    </div>
                    <div class="guest-carddetail">
                        <div class="card-expire">
                            <label for="expire">Expiry date</label><br>
                            <input type="tel" id="expire" name="expire" placeholder="MM/YY">
                        </div>
                        <div class="card-cvv">
                            <label for="cvv">CVV</label><br>
                            <input type="tel" id="cvv" name="cvv" placeholder="XXX">
                        </div>
                    </div>

                    <p style="font-size: 10px; padding-left: 1em">*You can just not enter and go pay now :P</p>

                </div>

                <div class="submit-button"><input type="submit" value="Place order"></div>


            </form>
            
        
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

