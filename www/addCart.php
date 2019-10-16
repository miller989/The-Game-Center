<?php
/** ensure user is logged in**/
session_start();
if ( isset( $_SESSION['name'] ) ) {
    $name = $_SESSION['name'];
    $permissions = $_SESSION['permissions'];
} else {
    header("Location: login.html?err=1000");
}
/** Check if cart in session **/
if ( isset( $_SESSION['cart'] ) ) {
    /** If cart in session **/
    $cart = $_session['cart'];
    $cartSize = count($cart);
    /** Check if cart has posted information**/
    if ( !isset($_POST['addCart']) ) {
        die ('Nothing being posted');
        header("Location: cart.php?err=2000");
    }
    $addCart = $_POST['addCart'];
    $cartSize++;
    $cart[$cartSize - 1] = $addCart;
    header("Location: cart.php?err=2000");

} else {
    /** if cart is not in session **/
    /** Check if cart has posted information**/
    if ( !isset($_POST['addCart']) ) {
        die ('Nothing being posted');
        header("Location: cart.php?err=2000");
    }
    //** Create cart with posted information **//
    $cart[0] = $_POST['addCart'];
    header("Location: cart.php");
}
?>
