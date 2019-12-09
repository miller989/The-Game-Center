    <div id="top">
<?php
echo $errhtml;
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/tgc/', $path);
$page = $components[1];
?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offer">
                    <a href="index.php" class="btn btn-sm">Welcome <?php echo $_SESSION['name']; ?> to The Game Center!!</a>

                </div>
                <div class="col-md">
                    <ul class="menu">
                        <li><a href="/register/index.php">Register</a></li>
                        <li><a href="<?php if ($sessionControl == 'Logout'){ echo 'logout.php';}else{echo 'login.php';} ?>"><?php echo $sessionControl;?></a></li>
                        <li><a href="userlist.php"><?php echo $_SESSION['name']; ?></a></li>
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
                        <li class="<?php if ($page=="index.php") {echo "active"; } else  {echo "noactive";}?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php if ($page=="shop.php") {echo "active"; } else  {echo "noactive";}?>" >
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if ($page=="account.php") {echo "active"; } else  {echo "noactive";}?>">
                            <a href="invoicelist.php">My Account</a>
                        </li>
                        <li class="<?php if ($page=="cart.php") {echo "active"; } else  {echo "noactive";}?>">
                            <a href="cart.php">Cart</a>
                        </li>
                        <li class="<?php if ($page=="contact.php") {echo "active"; } else  {echo "noactive";}?>">
                            <a href="contact.php">Need Help?</a>
                        </li>
                    </ul>
                </div>

                <a href="cart.php" class="btn navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php echo $cartSize; ?> Items In Your Cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <button class="btn  navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">

                    <form method="get" action="game.php" class="navbar-form">

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

