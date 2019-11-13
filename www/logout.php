<?php
session_start();
if ( ! isset( $_SESSION['cartSaved'] ) and isset( $_SESSION['cart'] ) ) {
    $_SESSION['saveCart'] = 'logout';
    header("Location: includes/saveCart.php");
} else {
}
session_destroy();
header("Location: login.php");


?>
