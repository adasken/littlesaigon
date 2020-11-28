<?php
    require_once "queryDb.php";

    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    else{
        $search = null;
    }

    $orders = getOrder($search);


?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset=“utf-8”/> 
        <title>Homepage</title>
        <link rel="shortcut icon" type="image/png" href="photos\icon\favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet-admin.css">
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

        <div class="banner-wrapper-index"></div>

        <div class="site-title">
            <h1>Owner Page</h1>
        </div>

        <div id="page">

            <p class="page-description">Hello, there. These are your online orders. <br> If something wrong, don't panic and just call 0414505102 to talk with &#169 unreal web company.</p>
            <h2 style="text-align: center; text-weight: bolder;">&#10052;&#10052;&#10052;</h2>
            <div class="search-bar">
                <form>
                    <label for="search">Search for customer</label>
                    <div class="input-search">
                        <input type="text" id="search" name="search" placeholder="John Connor">
                        <input type="submit" value="search">
                    </div>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Guest name</th>
                        <th>Phone</th>
                        <th>Dishes</th>
                        <th>Price</th>
                        <th>Pickup Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order){ ?>
                    <tr>
                        <td><?=$order['ORDERID']?></td>
                        <td><?=$order['FNAME']." ".$order['LNAME']?></td>
                        <td><?=$order['PHONE']?></td>
                        <td><?=$order['DISHES']?></td>
                        <td><?=$order['PRICE']?></td>
                        <td><?=$order['PICKUP']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

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

