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
define('STRIPE_API_KEY', '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');
define('STRIPE_PUBLISHABLE_KEY', 'pk_live_51MYnePAeMEiuCfV9U8aVjhQpKQRFGeaTT7zSrcqNVWdSWprfOjRANq1UcxTTc0RUyHTwm8jbUEeZro6qU2MK0k0400KJpbCNhr');
define('STRIPE_SUCCESS_URL', 'http://202.185.77.174/skpro/index.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://202.185.77.174/skpro/index.php'); //Payment cancel URL 
