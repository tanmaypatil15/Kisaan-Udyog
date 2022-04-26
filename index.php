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
        <title>Kisaan Udyog - The Online Marketplace</title>
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
            <header class="header-area section-padding-1 transparent-bar">
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
            <div class="slider-area">
                <div class="single-main-slider bg-img slider-height-9 align-items-center custom-d-flex" style="background-image:url(assets/images/slider/slider1.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-hero-content-7 text-center">
                                    <div class="organic-leaf-img wow fadeInDown">
                                        <img src="assets/images/slider/pattern-1.png" alt="leaf">
                                    </div>
                                    <h1 class="wow fadeInLeft">Eat clean and green. Eat Organic.</h1>
                                    <div class="btn-style-3 btn-hover-2 wow fadeInUp">
                                        <a class=" bs3-white-text bs3-green3-bg bs3-ptb-4 bs3-border-radius hover-text-white ptb-3-black-hover" href="product-details.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-area section-padding-8 pb-65 pt-155">
                <div class="container-fluid">
                    <div class="organic-about-wrap ">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="organic-about-img tilt-active">
                                    <img src="assets/images/banner/about-1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="organic-about-content">
                                    <h2>Fresh Food, Simply Deliciuos</h2>
                                    <img src="assets/images/icon-img/oganic-leaf.png" alt="">
                                    <p>Kisaan Udyog is a farmer producer company. It has an integrated farming system, which brings the goodness of fresh, hygienic fruits and vegetables, sourced locally from over 500+ farms, and safely delivers the fresh produce from the farms to your doorstep, at fair prices.

    Our farmers combine traditional farming methodology and modern technology structures to grow the best quality produce that promises taste and health in each bite!</p>
    <!--
                                    <div class="video-btn-3">
                                        <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><i class="fa fa-play"></i></a>
                                    </div>
    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-area section-padding-1 organic-product-ptb-1 bg-img" style="background-image:url(assets/images/bg/organic-bg-1.png);">
                <div class="container-fluid">
                    <div class="section-title-11 mb-60 text-center">
                        <h2>New organic products</h2>
                        <img src="assets/images/icon-img/oganic-leaf.png" alt="">
                    </div>
                                
                        <div class="row">          
                                <?php 
                                    // Get products from database 
                                    $result = $db->query("SELECT * FROM products ORDER BY id ASC LIMIT 8"); 
                                    if($result->num_rows > 0){  
                                        while($row = $result->fetch_assoc()){ 
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $price=$row['price'];
                                            $img = $row['img'];
                                    ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">    
                                    <div class="product-img pro-img-border-radius pro-border-none product-img-zoom mb-15">
                                        <form method="post" action="index.php?action=add&pid=<?php echo $row["id"]; ?>">
                                        
                                            <a href=""><img src="assets/images/product/<?php echo $img; ?>"></a>
                                            <div class="product-action product-action-position-1 pro-action-green3">
                                                
                                                <a title="Add to Cart" href="cartAction.php?action=addToCart&id=<?php echo $id; ?>"><i class="fa fa-cart-arrow-down"></i></a>
                                                <a data-toggle="modal" data-id='".$id."' class='userinfo' data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                            </div>
                                    </div>
                                    
                                    <div class="product-content product-content-green3">
                                    <div class="product-title"><?php echo $name; ?></div>
                                    <div class="product-price"><?php echo "₹".$row["price"]; ?></div>
                                    </div>
                                    </form>
                                </div>
                            </div>                                   
                                <?php
                                    }
                                    } else {
                                    echo "No Records.";
                                    }
                                    ?>
                    
                        </div>
                </div>
            </div>
            
            <div class="organic-categories-area section-padding-3">
                <div class="container-fluid">
                    <div class="section-title-11 mb-60 text-center">
                        <h2>Popular Categories</h2>
                        <img src="assets/images/icon-img/oganic-leaf.png" alt="">
                    </div>
                    <div class="organic-categories-active owl-carousel">
                        <div class="organic-categories-wrap text-center">
                            <a href="#"><img src="assets/images/categories/organic-categories-1.png" alt=""></a>
                            <h3><a href="#">Onions &amp; Potatoes</a></h3>
                        </div>
                        <div class="organic-categories-wrap text-center">
                            <a href="#"><img src="assets/images/categories/organic-categories-2.png" alt=""></a>
                            <h3><a href="#">Salads</a></h3>
                        </div>
                        <div class="organic-categories-wrap text-center">
                            <a href="#"><img src="assets/images/categories/organic-categories-3.png" alt=""></a>
                            <h3><a href="#">Vegetables</a></h3>
                        </div>
                        <div class="organic-categories-wrap text-center">
                            <a href="#"><img src="assets/images/categories/organic-categories-4.png" alt=""></a>
                            <h3><a href="#">Lettuce</a></h3>
                        </div>
                        <div class="organic-categories-wrap text-center">
                            <a href="#"><img src="assets/images/categories/organic-categories-5.png" alt=""></a>
                            <h3><a href="#">Fruits</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="deal-area section-padding-1 bg-img organic-product-ptb-2" style="background-image:url(assets/images/bg/organic-bg-4.png);">
                <div class="container-fluid">
                    <div class="section-title-11 mb-60 text-center">
                        <h2>Hurry up! Hot deal this week</h2>
                        <img src="assets/images/icon-img/oganic-leaf.png" alt="">
                    </div>
                    <div class="deal-slider-active-2 owl-carousel">     
                            <?php 
                            // Get items from database 
                            $result = $db->query("SELECT * FROM products ORDER BY id ASC LIMIT 10"); 
                            if($result->num_rows > 0){  
                            while($row = $result->fetch_assoc()){ 
                            ?> 
                        <div class="product-wrap">
                            <div class="product-img pro-img-border-radius pro-border-none product-img-zoom mb-15">
                                <a href="product-details.html"><img src="assets/images/product/<?php echo $row["img"]; ?>" alt=""></a>

                                <div class="product-action product-action-position-1 pro-action-green3">
                                    <a title="Add to Cart"  href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"><i class="fa fa-cart-arrow-down"></i></a>
                                    <a data-toggle="modal" data-id='".$id."' data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                    <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                </div>
                            </div>
                            <div class="product-content product-content-green3">
                                <h4><a href="product-details.html"><?php echo $row["name"]; ?></a></h4>
                                <div class="product-price">
                                    <span class="new-price"><?php echo "₹".$row["price"]; ?></span>
                                </div>
                            </div>
                        </div>
                                <?php
                                }
                                } else {
                                echo "No Records.";
                                }
                                ?>                 
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
            <!--
                    <div class="blog-area pt-105 pb-115 bg-img organic-blog-ptb-1" style="background-image:url(assets/images/bg/organic-bg-3.png);">
                        <div class="container">
                            <div class="section-title-11 mb-60 text-center">
                                <h2>Latest Blog</h2>
                                <img src="assets/images/icon-img/oganic-leaf.png" alt="">
                            </div>
                            <div class="blog-active owl-carousel dot-style-1 dot-style-1-white">
                                <div class="blog-wrap">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/organic-blog-1.jpg" alt="blog"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-category organic-blog-category">
                                            <a href="#">BEAUTY</a>
                                        </div>
                                        <h3 class="organic-blog-title"><a href="blog-details.html">The Best New Auto Curler on the Market</a></h3>
                                        <div class="blog-meta organic-meta">
                                            <ul>
                                                <li><a href="#">19 Dec 2019</a></li>
                                                <li>-</li>
                                                <li>By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <p>I didn’t realize how long it’s been since I shared a hair tutorial or even more....</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/organic-blog-2.jpg" alt="blog"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-category organic-blog-category">
                                            <a href="#">FASHION</a>
                                        </div>
                                        <h3 class="organic-blog-title"><a href="blog-details.html">The Hair Hack I Never Knew I Needed</a></h3>
                                        <div class="blog-meta organic-meta">
                                            <ul>
                                                <li><a href="#">19 Dec 2019 - </a></li>
                                                <li>By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <p>I didn’t realize how long it’s been since I shared a hair tutorial or even more....</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/organic-blog-3.jpg" alt="blog"></a>
                                        <div class="video-btn">
                                            <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-category organic-blog-category">
                                            <a href="#">LIFE STYLE</a>
                                        </div>
                                        <h3 class="organic-blog-title"><a href="blog-details.html">5 Ways To Improve Your Instagram Feed</a></h3>
                                        <div class="blog-meta organic-meta">
                                            <ul>
                                                <li><a href="#">19 Dec 2019 - </a></li>
                                                <li>By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <p>I didn’t realize how long it’s been since I shared a hair tutorial or even more....</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-wrap">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/organic-blog-2.jpg" alt="blog"></a>
                                        <div class="video-btn">
                                            <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-category">
                                            <a href="#">BEAUTY</a>
                                        </div>
                                        <h3><a href="blog-details.html">The Best New Auto Curler on the Market</a></h3>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#">19 Dec 2019 - by Admin</a></li>
                                                <li>By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <p>I didn’t realize how long it’s been since I shared a hair tutorial or even more....</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            -->
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