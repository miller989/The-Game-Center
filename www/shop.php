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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li  class="active">
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
   
    <div id="content">
       <div class="container">
           <div class="col-md-12">
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul>
           </div>
           <div class="col-md-3">
   
   <?php 
    include("includes/sidebar.php");  
    ?>     
           </div>
           
           <div class="col-md-9">
               <div class="box">
                   <h1>Store</h1>

               </div>
               
               <div class="row">
                   
               <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin/products/1.jpg" alt="Product 1">
                </a>

                <div class="text">

                    <h3>
                        <a href="details.php">
                        Grand Theft Auto V 
                        </a>
                    </h3>
                    <p class="price">$29.99</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin/products/2.jpg" alt="Product 1">
                </a>

                <div class="text">

                    <h3>
                        <a href="details.php">
                        ARK 
                        </a>
                    </h3>
                    <p class="price">$0.42</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                </a>

                <div class="text">

                    <h3>
                        <a href="details.php">
                        Monster Hunter World
                        </a>
                    </h3>
                    <p class="price">$32.89</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin/products/4.jpg" alt="Product 1">
                </a>

                <div class="text">

                    <h3>
                        <a href="details.php">
                        DRAGON BALL FighterZ
                        </a>
                    </h3>
                    <p class="price">$23.99</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin/products/5.jpg" alt="Product 1">
                </a>

                <div class="text">

                    <h3>
                        <a href="details.php">
                        Dead by Daylight 
                        </a>
                    </h3>
                    <p class="price">$12.99</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin/products/6.jpg" alt="Product 1">
                </a>

                <div class="text">

                    <h3>
                        <a href="details.php">
                        Red Dead Redemption 2
                        </a>
                    </h3>
                    <p class="price">$59.99</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
               
                </div>
               
               
                   <ul class="pagination">
                       <li><a href="#">First</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">6</a></li>
                       <li><a href="#">Last</a></li>
                   </ul>
               
               
           </div>
           
       </div>
   </div>
   


   <?php 
    include("includes/footer.php");
    ?>

    <script src="assets/js/jquery-331.min.js"></script>
    <script src="assets/js/bootstrap-337.min.js"></script>
</body>

</html>