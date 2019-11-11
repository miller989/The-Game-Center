<?php
function errcheck($err){
    /*Check for errors */
    switch ($err){
    case 1000:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> You need to be <a href="login.html">logged in</a> to do that!
  </div>';
        break;
    case 1500:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> You need to have something in your cart to be there! </br> There are many fun games to play!
  </div>';
        break;
    case 2000:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> Nothing was posted! It\'s Dangerous to go alone!
            </div>';
        break;
		case 2500:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> You cannot name your cart savedCart_* Try again without that!
  </div>';
    case 1100:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> Wrong username or password! Please try again.
  </div>';
        break;
         case 100:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> Database not connected!
  </div>';
    break;
	         case 110:
        $err =  ' <div class="alert alert-danger alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> Database Query errors!
  </div>';
    break;
}
return $err;
}
?>
