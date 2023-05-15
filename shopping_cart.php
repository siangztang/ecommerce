<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <title>Cart Page</title>

    <!-- Google font -->
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
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">

</head>

<body class="theme-color1 light ltr">

    <!-- header start -->
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.html">
                                        <svg class="svg-icon">
                                            <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                        </svg>
                                        <img src="assets/images/logo.png" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="menu-right">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shopping Cart</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 table-responsive mt-4">
                    <?php

                    $total = 0;
                    $total_qty = 0;
                    if(!empty($_SESSION['cart']) ){
                        foreach ($_SESSION['cart'] as $item) {
                            
                                $subtotal = $item['price'] * $item['quantity'];
                                $total_qty += $item['quantity'];
                                $total += $subtotal;
                            
                            
                        }
                    }
                    ?>
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($_SESSION['cart'] as $item) {
                        ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/fashion/product/front/1.jpg" class=" blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="product-left-sidebar.html"><?php echo $item['name']; ?></a>
                                    </td>
                                    <td>
                                        <h2><?php echo $item['price']; ?></h2>
                                    </td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number" value="<?php echo $item['quantity']; ?>">
                                                <!-- <button type="button" class="btn m-1 btn-secondary">Update</button> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <h2 class="td-color"><?php echo '$ ', $item['price'] * $item['quantity']; ?></h2>
                                    </td>
                                </tr>
                            </tbody>
                        <?php }; ?>
                    </table>
                </div>

                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="add_to_cart.php?delete-all-item" class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="index.php" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">

                        </div>

                        <div class="col-lg-4 col-sm-6 ">

                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Total <span>$ <?php echo $total ?></span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout.html">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->

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
                                    <span>
                                        <b>phone:</b>
                                        <span class="font-light"> + 185659635</span>
                                    </span>

                                </li>
                                <li>
                                    <span>
                                        <b>Address:</b>
                                        <span class="font-light"> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States</span>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <b>Email:</b>
                                        <span class="font-light"> Voxo123@gmail.com</span>
                                    </span>

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

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js -->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js -->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- timer js -->
    <script src="assets/js/count-down-timer.js"></script>

    <!-- Notify js -->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        function updateQuantity(quantity, id){
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'add_to_cart.php', true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-data');

            var data = new FormData();
            data.append('id',id);
            data.append('newQty', quantity);
            
            xhr.onload = function(){
                if(xhr.status === 200){
                    alert("nicee");
                }else{
                    alert("nooo");
                }
            };
            xhr.send(data);
        }
    </script>
</body>

</html>