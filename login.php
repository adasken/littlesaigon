<!DOCTYPE html> 
<html>
    <head>
        <meta charset=“utf-8”/> 
        <title>Login</title>
        <link rel="shortcut icon" type="image/png" href="photos\icon\favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet-login.css">
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
            <h1>Login</h1>
        </div>

        <div id="page">

            <form action="admin.php" method="post">

                <div class="container">
                    <label for="uname"><b>Admin username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname">

                    <label for="psw"><b>Admin password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw">
                        
                    <button type="submit">Login</button>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <p style="font-size: 0.75em;">*If forgot your password, please call (08) 1450 5102</a></p>
                </div>
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

