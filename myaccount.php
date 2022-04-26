<?php
// Include the database config file 
require_once 'dbConfig.php'; 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }


// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kisaan Udyog - A Online Marketplace</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- All CSS is here
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Google font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/signpainter-housescript.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/linearicons.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <!-- Others CSS -->
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.mb.ytplayer.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jarallax.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
<div class="main-wrapper">
            <header class="header-area section-padding-1 ">
                <div class="header-large-device">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo logo-res-lg">
                                    <a href="index.html">
                                        <img src="assets/images/logo/KisaanUdyog (2).png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-menu menu-lh-3 main-menu-padding-1 menu-text-black text-center">
                                    <nav>
                                        <ul>
                                            <li><a class="active" href="index.php">HOME</a></li>
                                            <li><a href="about-us.html">ABOUT US</a></li>
                                            <li><a href="shop-fullwide.html">SHOP</a>
                                                <ul class="mega-menu-style-2 mega-menu-width2 menu-negative-mrg4">
                                                    <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Vegetables</a>
                                                        <ul>
                                                            <li><a href="#">Tomato</a></li>
                                                            <li><a href="#">Cauliflower</a></li>
                                                            <li><a href="#">Carrot</a></li>
                                                            <li><a href="#">LadyFinger</a></li>
                                                            <li><a href="#">Capsicum</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width22"><a class="menu-title" href="#">Fruits</a>
                                                        <ul>
                                                            <li><a href="#">Strawberry</a></li>
                                                            <li><a href="#">Banana</a></li>
                                                            <li><a href="#">Mango</a></li>
                                                            <li><a href="#">Grapes</a></li>
                                                            <li><a href="#">Pineapple</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Combo Offer & Basket</a>
                                                        <ul>
                                                            <li><a href="#">Happy Veggies Basket</a></li>
                                                            <li><a href="#">Immunity Basket</a></li>
                                                            <li><a href="#">Family Basket</a></li>
                                                            <li><a href="#">Exotic Basket</a></li>
                                                            <li><a href="#">Wholesale Weekly Basket</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-sub-width37">
                                                        <div class="banner-menu-content-wrap default-overlay">
                                                            <a href="product-details.html"><img src="assets/images/menu/banner-header-organic.jpg" alt="banner"></a>
                                                            <div class="banner-menu-content">
                                                                <h2>New <br>Collections</h2>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">WHY KISAAN UDYOG</a></li>
                                            <li><a href="contact.html">CONTACT US</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2">
                                <div class="header-right-wrap header-right-flex hr-mrg-handmade">
                                    <div class="same-style same-style-mrg-dec search-3-area">
                                        <a class="search-toggle" href="#">
                                            <i class="lnr lnr-magnifier s-open"></i>
                                            <i class="ti-close s-close"></i>
                                        </a>
                                        <div class="search-wrap-3">
                                            <form action="#">
                                                <input placeholder="Search products..." type="text">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="same-style same-style-mrg-dec">
                                        <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <!-- <div class="same-style same-style-mrg-dec">
                                        <a class="cart-active" href="cart.html"><i class="fa fa-cart-arrow-down"></i></a>
                                    </div> -->
                                    <div class="same-style same-style-mrg-dec">
                                        <a class="clickalbe-button-active" href="#"><i class="fa fa-bars"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-small-device">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="mobile-logo mobile-logo-width">
                                    <a href="index.html">
                                        <img alt="" src="assets/images/logo/logo.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="header-right-wrap header-right-flex">
                                    <div class="same-style">
                                        <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <!-- <div class="same-style">
                                        <a class="cart-active" href="cart.html"><i class="fa fa-cart-arrow-down"></i></a>
                                    </div> -->
                                    <div class="same-style">
                                        <a class="mobile-menu-button-active" href="#"><i class="fa fa-bars"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="clickalbe-sidebar-wrapper-active clickalbe-sidebar-wrapper-style-1">
                <div class="clickalbe-sidebar-wrap clickalbe-sidebar-padding-dec">
                    <a class="sidebar-close"><i class=" ti-close "></i></a>
                    <div class="header-aside-content sidebar-content-100-percent">
                        <div class="header-aside-payment">
                            <img src="assets/images/logo/kisaan.png" alt="Logo">
                        </div>
                        <p>Kisankonnect farmers are advised to follow Good Agriculture Practices (GAP), which ensures that the crops are not produced at the cost of the environment</p>
                        <hr>
                        <div class="header-aside-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">HOME</a></li>
                                    <li><a href="#">ABOUT US</a></li>
                                    <li><a href="#">SHOP</a></li>
                                    <li><a href="#">WHY KISAAN UDYOG</a></li>
                                    <li><a href="#">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="aside-contact-info">
                            <ul>
                                <li><i class=" ti-alarm-clock "></i>Monday - Friday: 9:00am - 19:00pm</li>
                                <li><i class=" ti-email "></i>Info@kisaanudyog.com</li>
                                <li><i class=" ti-mobile "></i>(+91) 70218 37464</li>
                                <li><i class=" ti-home "></i>Mumbai, Maharashtra, India</li>
                            </ul>
                        </div>
                        <div class="social-icon-style-2 mb-25">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <div class="copyright copyright-gray-2">
                            <p>© 2020 <a target="_blank" href="#">Kisaan Udhyog</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu start -->
            <!-- <div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
                <div class="clickalbe-sidebar-wrap">
                    <a class="sidebar-close"><i class=" ti-close "></i></a>
                    <div class="mobile-menu-content-area sidebar-content-100-percent">
                        <div class="mobile-search">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search entire store…">
                                <button class="button-search"><i class=" ti-search "></i></button>
                            </form>
                        </div>
                        <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                            <nav>
                                <ul>
                                    <li class="has-sub-menu"><a href="#">Home</a>
                                        <ul class="sub-menu-2">
                                            <li class="has-sub-menu"><a href="#">Demo Group 01</a>
                                                <ul class="sub-menu-2">
                                                    <li><a href="index.html">Home Electronic</a></li>
                                                    <li><a href="index-book.html">Home Book</a></li>
                                                    <li><a href="index-fashion.html">Home Fashion</a></li>
                                                    <li><a href="index-flower.html">Home Flower</a></li>
                                                    <li><a href="index-cake.html">Home Cake</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub-menu"><a href="#">Demo Group 02</a>
                                                <ul class="sub-menu-2">
                                                    <li><a href="index-furniture.html">Home Furniture</a></li>
                                                    <li><a href="index-handmade.html">Home Handmade</a></li>
                                                    <li><a href="index-kids.html">Home Kids</a></li>
                                                    <li><a href="index-organic.html">Home Organic</a></li>
                                                    <li><a href="index-pet.html">Home Pet</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-menu"><a href="#">Pages</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="coming-soon.html">Comming Soon</a></li>
                                            <li><a href="empty-cart.html">Empty Cart</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-menu"><a href="#">shop</a>
                                        <ul class="sub-menu-2">
                                            <li class="has-sub-menu"><a href="#">Shop Layout</a>
                                                <ul class="sub-menu-2">
                                                    <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                                    <li><a href="shop-2-col.html">Shop 02 Columns</a></li>
                                                    <li><a href="shop-list-style.html">Shop List Style</a></li>
                                                    <li><a href="shop-collection.html">Shop Collection</a></li>
                                                    <li><a href="shop-instagram.html">Shop Instagram</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub-menu"><a href="#">Product Layout</a>
                                                <ul class="sub-menu-2">
                                                    <li><a href="product-details.html">Single 01</a></li>
                                                    <li><a href="product-details-2.html">Single 02</a></li>
                                                    <li><a href="product-details-group.html">Grouped</a></li>
                                                    <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-details-configurable.html">Configurable</a></li>
                                                    <li><a href="product-details-thumbnail.html">Thumbnail</a></li>
                                                    <li><a href="product-details-video.html">Video</a></li>
                                                    <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub-menu"><a href="#">Shop Page</a>
                                                <ul class="sub-menu-2">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="checkout.html">Check Out</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="store.html">Store</a></li>
                                                    <li><a href="login-register.html">login / register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-fullwide.html">Collections</a></li>
                                    <li class="has-sub-menu"><a href="#">Blog</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog-no-sidebar.html">Blog No sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-curr-lang-wrap">
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown lang-dropdown-active">
                                    <ul>
                                        <li><a href="#">English (US)</a></li>
                                        <li><a href="#">English (UK)</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-currency-active" href="#">Currency <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown curr-dropdown-active">
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">Real</a></li>
                                        <li><a href="#">BDT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-aside-content">
                            <div class="header-aside-payment">
                                <img src="assets/images/icon-img/payment.png" alt="payment">
                            </div>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum.</p>
                            <div class="aside-contact-info">
                                <ul>
                                    <li><i class=" ti-alarm-clock "></i>Monday - Friday: 9:00 - 19:00</li>
                                    <li><i class=" ti-email "></i>Info@example.com</li>
                                    <li><i class=" ti-mobile "></i>(+55) 254. 254. 254</li>
                                    <li><i class=" ti-home "></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                                </ul>
                            </div>
                            <div class="social-icon-style-2 mb-25">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>My Account</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper start -->
        <div class="my-account-wrapper pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Dashboard</a>
                                        <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                        <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>
                                        <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                            Method</a>
                                        <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                                        <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                        <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                                                        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="welcome">
                                                    <p>Hello, <strong>Manasi</strong> (If Not <strong>Sheramkar!</strong><a href="logout.php" class="logout"> Logout</a>)</p>
                                                </div>

                                                <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        
                                    
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2018</td>
                                                                <td>Approved</td>
                                                                <td>$200</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2017</td>
                                                                <td>On Hold</td>
                                                                <td>$990</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="download" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Downloads</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Date</th>
                                                                <th>Expire</th>
                                                                <th>Download</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Haven - Free Real Estate PSD Template</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Yes</td>
                                                                <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>HasTech - Profolio Business Template</td>
                                                                <td>Sep 12, 2018</td>
                                                                <td>Never</td>
                                                                <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Payment Method</h3>
                                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Billing Address</h3>
                                                <address>
                                                    <p><strong>Alex Tuntuni</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                                        <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first-name" class="required">First Name</label>
                                                                    <input type="text" id="first-name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Last Name</label>
                                                                    <input type="text" id="last-name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Display Name</label>
                                                            <input type="text" id="display-name" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Addres</label>
                                                            <input type="email" id="email" />
                                                        </div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current Password</label>
                                                                <input type="password" id="current-pwd" />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">New Password</label>
                                                                        <input type="password" id="new-pwd" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                        <input type="password" id="confirm-pwd" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                        
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->










            <div class="subscribe-area subscribe-organic-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 ml-auto mr-auto">
                            <div class="section-title-11 mb-60 text-center">
                                <h3>Newsletter</h3>
                                <h2>Get Discount 30% Off</h2>
                                <img src="assets/images/icon-img/oganic-leaf.png" alt="">
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form-2">
                                <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style-2" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form-2 mc-form-2-modify">
                                        <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                        <div class="mc-news-2" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear-2 organic-clear-2">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-logo organic-footer-logo">
                                <a href="index.html">
                                    <img style="width:100%;" src="assets/images/logo/Kisaan.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget mb-45">
                                <h3 class="footer-title-4">About Kisaan Udyog</h3>
                                <div class="footera-about-2">
                                    <p>Kisankonnect farmers are advised to follow Good Agriculture Practices (GAP), which ensures that the crops are not produced at the cost of the environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget mb-45">
                                <h3 class="footer-title-4">Contact Info</h3>
                                <div class="footer-contact-wrap">
                                    <div class="single-footer-contact fc-green-3">
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="footer-contact-text">
                                            <p>Monday - Friday: 9:00 - 19:00</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-contact fc-green-3">
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="footer-contact-text">
                                            <p>info@kisaanudyog.com</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-contact fc-green-3">
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-volume-control-phone"></i>
                                        </div>
                                        <div class="footer-contact-text">
                                            <p>7021499225</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-contact fc-green-3">
                                        <div class="footer-contact-icon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="footer-contact-text">
                                            <p>Mumbai, Maharashtra, India</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center copyright-ptb copyright-uppercase">
                                <p>© 2020 KISAAN UDYOG. <a target="_blank" href="https://kisaanudyog.com/">All rights reserved.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-organic-img">
                    <img src="assets/images/banner/organic-footer-img%20(2).png" alt="banner">
                </div>
            </footer>
            
    </div>

        <!-- All JS is here
    ============================================ -->

        <!-- Modernizer JS -->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <!-- jquery -->
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/vendor/popper.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins/owl-carousel.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/jquery.mb.ytplayer.min.js"></script>
        <script src="assets/js/plugins/magnific-popup.js"></script>
        <script src="assets/js/plugins/wow.js"></script>
        <script src="assets/js/plugins/instafeed.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/jarallax.min.js"></script>
        <script src="assets/js/plugins/images-loaded.js"></script>
        <script src="assets/js/plugins/isotope.js"></script>
        <script src="assets/js/plugins/tilt.js"></script>
        <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
        <script src="assets/js/plugins/jquery-ui.js"></script>
        <script src="assets/js/plugins/easyzoom.js"></script>
        <script src="assets/js/plugins/resizesensor.js"></script>
        <script src="assets/js/plugins/sticky-sidebar.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/ajax-mail.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

    </body>

</html>