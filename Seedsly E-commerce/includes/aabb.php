<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="apnakiranas,apnakirana,jabalpur,kirana,apna,
    shop,kiranashop,store,food,grocery,shopping,foodstore,foodshopping,atta,rice,dal,nearbykirana,fooddelivery">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apna Kiranas</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="../orgain/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../orgain/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../orgain/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../orgain/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../orgain/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../orgain/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../orgain/css/style.css" type="text/css">
</head>

<body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img style="width:50px;height:50px;" src="images/other_img/logoak.jpg" alt=""></a>
        </div>
        <!--<div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>-->
        <div class="humberger__menu__widget">
            <!--<div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>-->
		    <div class="header__top__right__auth">
            <a href="register.php"><i class="fa fa-user"></i>Register |</a>
            </div>
            <div class="header__top__right__auth">
                <a href="login.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
               <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Our Products</a></li>
		  
            <?php 
                 if (isset($_SESSION["type"])){
                    if ($_SESSION["type"] == "user"){
                     echo '<li><a href="cart.php">View Cart</a></li><li><a href="orders.php">My Orders</a></li>';   
                        echo '<li><a href="account.php">Account Details</a></li>';
                    }
                    else if ($_SESSION["type"] == "admin"){
                     echo '<li><a href="orders.php">Orders</a></li>';   
                        echo '<li><a href="account.php">Edit Products</a></li>';
                    }
                     echo '<li><a href="logout.php">Log Out</a></li>';
                 }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            
		
            </ul>
        </nav>
        
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-phone-square"></i>+91-8888777799</li>
                <li><i class="fa fa-envelope"></i>apnakiranas@gmail.com</li>
                <li>Free deliver for all Order above of 500 Rs</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header" style="background:#f5f5f5;">
        
           
        
        <div class="container" style="margin-left:10px;">
            <div class="row">
                <div class="col-lg-3" style="max-width:15%;flex:15%;">
                    <div class="header__logo">
                        <a href="index.php"><img style="width:50px;height:50px;" src="images/other_img/logoak.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6" style="max-width:84%;flex:84%;">
                    <nav class="header__menu" style="width:1300px;">
                        <ul>
                           <li><a href="index.php">Home</a></li>
          
          <li><a href="products.php">Our Products</a></li>
	
           <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
              
                <!--<div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>-->
            </div>
            
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
      
    </header>
    <!-- Header Section End -->
    
    
    <!-- Js Plugins -->
    <script src="../orgain/js/jquery-3.3.1.min.js"></script>
    <script src="../orgain/js/bootstrap.min.js"></script>
    <script src="../orgain/js/jquery-ui.min.js"></script>
    <script src="../orgain/js/jquery.slicknav.js"></script>
    <script src="../orgain/js/mixitup.min.js"></script>
    <script src="../orgain/js/owl.carousel.min.js"></script>
    <script src="../orgain/js/main.js"></script>



</body>

</html>
</html>