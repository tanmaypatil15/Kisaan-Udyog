<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
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
                                    <a href="index.php">
                                        <img src="assets/images/logo/KisaanUdyog (2).png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-menu menu-lh-3 main-menu-padding-1 menu-text-black text-center">
                                    <nav>
                                        <ul>
                                            <li><a  href="index.php">HOME</a></li>
                                            <li><a class="active" href="about.php">ABOUT US</a></li>
                                            <li><a href="#">SHOP</a>
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
                                                            <a href="#"><img src="assets/images/menu/banner-header-organic.jpg" alt="banner"></a>
                                                            <div class="banner-menu-content">
                                                                <h2>New <br>Collections</h2>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="#">WHY KISAAN UDYOG</a></li> -->
                                            <li><a href="contact.php">CONTACT US</a></li>
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
                                    <a href="index.php">
                                        <img alt="" src="assets/images/logo/kisaan.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="header-right-wrap header-right-flex">
                                    <div class="same-style">
                                        <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
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
                        <div class="content">
                            <!-- notification message -->
                            <?php if (isset($_SESSION['success'])) : ?>
                                <div class="error success" >
                                    <h3>
                                        <?php 
                                            echo $_SESSION['success']; 
                                            unset($_SESSION['success']);
                                        ?>
                                    </h3>
                                </div>
                            <?php endif ?>
                            <!-- logged in user information -->
                            <div class="profile_info">
                                <!-- <img src="images/user_profile.png"  > -->

                                <div>
                                    <?php  if (isset($_SESSION['user'])) : ?>
                                        <strong ><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                            <i  style="color: #fff;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                            <br>
                                            <a href="index.php?logout='1'" style="color: white;">logout</a>
                                        </small>

                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="header-aside-payment">
                            <img src="assets/images/logo/logo.png" alt="Logo">
                        </div> -->
                        <!-- <p>Kisankonnect farmers are advised to follow Good Agriculture Practices (GAP), which ensures that the crops are not produced at the cost of the environment</p>
                        <hr> -->
                        <div class="header-aside-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li><a href="#">SHOP</a></li>
                                    <li><a href="contact.php">CONTACT US</a></li>
                                    <!-- <li><a href="myaccount.php">My Account</a></li> -->
                                    
                                    <li><a href="login.php">LOGIN/REGISTER</a></li>
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
            <!-- mini cart start -->
            <!-- <div class="sidebar-cart-active">
                <div class="sidebar-cart-all">
                    <a class="cart-close" href="#"><i class=" ti-close "></i></a>
                    <div class="cart-content">
                        <h3>Shopping Cart</h3>
                        <ul>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h4><a href="#">Awesome Mobile</a></h4>
                                    <span> 1 × $49.00	</span>
                                </div>
                                <div class="cart-delete">
                                    <a id="remove" href="#">×</a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h4><a href="#">Nice Headphones</a></h4>
                                    <span> 1 × $49.00	</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#">×</a>
                                </div>
                            </li>
                        </ul>
                        <div class="cart-total">
                            <h4>Subtotal: <span>$170.00</span></h4>
                        </div> 
                        <div class="cart-checkout-btn">
                            <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                            <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                        </div>
                    </div>
                </div>
            </div> -->
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
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- about us area start -->
        <div class="about-us-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-6">
                        <div class="about-us-img tilt-active">
                            <img src="assets/images/banner/01.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 align-self-center">
                        <div class="about-us-content">
                            <h2>Welcome to Kisaan Udyog</h2>
                            <p>Kisaan Udyog is a farmer producer company. It has an integrated farming system, which brings the goodness of fresh, hygienic fruits and vegetables, sourced locally from over 500+ farms, and safely delivers the fresh produce from the farms to your doorstep, at fair prices. Our farmers combine traditional farming methodology and modern technology structures to grow the best quality produce that promises taste and health in each bite!</p>
                            <!-- <div class="video-btn-3 video-btn-3-yellow">
                                <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><i class="fa fa-play"></i></a>
                            </div> -->
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us area end -->
        <div class="about-us-skill pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 align-self-center">
                        <div class="skill-content">
                            <h2>WE PROVIDE NUTRITION, HEALTH & TASTE IN EVERY BITE</h2>
                            <div class="skill-bar">
                                <div class="skill-bar-item">
                                    <span>Fresh Vegetables & Fruits </span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="95%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">99%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>Super Nutritious </span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="85%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">95%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>Economically-Viable</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="80%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">85%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>Satisfied Customers & Family</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" data-progress="99%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">89%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="skill-img">
                            <img src="assets/images/banner/aboutus.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area bg-gray-2 pt-70 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center service-mrg-left mb-30">
                            <div class="service-icon">
                                <i class=" ti-truck "></i>
                            </div>
                            <div class="service-content">
                                <h4>Freeshipping at Doorstep </h4>
                                <p>In ac hendrerit turpis. Aliquam ultrices dolor dolor, at commodo diam feugiat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center mb-30">
                            <div class="service-icon">
                                <i class=" ti-gift "></i>
                            </div>
                            <div class="service-content">
                                <h4>Combo Offers</h4>
                                <p>In ac hendrerit turpis. Aliquam ultrices dolor dolor, at commodo diam feugiat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center mb-30">
                            <div class="service-icon">
                                <i class=" ti-lock "></i>
                            </div>
                            <div class="service-content">
                                <h4>Order Protection</h4>
                                <p>In ac hendrerit turpis. Aliquam ultrices dolor dolor, at commodo diam feugiat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service text-center service-mrg-right mb-30">
                            <div class="service-icon">
                                <i class=" ti-headphone-alt "></i>
                            </div>
                            <div class="service-content">
                                <h4>Professional Support</h4>
                                <p>In ac hendrerit turpis. Aliquam ultrices dolor dolor, at commodo diam feugiat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area pt-120 pb-90">
            <div class="container">
                <div class="section-title-2 text-center mb-50">
                    <h2>Team Members</h2>
                </div>
                <div class="row" style="place-content: center;">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/images/team/team-1.jpg" alt="">
                                </a>
                                <div class="team-action">
                                    <a class="facebook" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a class="instagram" href="#">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Mr. Tanmay Patil</h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/images/team/team-2.jpg" alt="">
                                </a>
                                <div class="team-action">
                                    <a class="facebook" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a class="instagram" href="#">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Ms. Manasi Sheramkar</h4>
                                <span>Database Administrator </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="assets/images/team/team-3.jpg" alt="">
                                </a>
                                <div class="team-action">
                                    <a class="facebook" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a class="instagram" href="#">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Ms. Dhanashri Dhuri</h4>
                                <span>PHP Developer </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                    <div class="testimonial-area bg-gray pt-115 pb-120">
                        <div class="container">
                            <div class="section-title-2 text-center mb-50">
                                <h2>What Customer Say ?</h2>
                            </div>
                            <div class="testimonial-active owl-carousel">
                                <div class="single-testimonial-3 text-center">
                                    <div class="testimonial-quote-3">
                                        <img src="assets/images/icon-img/testimonial-shape-2.png" alt="">
                                    </div>
                                    <p>Along with being a very well working theme the support is outstanding. I’m glad to have chosen this product to communicate my services. Thank you!</p>
                                    <!-- <div class="client-info-3">
                                        <img src="assets/images/testimonial/client-2.png" alt="">
                                    </div> -->
                                </div>
                                <div class="single-testimonial-3 text-center">
                                    <div class="testimonial-quote-3">
                                        <img src="assets/images/icon-img/testimonial-shape.png" alt="">
                                    </div>
                                    <p>Along with being a very well working theme the support is outstanding. I’m glad to have chosen this product to communicate my services. Thank you!</p>
                                    <!-- <div class="client-info-3">
                                        <img src="assets/images/testimonial/client-2.png" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="brand-logo-area pt-100 pb-100 section-padding-1">
                        <div class="container-fluid">
                            <div class="section-title-2 text-center mb-50">
                                <h2>Supported Farmers</h2>
                            </div>
                            <div class="round-border-1 brand-logo-ptb-about">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="brand-logo-active owl-carousel">
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-1.png" alt="">
                                            </div>
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-2.png" alt="">
                                            </div>
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-3.png" alt="">
                                            </div>
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-4.png" alt="">
                                            </div>
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-5.png" alt="">
                                            </div>
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-6.png" alt="">
                                            </div>
                                            <div class="single-brand-logo">
                                                <img src="assets/images/brand-logo/brand-logo-3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



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