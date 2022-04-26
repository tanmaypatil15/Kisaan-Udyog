<?php 
// Include the database config file 
require_once 'dbConfig.php'; 
 
// Initialize shopping cart class 
include_once 'cart.class.php'; 
$cart = new Cart; 
 
// If the cart is empty, redirect to the products page 
if($cart->total_items() <= 0){ 
    header("Location: index.php"); 
} 
 
// Get posted data from session 
$postData = !empty($_SESSION['postData'])?$_SESSION['postData']:array(); 
unset($_SESSION['postData']); 
 
// Get status message from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $statusMsgType = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = $db->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // // Validate confirm password
    // if(empty(trim($_POST["confirm_password"]))){
    //     $confirm_password_err = "Please confirm password.";     
    // } else{
    //     $confirm_password = trim($_POST["confirm_password"]);
    //     if(empty($password_err) && ($password != $confirm_password)){
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = $db->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $db->close();
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout</title>
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
    function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
    }
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
                                            <li><a  href="index.php">HOME</a></li>
                                            <li><a  href="about.php">ABOUT US</a></li>
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
            

            <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-title">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout-main-area pt-90 pb-90">
                <div class="container">
                    <div class="customer-zone mb-20">
                        <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a></p>
                        <div class="checkout-login-info">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="row">
                                    <?php if(!empty($statusMsg) && ($statusMsgType == 'success')) {?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                                    </div>
                                    <?php } elseif(!empty($statusMsg) && ($statusMsgType == 'error')) {?>
                                        <div class="col-md-12">
                                            <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
                                        </div>
                                    <?php } ?>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sin-checkout-login <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                            <input type="text" name="username" placeholder="Enter Your User-name or email-address *" class="form-control" value="<?php echo $username; ?>">
                                            <span class="help-block"><?php echo $username_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sin-checkout-login <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                            <input type="password" name="password" placeholder="Enter Your Password *" class="form-control">
                                            <span class="help-block"><?php echo $password_err; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-remember-wrap">
                                    <button class="login" type="submit" value="Login">Login</button>
                                    <!-- <button class="button" type="submit">Login</button> -->
                                    <div class="checkout-login-toggle-btn">
                                        <input type="checkbox">
                                        <label>Remember me</label>
                                    </div>
                                </div>
                                <div class="lost-password">
                                    <a href="password-reset.php">Lost your password?</a>
                                </div>
                            </form>
                            <div class="checkout-login-social">
                                <span>Login with:</span>
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="customer-zone mb-20">
                        <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
                        <div class="checkout-login-info3">
                            <form action="#">
                                <input type="text" placeholder="Coupon code">
                                <input type="submit" value="Apply Coupon">
                            </form>
                        </div>
                    </div>
                    <div class="checkout-wrap pt-30">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="billing-info-wrap mr-50">
                                    <h3>Billing Details</h3>
                                    <form method="post" action="cartAction.php">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label for="first_name">First Name <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="first_name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label for="last_name">Last Name <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="last_name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label for="address">Street Address <abbr class="required" title="required">*</abbr></label>
                                                <input class="billing-address" placeholder="House number and street name" name="address" type="text" value="<?php echo !empty($postData['address'])?$postData['address']:''; ?>" required>
                                                <!-- <input placeholder="Apartment, Suite, Unit etc." type="text" name="address" value="?php echo !empty($postData['address'])?$postData['address']:''; ?>" required> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label for="city">Town / City <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="city" value="<?php echo !empty($postData['city'])?$postData['city']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label for="state">State <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="state" value="<?php echo !empty($postData['state'])?$postData['state']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label for="country">Country <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="country" value="<?php echo !empty($postData['country'])?$postData['country']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label for="postcode">Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="postcode" value="<?php echo !empty($postData['postcode'])?$postData['postcode']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label for="phone">Phone <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="phone" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label for="email">Email Address <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="required" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="checkout-account mb-25">
                                        <input class="checkout-toggle2" type="checkbox">
                                        <span>Create an account?</span>
                                    </div> -->
                                    <!-- <div class="checkout-account-toggle open-toggle2 mb-30">
                                        <label>Email Address</label>
                                        <input placeholder="Password" type="password">
                                    </div> -->
                                    <!-- <div class="checkout-account mt-25">
                                        <input class="checkout-toggle" type="checkbox">
                                        <span>Ship to a different address?</span>
                                    </div>
                                    <div class="different-address open-toggle mt-30">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-20">
                                                    <label>First Name</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-20">
                                                    <label>Last Name</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20">
                                                    <label>Company Name</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-select mb-20">
                                                    <label>Country</label>
                                                    <select>
                                                        <option>Select a country</option>
                                                        <option>Azerbaijan</option>
                                                        <option>Bahamas</option>
                                                        <option>Bahrain</option>
                                                        <option>Bangladesh</option>
                                                        <option>Barbados</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20">
                                                    <label>Street Address</label>
                                                    <input class="billing-address" placeholder="House number and street name" type="text">
                                                    <input placeholder="Apartment, suite, unit etc." type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="billing-info mb-20">
                                                    <label>Town / City</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-20">
                                                    <label>State / County</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-20">
                                                    <label>Postcode / ZIP</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-20">
                                                    <label>Phone</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info mb-20">
                                                    <label>Email Address</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="additional-info-wrap">
                                        <label for="order_notes">Order notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="order_notes" value="<?php echo !empty($postData['order_notes'])?$postData['order_notes']:''; ?>"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="your-order-area">
                                    <h3>Your order</h3>
                                    <div class="your-order-wrap gray-bg-4">
                                        <div class="your-order-info-wrap">
                                            <?php 
                                            if($cart->total_items() > 0){ 
                                                //get cart items from session 
                                                $cartItems = $cart->contents(); 
                                                foreach($cartItems as $item){ 
                                            ?>
                                            <div class="your-order-info">
                                                <ul>
                                                    <li>Product <span>Total</span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-middle">
                                                <ul>
                                                    <li><?php echo $item["name"]; ?><span>(<?php echo $item["qty"]; ?>)</span><span><?php echo '$'.$item["price"]; ?></span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-subtotal">
                                                <ul>
                                                    <li>Subtotal <span><?php echo '$'.$item["subtotal"]; ?></span></li>
                                                </ul>
                                            </div>
                                            <?php } } ?>
                                            <div class="your-order-info order-shipping">
                                                <ul>
                                                    <li>Quantity <p class="badge badge-secondary1 badge-pill1"><?php echo $cart->total_items(); ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-total">
                                                <ul>
                                                    <li>Total <span><?php echo '$'.$cart->total(); ?></span></li>
                                                </ul>
                                            </div>
                                            <a href="index.php" class="btn btn-block btn-info">Add Items</a>
                                        </div>

                                        <div class="payment-method">
                                            <div class="pay-top sin-payment">
                                                <input id="payment_method_1" class="input-radio" type="radio" checked="checked" name="payment_method_1" value="<?php echo !empty($postData['payment_method'])?$postData['payment_method']:''; ?>" required >
                                                <label for="payment_method_1"> Direct Bank Transfer </label>
                                                <div class="payment-box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                                </div>
                                            </div>
                                            <!-- <div class="pay-top sin-payment">
                                                <input id="payment_mode-2" class="input-radio" type="radio" value="<?php echo !empty($postData['payment_mode'])?$postData['payment_mode']:''; ?>" name="payment_method">
                                                <label for="payment_mode-2">Check payments</label>
                                                <div class="payment-box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                                </div>
                                            </div>
                                            <div class="pay-top sin-payment">
                                                <input id="payment_mode-3" class="input-radio" type="radio" value="<?php echo !empty($postData['payment_mode'])?$postData['payment_mode']:''; ?>" name="payment_method">
                                                <label for="payment_mode-3">Cash on delivery </label>
                                                <div class="payment-box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                                </div>
                                            </div>  -->
                                        </div>
                                    </div>
                                    <div class="Place-order mt-40">
                                        <input type="hidden" name="action" value="placeOrder"/>
                                        <input class="btn btn-success btn-lg btn-block" type="submit" name="checkoutSubmit" value="Place Order">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="subscribe-area subscribe-organic-ptb">
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
            </div> -->
            
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