<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 

// include('functions.php');
// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }


// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kisaan Udyog - Online Marketplace</title>
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
        <script>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                
                var userid = $(this).data('id');

                // AJAX request
                $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {userid: userid},
                success: function(response){ 
                    // Add response in Modal body
                    $('.modal-body').html(response);

                    // Display Modal
                    $('#exampleModal').modal('show'); 
                }
                });
                });
                });
        </script>
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
                                            <li><a class="active" href="index.php">HOME</a></li>
                                            <li><a href="about.php">ABOUT US</a></li>
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
                                        <img alt="" src="assets/images/logo/logo.png">
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
                                <img src="images/user_profile.png"  >

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
                        <p>Kisankonnect farmers are advised to follow Good Agriculture Practices (GAP), which ensures that the crops are not produced at the cost of the environment</p>
                        <hr>
                        <div class="header-aside-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li><a href="#">SHOP</a></li>
                                    <li><a href="#">CONTACT US</a></li>
                                    <li><a href="myaccount.php">My Account</a></li>
                                    
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
            
            

            <div class="breadcrumb-area section-padding-2 breadcrumb-ptb-2">
            <div class="container-fluid">
                <div class="breadcrumb-content">
                    <ul>
                        <li>
                            <a href="index.html">Shop </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.html">Vegetables</a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Noise Cancelling Headphones </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area section-padding-2 pb-110">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="product-details-tab">
                            <div class="product-dec-right pro-dec-big-img-slider">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-1.jpg">
                                            <img src="assets/images/product-details/large-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-1.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-2.jpg">
                                            <img src="assets/images/product-details/large-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-2.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-3.jpg">
                                            <img src="assets/images/product-details/large-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-3.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-4.jpg">
                                            <img src="assets/images/product-details/large-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-4.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-2.jpg">
                                            <img src="assets/images/product-details/large-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-2.jpg"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-dec-slider product-dec-left">
                                <div class="product-dec-small active">
                                    <img src="assets/images/product-details/small-1.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-2.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-3.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-4.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="product-details-wrap pro-dec-res-mrg-top">
                            <div class="product-details-content pro-dec-content-left">
                                <div class="pro-dec-next-prev">
                                    <a class="prev" href="#"><i class=" ti-arrow-left "></i></a>
                                    <a href="#"><i class=" ti-view-grid "></i></a>
                                    <a class="next" href="#"><i class=" ti-arrow-right "></i></a>
                                </div>
                                <span>Headphones</span>
                                <h2 class="uppercase">Noise Cancelling Headphones</h2>
                                <div class="pro-dec-info-wrap">
                                    <div class="pro-dec-ratting-wrap">
                                        <div class="pro-dec-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#"> 5 Customer Review</a>
                                    </div>
                                    <div class="pro-dec-stock">
                                        <ul>
                                            <li>Brand: <span>Mango</span></li>
                                            <li class="green">In Stock</li>
                                            <li><i class="fa fa-check-circle-o"></i><span>19 Sold</span> / 40 In Stock</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>$19.99</h3>
                                <div class="product-details-peragraph">
                                    <p>Sed ligula sapien, fermentum id est eget, viverra auctor sem. Vivamus maximus enim vitae urna porta, ut euismod nibh lacinia. Pellentesque at diam sed libero tincidunt feugiat. Morbi efficitur augue leo. Morbi convallis augue viverra purus.</p>
                                </div>
                                <div class="product-details-action-wrap">
                                    <div class="product-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </div>
                                    <div class="product-details-cart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <div class="product-details-wishlist">
                                        <a title="Add to wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="product-details-compare">
                                        <a title="Add to compare" href="#"><i class="fa fa-compress"></i></a>
                                    </div>
                                </div>
                                <div class="product-details-meta">
                                    <span>SKU: N/A</span>
                                    <span class="categories">Categories: <a href="#">Woman</a>, <a href="#">Dress</a>, <a href="#">Style</a>, <a href="#">T-Shirt</a>, <a href="#">Mango</a></span>
                                    <span>Tag: <a href="#">Fashion</a>, <a href="#">Dress</a> </span>
                                    <span>Product ID: <a href="#">274</a></span>
                                </div>
                                <div class="product-details-info">
                                    <a href="#"><i class=" ti-location-pin "></i>Check Store availability</a>
                                    <a href="#"><i class=" ti-shopping-cart "></i>Delivery and Return</a>
                                    <a href="#"><i class="ti-pin"></i>Ask a Question</a>
                                </div>
                                <div class="product-details-social-wrap">
                                    <span>SHARE THIS PRODUCT</span>
                                    <div class="product-details-social">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-dec-content-right">
                                <div class="pro-dec-banner-wrap">
                                    <a href="#"><img src="assets/images/product-details/pro-details-sidebar-1.png" alt=""></a>
                                    <div class="pro-dec-banner-content">
                                        <h4>HELLO SUMMER</h4>
                                        <h2>SALE UP <br> TO 50%</h2>
                                    </div>
                                </div>
                                <div class="sidebar-subscribe-wrap">
                                    <div class="sidebar-subscribe-content text-center">
                                        <i class=" ti-email "></i>
                                        <h5>Join Our Newsletter</h5>
                                        <p>Sale up to 20% off for your next purchase in this month!</p>
                                    </div>
                                    <div class="sidebar-subscribe-form">
                                        <form class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div class="mc-form">
                                                <input class="email" type="email" required="" placeholder=" email address…" name="EMAIL" value="">
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                                </div>
                                                <div class="clear">
                                                    <input class="button" type="submit" name="subscribe" value="Subscribe">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-area section-padding-2 pb-105">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTIONS</a>
                                <a data-toggle="tab" href="#des-details2">ADDITIONAL INFORMATION</a>
                                <a data-toggle="tab" href="#des-details3">Reviews (1)</a>
                                <a data-toggle="tab" href="#des-details4">VENDOR INFO</a>
                                <a data-toggle="tab" href="#des-details5"> ABOUT BRAND</a>
                                <a data-toggle="tab" href="#des-details6">SHIPPING & DELIVERY</a>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <div class="row">
                                            <div class="product-dec-col-38">
                                                <div class="pro-details-banner">
                                                    <a href="#"><img src="assets/images/product-details/pro-details-banner.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="product-dec-col-62">
                                                <div class="product-dec-content">
                                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                                    <div class="product-dec-list-wrap">
                                                        <div class="product-dec-list">
                                                            <ul>
                                                                <li>100% Original Products</li>
                                                                <li>Free Delivery on order above $1199</li>
                                                                <li>Cash on delivery might be available</li>
                                                                <li>Easy 30 days returns and exchanges</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-dec-list">
                                                            <ul>
                                                                <li>Connector Type: K Type Plug</li>
                                                                <li>Machine-wash cold</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Ac dis vestibulum ut primis eleifend at neque at ornare mus nostra non senectus magna natoque porta scelerisque molestie taciti lobortis torquent ullamcorper a ullamcorper. Hac suspendisse varius ut et consectetur eu in nisi vestibulum consectetur ultricies in dictum consectetur eu hendrerit ante tortor sagittis etiam porta scelerisque molestie</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="des-details2" class="tab-pane">
                                    <div class="additional-info">
                                        <ul>
                                            <li><span>Size</span>L, S, XL, XXL</li>
                                            <li><span>Brands</span>Airi, Draven, Mango, Valentino, Zara</li>
                                            <li><span>Color</span> Blue, Brown, Green, Pink, Violet, White</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="des-details3" class="tab-pane ">
                                    <div class="review-wrapper">
                                        <h2>1 review for Sleeve Button Cowl Neck</h2>
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img src="assets/images/product-details/client-1.jpg" alt="">
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-name">
                                                        <h5><span>John Snow</span> - March 14, 2019</h5>
                                                    </div>
                                                    <div class="review-rating">
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ratting-form-wrapper">
                                        <span>Add a Review</span>
                                        <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                        <div class="ratting-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label>Name <span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label>Email <span>*</span></label>
                                                            <input type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="star-box-wrap">
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </div>
                                                            <div class="single-ratting-star">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-20">
                                                            <label>Your Review <span>*</span></label>
                                                            <textarea name="Your Review"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <input type="submit" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="des-details4" class="tab-pane ">
                                    <div class="about-shiping-content">
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci.</p>
                                        <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                    </div>
                                </div>
                                <div id="des-details5" class="tab-pane ">
                                    <div class="pro-dec-brand-wrap">
                                        <div class="row">
                                            <div class="ml-auto mr-auto col-lg-10">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-md-6 col-sm-5">
                                                        <div class="pro-dec-brand-img text-center">
                                                            <img src="assets/images/brand-logo/brand-logo-7.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-6 col-sm-7">
                                                        <div class="pro-dec-brand-content">
                                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="des-details6" class="tab-pane">
                                    <div class="about-shiping-content">
                                        <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                        <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product-area section-padding-2 pb-110">
            <div class="container-fluid">
                <div class="section-title-12 mb-30">
                    <h2>Frequently Bought Together</h2>
                </div>
                <div class="related-product-active owl-carousel">
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-1.jpg" alt="">
                            </a>
                            <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                            <div class="product-price">
                                <span class="new-price">$59.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-2.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                            <div class="product-price">
                                <span class="new-price">$20.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-3.jpg" alt="">
                            </a>
                            <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                            <div class="product-price">
                                <span class="old-price">$59.99</span>
                                <span class="new-price">$35.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-4.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                            <div class="product-price">
                                <span class="new-price">$50.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-5.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                            <div class="product-price">
                                <span class="new-price">$60.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-10.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                            <div class="product-price">
                                <span class="new-price">$60.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product-area section-padding-2 pb-115">
            <div class="container-fluid">
                <div class="section-title-12 mb-30">
                    <h2>RELATED PROUDCTS</h2>
                </div>
                <div class="related-product-active owl-carousel">
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-12.jpg" alt="">
                            </a>
                            <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                            <div class="product-price">
                                <span class="new-price">$59.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-9.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                            <div class="product-price">
                                <span class="new-price">$20.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-8.jpg" alt="">
                            </a>
                            <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                            <div class="product-price">
                                <span class="old-price">$59.99</span>
                                <span class="new-price">$35.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-7.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                            <div class="product-price">
                                <span class="new-price">$50.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-11.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                            <div class="product-price">
                                <span class="new-price">$60.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product-img pro-theme-color-border product-border mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/e-product-img-10.jpg" alt="">
                            </a>
                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                            <div class="product-price">
                                <span class="new-price">$60.00</span>
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
           
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class=" ti-close " aria-hidden="true"></span></button>
                        </div>

                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- ?php                       
                                    $result = $db->query("SELECT * FROM products ORDER BY id ASC LIMIT 10"); 
                                    if($result->num_rows > 0){  
                                    while($row = $result->fetch_assoc()){ 
                                    ?> 

                                    ?php
                                    if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $db = $db->query("select * from products where id=$id", $connection);
                                    while ($row = $result->fetch_assoc()) {
                                    ?> -->

                                    <div class="quickview-slider-active owl-carousel">
                                        <a class="img-popup" href="assets/images/product/<?php echo $img ?>">
                                        <img src="assets/images/product/<?php echo $img ?>" alt=""></a>
                                    </div>
                                    <!-- Thumbnail Large Image End -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-details-content quickview-content-padding">
                                        <h2 class="uppercase"><?php echo $name ?></h2>
                                        <h3><?php echo $price ?></h3>
                                        <div class="product-details-peragraph">
                                            <p><?php echo $desc ?></p>
                                        </div>
                                        
                                        
                                        <div class="product-details-action-wrap">
                                            <div class="product-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                                </div>
                                            </div>
                                            <div class="product-details-cart">
                                               <a title="Add to cart" href="cartAction.php?action=addToCart&id=<?php echo $id ?>">Add to cart</a>
                                            
                                            </div>
                                            <div class="product-details-wishlist">
                                                <a title="Add to wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="product-details-compare">
                                                <a title="Add to compare" href="#"><i class="fa fa-compress"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-details-meta">
                                            <span>SKU: N/A</span>
                                            <span>Categories: <a href="#">Woman</a>, <a href="#">Dress</a>, <a href="#">Style</a>, <a href="#">T-Shirt</a>, <a href="#">Mango</a></span>
                                            <span>Tag: <a href="#">Fashion</a>, <a href="#">Dress</a> </span>
                                            <span>Product ID: <a href="#">274</a></span>
                                        </div>
                                        <div class="product-details-info">
                                            <a href="#"><i class=" ti-location-pin "></i>Check Store availability</a>
                                            <a href="#"><i class=" ti-shopping-cart "></i>Delivery and Return</a>
                                            <a href="contact.html"><i class="ti-pin"></i>Ask a Question</a>
                                        </div>
                                        <div class="product-details-social-wrap">
                                            <span>SHARE THIS PRODUCT</span>
                                            <div class="product-details-social">
                                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ?php
                                    }
                                    }
                                    ?> -->
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
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
            