<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fonts/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-337.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>TGC</title>
</head>

<body>
    <?php include 'includes/top.php';?>

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
         <?php include("includes/sidebar.php");?>
      </div>
      <div class="col-md-9">
         <div id="productMain" class="row">
            <div class="col-sm-6">
               <div id="mainImage">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="item active">
                           <center><img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                           </center>
                        </div>
                        <div class="item">
                           <center><img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                           </center>
                        </div>
                        <div class="item">
                           <center><img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                           </center>
                        </div>
                     </div>
                     <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a href="#myCarousel" class="right carousel-control" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="box">
                  <h1 class="text-center">Monster Hunter World</h1>
                  <form action="addCart.php" class="form-horizontal" method="post">
                     <div class="form-group">
                        <label for="" class="col-md-5 control-label">Products Quantity</label>
                        <div class="col-md-7">
                           <input type="number" id="quantity" value="1" min="1" max="10">
                        </div>
                     </div>
                     <p class="price">$32.89</p>
                     <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">
                        Add to cart</button>
                     </p>
                  </form>
               </div>
               <div class="row" id="thumbs">
                  <div class="col-xs-4">
                     <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                     <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                     <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                     <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="box" id="details">
            <h4>Game Info</h4>
            <p>
               Monster Hunter: World is an action-role-playing game and the fifth entry of the main Monster
               Hunter series developed and published by Capcom. The player takes the role of a Hunter traveling to the New
               World as a part of the Fifth Fleet. The Research Commission asks for volunteers to provide more support in
               the New World as they study new beasts, particularly the Elder Dragon Zorah Magdaros. Groups of hunters
               convene in Astera, the New World's primary base of operations as they utilize facilities to craft armor
               and weapons, buy provisions, and undertake quests. Monster Hunter: World features a series first online
               cross-region multiplayer, uniting the global player base. The game was released for PlayStation 4 and Xbox
               One on January 26th, 2018, and released on Microsoft Windows on August 9th, 2018. On September 6th, 2019 The
               Monster Hunter World: Iceborne Expansion released.
            </p>
            <br>
            <h4>Specs</h4>
            <b>Minimum</b>
            <ul>
               <li>CPU: Intel Core i5-4460, 3.20GHz or AMD FX-6300</li>
               <li>RAM: 8 GB</li>
               <li>VIDEO CARD: NVIDIA GeForce GTX 760 or AMD Radeon R7 260x</li>
               <li>VRAM: 2048 MB</li>
               <li>FREE DISK SPACE: 20 GB</li>
               <li>OS: WINDOWS 7, 8, 8.1, 10 (64-bit required)</li>
            </ul>
            <b>Recommended</b>
            <ul>
            <li>CPU: Intel Core i7 3770 3.4GHz or Intel Core i3 8350 4GHz or AMD Ryzen 5 1500X</li>
            <li>RAM: 8 GB</li>
            <li>VIDEO CARD: NVIDIA GeForce GTX 1060 or AMD Radeon RX 570X</li>
            <li>VRAM: 3072 MB</li>
            <li>FREE DISK SPACE: 20 GB</li>
            <li>OS: WINDOWS 7, 8, 8.1, 10 (64-bit required)</li>
            </ul>
            <hr>
         </div>
         <div id="row same-heigh-row">
            <div class="col-md-3 col-sm-6">
               <div class="box same-height headline">
                  <h3 class="text-center">Game You Might Like</h3>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 center-responsive">
               <div class="product same-height">
                  <a href="game.php">
                  <img class="img-responsive" src="admin/products/4.jpg" alt="Product 1">
                  </a>
                  <div class="text">
                     <h3><a href="game.php"> DRAGON BALL FighterZ</a></h3>
                     <p class="price">$23.99</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 center-responsive">
               <div class="product same-height">
                  <a href="game.php">
                  <img class="img-responsive" src="admin/products/3.jpg" alt="Product 1">
                  </a>
                  <div class="text">
                     <h3><a href="game.php"> Monster Hunter World </a></h3>
                     <p class="price">$32.89</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 center-responsive">
               <div class="product same-height">
                  <a href="game.php">
                  <img class="img-responsive" src="admin/products/6.jpg" alt="Product 1">
                  </a>
                  <div class="text">
                     <h3><a href="game.php"> Red Dead Redemption 2</a></h3>
                     <p class="price">$60</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

    <?php
   include "includes/footer.php";
   ?>
    <script src="assets/js/jquery-331.min.js"></script>
    <script src="assets/js/bootstrap-337.min.js"></script>
</body>

</html>
