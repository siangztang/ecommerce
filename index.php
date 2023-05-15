<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json">
    <link rel="icon" href="assets/images/favicon/4.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/favicon/4.png">
    <meta name="theme-color" content="#0163d2">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Voxo">
    <meta name="msapplication-TileImage" content="assets/images/favicon/4.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon" />
    <title>Electronic Store</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo1.css">

</head>

<body class="theme-color1 light ltr">

    <!-- header start -->
    <header id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.html">
                                        <!-- <svg class="svg-icon">
                                            <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                        </svg> -->
                                        <!-- Put your logo here -->
                                        <img src="" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="menu-right">
                                <a href="shopping_cart.php" class="btn btn-solid-default m-1">Shopping Cart</a>
                                <!-- <ul>
                                    <li class="onhover-dropdown cart-dropdown">
                                        <button type="button" class="btn btn-solid-default btn-spacing">
                                            <i data-feather="shopping-cart" class="pe-2"></i>
                                            <span>
                                                <?php

                                                $total = 0;
                                                $total_qty = 0;

                                                foreach ($_SESSION['cart'] as $item) {
                                                    $subtotal = $item['price'] * $item['quantity'];
                                                    $total_qty += $item['quantity'];
                                                    $total += $subtotal;
                                                }
                                                echo '$ ', $total;
                                                ?>
                                            </span>
                                        </button>
                                        <div class="onhover-div">
                                            <div class="cart-menu">
                                                <div class="cart-title">
                                                    <h6>
                                                        <i data-feather="shopping-bag"></i>
                                                        <span class="label label-theme rounded-pill"><?php echo $total_qty ?></span>
                                                    </h6>
                                                    <span class="d-md-none d-block">
                                                        <i class="fas fa-arrow-right back-cart"></i>
                                                    </span>
                                                </div>
                                                <ul class="custom-scroll">
                                                    <?php
                                                    foreach ($_SESSION['cart'] as $item) {


                                                    ?>
                                                        <li>
                                                            <div class="media">
                                                                <img src="assets/images/fashion/product/front/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                <div class="media-body">
                                                                    <h6><?php echo $item['name']; ?></h6>
                                                                    <div class="qty-with-price">
                                                                        <span><?php echo $item['price']; ?></span>
                                                                        <span>
                                                                            <input type="number" class="form-control" value="<?php echo $item['quantity']; ?>">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="btn-close d-block d-md-none" aria-label="Close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </li>

                                                    <?php }; ?>
                                                </ul>
                                            </div>

                                            <div class="cart-btn">
                                                <h6 class="cart-total"><span class="font-light">Total:</span> $
                                                    542.00</h6>
                                                <button onclick="location.href = 'cart.html';" type="button" class="btn btn-solid-default btn-block">
                                                    Proceed to payment
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                                <div class="search-suggestion">
                                    <ul class="custom-scroll">
                                        <li>
                                            <div class="product-cart media">
                                                <img src="assets/images/electronics/product/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">New Smart Watch 4 ERT2</h6>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$28.00</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-cart media">
                                                <img src="assets/images/electronics/product/5.jpg" class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">Powermatic 900 W Juicer</h6>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$35.00</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- home slider start -->
    <section class="home-section">
        <div class="container-fluid">
            <div class="slick-1 classic-arrow">
                <div>
                    <div class="home-slider">
                        <img src="assets/images/electronics/slider/1.jpg" class="bg-img blur-up lazyload" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home slider end -->

    <!-- Product Section Start -->
    <section id="product">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title text-center">
                        <h2>Our Product</h2>
                        <h5>Just For You</h5>
                    </div>

                    <div class="product-wrapper slide-6 ratio_asos">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="assets/images/flower/popular/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $10.00
                                        <!-- <span class="font-light ml-1">$52.00</span> -->
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>A</h5>
                                    </a>
                                    <form action="add_to_cart.php" method="POST">
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="1">
                                            <input type="hidden" name="name" value="A">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                            <input type="hidden" name="price" value="10">
                                            <button class="btn m-1 rounded-3 btn-solid-default" name="add-to-cart">Add to Cart</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="assets/images/flower/popular/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <!-- <span class="font-light ml-1">$52.00</span> -->
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>B</h5>
                                    </a>
                                    <form action="add_to_cart.php" method="POST">
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="2">
                                            <input type="hidden" name="name" value="B">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                            <input type="hidden" name="price" value="49">
                                            <button class="btn m-1 rounded-3 btn-solid-default" name="add-to-cart">Add to Cart</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="assets/images/flower/popular/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <!-- <span class="font-light ml-1">$52.00</span> -->
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Beautiful and Fresh Bookey</h5>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <button class="btn m-1 rounded-3 btn-solid-default">Add to Cart</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="assets/images/flower/popular/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <!-- <span class="font-light ml-1">$52.00</span> -->
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Beautiful and Fresh Bookey</h5>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <button class="btn m-1 rounded-3 btn-solid-default">Add to Cart</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="assets/images/flower/popular/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <!-- <span class="font-light ml-1">$52.00</span> -->
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Beautiful and Fresh Bookey</h5>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <button class="btn m-1 rounded-3 btn-solid-default">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <a href="product-left-sidebar.html">
                                        <img src="assets/images/flower/popular/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <!-- <span class="font-light ml-1">$52.00</span> -->
                                    </h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Beautiful and Fresh Bookey</h5>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <button class="btn m-1 rounded-3 btn-solid-default">Add to Cart</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Section End -->



    <section>

    </section>





    <!-- footer start -->
    <footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="index.html" class="footer-logo">
                                    <svg class="svg-icon">
                                        <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                    </svg>
                                    <img src="assets/images/logo.png" class="img-fluid blur-up lazyload" alt="logo">
                                </a>
                            </div>
                            <ul class="contact-lists">
                                <li>
                                    <span><b>phone:</b> <span class="font-light"> + 185659635</span></span>

                                </li>
                                <li>
                                    <span><b>Address:</b><span class="font-light"> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States</span></span>
                                </li>
                                <li>
                                    <span><b>Email:</b><span class="font-light"> Voxo123@gmail.com</span></span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="index.html" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Shop</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html" class="font-dark">About Us</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Blog</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>New Categories</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Latest Shoes</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Branded Jeans</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">New Jackets</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Colorfull Hoodies</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Shiner Goggles</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Get Help</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="user-dashboard.html" class="font-dark">Your Orders</a>
                                    </li>
                                    <li>
                                        <a href="user-dashboard.html" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html" class="font-dark">Track Orders</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="font-dark">Your Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="faq.html" class="font-dark">Shopping FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Let’s stay in touch</h3>
                            <div class="form-newsletter">
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <span class="input-group-text" id="basic-addon4"><i class="fas fa-arrow-right"></i></span>
                                </div>
                                <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li class="font-dark">We accept:</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 font-dark">© 2022, Voxo Theme. Made with heart by Pixelstrap</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Cart Successful Start -->
    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.html" class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.html" class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Successful End -->

    <!-- Quick view modal start -->
    <div class="modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="quick-view-image">
                                <div class="quick-view-slider ratio_2">
                                    <div>
                                        <img src="assets/images/electronics/product/1.jpg" class="img-fluid bg-img" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg" class="img-fluid bg-img" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/9.jpg" class="img-fluid bg-img" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg" class="img-fluid bg-img" alt="product">
                                    </div>
                                </div>
                                <div class="quick-nav">
                                    <div>
                                        <img src="assets/images/electronics/product/1.jpg" class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg" class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/9.jpg" class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg" class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-right">
                                <h2 class="mb-2">Smart Watch ERT2</h2>
                                <h6 class="font-light mb-1">Model LR274</h6>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="price mt-3">
                                    <h3>$20.00</h3>
                                </div>
                                <div class="color-types">
                                    <h4>colors</h4>
                                    <ul class="color-variant mb-0">
                                        <li class="bg-half-light selected"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-blue1"></li>
                                        <li class="bg-black1"></li>
                                    </ul>
                                </div>
                                <div class="product-details">
                                    <h4>product details</h4>
                                    <ul>
                                        <li>
                                            <span class="font-light">Display type :</span> Analog
                                        </li>
                                        <li>
                                            <span class="font-light">Mechanism:</span> Quartz
                                        </li>
                                        <li>
                                            <span class="font-light">Warranty:</span> 1 year
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-btns">
                                    <a href="cart.html" class="btn btn-solid-default btn-sm" data-bs-dismiss="modal">Add
                                        to cart</a>
                                    <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm" data-bs-dismiss="modal">View details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Newsletter modal start -->
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">

                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn btn-solid-default w-100" data-bs-dismiss="modal" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter modal end -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Timer js -->
    <script src="assets/js/timer1.js"></script>

    <!-- newsletter js -->
    <script src="assets/js/newsletter.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/home-script.js"></script>

</body>

</html>