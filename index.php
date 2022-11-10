<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="burger">
            <div class="layer1"></div>
            <div class="layer2"></div>
            <div class="layer3"></div>
        </div>
        <div class="logo">
            <span class="logo-text"><i class="fa fa-book" style="margin-right: 0.1em"></i>Comfort<span
                    style="color: #f09d51; font-size:1.1em;">Learning</span></span>
        </div>
        <div class="menubar">
            <ul class="list">
                <li class="list-items"><a href="#">HOME</a></li>
                <li class="list-items"><a href="#">COURSES</a></li>
                <li class="list-items"><a href="#">PRICING</a></li>
                <li class="list-items"><a href="#">ABOUT US</a></li>
            </ul>
        </div>
        <div class="cart">
            <i class="fa fa-shopping-cart fa-1x"></i>
            <div class="number-of-items"><span class="noi">0</span></div>
        </div>
    </nav>

    <section class="section1">
        <div class="banner">
            <h1>FIND YOUR FAVORITE COURSE HERE!</h1>
            <a href="#products">SHOP NOW</a>
        </div>
    </section>
    <section class="section2" id="products">
        <div class="title">
            <h1>COURSES WE OFFER</h1>
        </div>
        <div class="product">

        </div>
    </section>


    <div class="cart-sidebar">
        <div class="cart">
            <span class="close-cart">
                <i class="fa fa-times"></i>
            </span>
            <h2>Your Cart</h2>
            <div class="cart-content"></div>
        </div>
        <div class="total-sum">
            <h1>Your Total: Rs.<span class="total-sum">0</span></h1>
        </div>
        <div class="clear-cart">
            <button class="btn clear-cart-btn">Clear cart</button>
        </div>
        <div class="clear-cart">
            <button class="btn clear-cart-btn">Proceed</button>
        </div>
    </div>


    <div class="menu-sidebar">
        <div class="close-menu">
            <i class="fa fa-times"></i>
        </div>
        <div class="menu-menubar">
            <ul class="menu-list">
                <li class="menu-list-items"><a href="#">HOME</a></li>
                <li class="menu-list-items"><a href="#">CATEGORIES</a></li>
                <li class="menu-list-items"><a href="#">PRICINGS</a></li>
                <li class="menu-list-items"><a href="#">ABOUT US</a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="products.json"></script>
</body>

</html>