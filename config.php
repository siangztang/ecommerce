<?php
session_start();
$total = 0;
foreach ($_SESSION['cart'] as $item) {

    $subtotal = $item['price'] * $item['quantity'];
    $total += $subtotal;
};

// Product Details  
// Minimum amount is $0.50 US  
$productName = "XXXX Company";
$productID = "ID";
$productPrice = $total;
$currency = "usd";

/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */
define('STRIPE_API_KEY', 'sk_test_51N8OhhBIyDw8Hh3qdJGOmjb8NEH9vSHNkeav7mgWReXKdbI1Z1wHS9ykPFLxbHO6OXBG39rbpXOkD14tbxdqeZ7n009o6OsLHw');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51N8OhhBIyDw8Hh3qcTiu2EfryvF6o1uSS74spOaBQCoyNsxBxrCxNMonUVu7To9jqbRSA7TmKV8sSUDWEW7IolsJ00uBhTZwrw');
define('STRIPE_SUCCESS_URL', 'http://202.185.77.174/skpro/index.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://202.185.77.174/skpro/index.php'); //Payment cancel URL 
