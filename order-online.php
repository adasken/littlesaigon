<?php
    session_start();
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset=“utf-8”/> 
        <title>Order online</title>
        <link rel="shortcut icon" type="image/png" href="photos\icon\favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet-order-online.css">
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

            <p class="page-description">Order now and pick up later. There will be some special discount for your next order. Please ask our friendly staff about the promo code for online order when you pick up your food.  </p>

            <form action="order-submit.php" method="post">

                <!-- Dish 1: PHO -->
                <div class="item-wrapper">
                    <div class="item-name">
                        <h2>Beef Noodle Soup – Pho</h2>
                    </div>
                    <div class="item-description">
                        <p>The famous Vietnamese pho served with beef brisket, beef balls, slices of rare beef & garnished with beansprouts, red onion & basil</p>
                    </div>
                    <div class="item-img">
                        <img src="photos/contact-pic6.jpg">
                    </div>
                    <div class="image-wrapper1"></div>
                    <div class="item-input">
                        <div class="price-tag"><label for="pho">$14</label></div>
                        <select class="select-css" id="pho" name="pho">
                            <option value="0">Quantity</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <!-- Dish 2: Pork Belly and Egg -->
                <div class="item-wrapper">
                    <div class="item-name">
                        <h2>Pork Belly & Eggs</h2>
                    </div>
                    <div class="item-description">
                        <p>Slow cooked pork belly & egg in coconut juice & fish sauce. </p>
                    </div>
                    <div class="item-img">
                        <img src="photos/pork-belly-and-egg.jpg">
                    </div>
                    <div class="image-wrapper2"></div>
                    <div class="item-input">
                        <div class="price-tag"><label for="pork_egg">$23</label></div>
                        <select class="select-css" id="pork_egg" name="pork_egg">
                            <option value="0">Quantity</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <!-- Dish 3: Beef Stew -->
                <div class="item-wrapper">
                    <div class="item-name">
                        <h2>Beef Stew</h2>
                    </div>
                    <div class="item-description">
                        <p>Beef shin slow cooked in a special spice broth with carrots & potatoes</p>
                    </div>
                    <div class="item-img">
                        <img src="photos/beef-stew.jpg">
                    </div>
                    <div class="image-wrapper3"></div>
                    <div class="item-input">
                        <div class="price-tag"><label for="beef">$20</label></div>
                        <select class="select-css" id="beef" name="beef">
                            <option value="0">Quantity</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <!-- Dish 4: Marinated Beef Noodle & Spring Roll Noodle Bowl -->

                <div class="item-wrapper">
                    <div class="item-name">
                        <h2>Marinated Beef Noodle & Spring Roll</h2>
                    </div>
                    <div class="item-description">
                        <p>Beef stir fried with lemongrass, served with herbs, cucumber & beansprouts</p>
                    </div>
                    <div class="item-img">
                        <img src="photos/noodel-bowls.jpg">
                    </div>
                    <div class="image-wrapper4"></div>
                    <div class="item-input">
                        <div class="price-tag"><label for="noodle">$20</label></div>
                        <select class="select-css" id="noodle" name="noodle">
                            <option value="0">Quantity</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="submit-button"><input type="submit" value="Check out"></div>

            </form> 

            <div class="cooking-icon"><img src="photos\icon\cooking-icon.png"></div>
        
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

