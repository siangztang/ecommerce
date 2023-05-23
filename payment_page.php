<?php
require_once('config.php');

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
    <title>Checkout</title>

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
                                    <a href="index.php">
                                        <svg class="svg-icon">
                                            <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                        </svg>
                                        <img src="assets/images/logo.png" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
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
                    <h3>Checkout</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h3 class="mb-3">Billing address</h3>
                    <form class="needs-validation">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter Full Name">
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="example@example.com" required>
                            </div>

                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="form-select custome-form-select" id="validationCustom05">
                                    <option selected disabled value="">Choose...</option>
                                    <option>Bhutan</option>
                                    <option>Burundi</option>
                                    <option>Comoros</option>
                                    <option>Dilhi</option>
                                    <option>Mumbai</option>
                                    <option>Surat</option>
                                    <option>Abu & Ambaji</option>
                                    <option>Japan</option>
                                    <option>Cuba</option>
                                    <option>Zambia</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" aria-describedby="emailHelp" placeholder="1234 Main St">
                            </div>
                        </div>
                        <button class="btn btn-solid-default mt-4 stripe-button" id="payButton">
                            <!-- <div class="spinner hidden" id="spinner"></div> -->
                            <div class="spinner-border" role="status" id="spinner" style="display: none"></div>
                            <span id="buttonText" style="display: block">Pay Now</span>
                        </button>
                    </form>
                    <div id="paymentResponse" class="hidden"></div>
                </div>

                <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Your cart
                        </h3>
                        <ul class="list-group mb-3">
                            <?php
                            $total_qty = 0;
                            $total = 0;
                            if (isset($_SESSION['cart'])) {

                                foreach ($_SESSION['cart'] as $item) {

                                    $subtotal = $item['price'] * $item['quantity'];
                                    $total += $subtotal;

                            ?>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0"><?php echo $item['name']; ?></h6>
                                            <small>x<?php echo $item['quantity']; ?></small>
                                        </div>
                                        <span>$<?php echo $item['price'] * $item['quantity']; ?></span>
                                    </li>
                                <?php };
                                ?>
                                <li class="list-group-item d-flex lh-condensed justify-content-between">
                                    <span class="fw-bold">Total (USD)</span>
                                    <strong>$<?php echo $total ?></strong>
                                </li>
                            <?php
                            }; ?>
                        </ul>
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

    <!-- Notify js -->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>

    <script src="https://js.stripe.com/v3/"></script>




    <script>
        // Set Stripe publishable key to initialize Stripe.js
        const stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

        // Select payment button
        const payBtn = document.querySelector("#payButton");

        // Payment request handler
        payBtn.addEventListener("click", function(evt) {
            setLoading(true);

            createCheckoutSession().then(function(data) {
                if (data.sessionId) {
                    stripe.redirectToCheckout({
                        sessionId: data.sessionId,
                    }).then(handleResult);
                } else {
                    handleResult(data);
                }
            });
        });

        // Create a Checkout Session with the selected product
        const createCheckoutSession = function(stripe) {
            return fetch("payment_init.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    createCheckoutSession: 1,
                }),
            }).then(function(result) {
                return result.json();
            });
        };

        // Handle any errors returned from Checkout
        const handleResult = function(result) {
            if (result.error) {
                showMessage(result.error.message);
            }

            setLoading(false);
        };

        // Show a spinner on payment processing
        function setLoading(isLoading) {
            if (isLoading) {
                // Disable the button and show a spinner
                payBtn.disabled = true;
                document.getElementById("spinner").style.display = "block";
                document.getElementById("buttonText").style.display = "none";
            } else {
                // Enable the button and hide spinner
                payBtn.disabled = false;
                document.getElementById("spinner").style.display = "none";
                document.getElementById("buttonText").style.display = "block";
            }
        }

        // Display message
        function showMessage(messageText) {
            const messageContainer = document.querySelector("#paymentResponse");

            messageContainer.classList.remove("hidden");
            messageContainer.textContent = messageText;

            setTimeout(function() {
                messageContainer.classList.add("hidden");
                messageText.textContent = "";
            }, 5000);
        }
    </script>
</body>

</html>