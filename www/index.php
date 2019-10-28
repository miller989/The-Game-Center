<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fonts/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-337.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TGC</title>
</head>

<body>
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-sm">Welcome to The Game Center!!</a>
                    
                </div>
                <div class="col-md">
                    <ul class="menu">
                        <li><a href="customer_register.php">Register</a></li>
                        <li><a href="checkout.php">Login/Logout</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Top -->
    <!-- Start of nav  -->
    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <a href="index.php" class="navbar-brand home">
                    <img src="assets/img/logo2.png" alt="TGCLogo" class="hidden-xs" style="max-height: 55px;">
                    <img src="assets/img/logo2.png" alt="TGCLogo" class="visible-xs"style="max-height: 40px;">
                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>

            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <div class="padding-nav">

                    <ul class="nav navbar-nav left">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Need Help?</a>
                        </li>
                    </ul>
                </div>

                <a href="cart.php" class="btn navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items In Your Cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <button class="btn  navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">

                    <form method="get" action="results.php" class="navbar-form">

                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">

                                <button type="submit" name="search" value="Search" class="btn btn">

                                    <i class="fa fa-search"></i>

                                </button>

                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of nav  -->
    <!-- img slider def not stolen   -->

    <div class="container" id="slider">
        <div class="col-md-12">

            <div class="carousel slide" id="myCarousel" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin/frontps/1.png" alt="Slider Image 1" style="max-height: 500px;">
                    </div>

                    <div class="item">
                        <img src="admin/frontps/2.png" alt="Slider Image 2" style="max-height: 500px;">
                    </div>

                    <div class="item">
                        <img src="admin/frontps/3.png" alt="Slider Image 3" style="max-height: 500vpx;">
                    </div>

                    <div class="item">
                        <img src="admin/frontps/4.png" alt="Slider Image 4" style="max-height: 500vpx;">
                    </div>

                </div>
            </div>
        </div>
    </div>




    <?php 
    include("includes/hot.php");
    include("includes/footer.php");
    ?>

    <script src="assets/js/jquery-331.min.js"></script>
    <script src="assets/js/bootstrap-337.min.js"></script>
</body>

</html>