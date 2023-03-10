<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
  
  
    <title><?php echo $title; ?></title>
 <meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $meta; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $meta; ?>">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="<?php echo $title; ?>">
<meta property="twitter:description" content="<?php echo $meta; ?>">
<meta property="twitter:image" content="">



    <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = basename($_SERVER['PHP_SELF'], ".php");

?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/helper.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky  d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <!--Logo Area Start-->
                            <div class="logo-area">
                                <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <!--Logo Area End-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a> </li>
                                        <li><a href="about.php">About</a> </li>
                                        <li><a href="shop.php">Products</a>
                                            <ul class="mega-menu four-column left-0">
                                                <li><a href="#" class="item-link">Plywood</a>
                                                    <ul>
                                                        <li><a href="bwp-plywood.php">BWP Plywood</a></li>
                                                        <li><a href="bwr-plywood.php">BWR Plywood</a></li>
                                                        <li><a href="mr-plywood.php">MR Plywood</a></li>
                                                        <li><a href="plywood.php">Explore All Plywood</a></li>
                                                       
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">All Products</a>
                                                    <ul>
                                                        <li><a href="blockboards.php">Blockboards</a></li>
                                                        <li><a href="flushdoors.php">Flushdoors</a></li>
                                                        <li><a href="veneers.php">Veneers</a></li>
                                                       
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">
                                <ul>
                                    <li><a class="header-search-toggle" href="#"><i class="fa fa-phone"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                 
                                    <li><a href="https://wa.me/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.php">
                                                <img src="assets/images/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.php"><i class="flaticon-shopping-cart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="fa fa-times"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="submenu2">
                                    <li><a href="index.php">Home 01</a></li>
                                    <li><a href="index-2.php">Home 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="submenu2">
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="submenu2">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="compare.php">Compare</a></li>
                                            <li><a href="cart.php">Shopping Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="my-account.php">My Account</a></li>
                                            <li><a href="login-register.php">Login Register</a></li>
                                            <li><a href="faq.php">Frequently Questions</a></li>
                                            <li><a href="404.php">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                        <ul class="submenu2">
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="shop-three-column.php">Shop Three Column</a></li>
                                            <li><a href="shop-four-column.php">Shop Four Column</a></li>
                                            <li><a href="shop-right-sidebar.php">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-nosidebar.php">Shop List No Sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.php">Shop List Left Sidebar</a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar.php">Shop List Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Product Details</a>
                                        <ul class="submenu2">
                                            <li><a href="single-product.php">Single Product</a></li>
                                            <li><a href="single-product-variable.php">Variable Product</a></li>
                                            <li><a href="single-product-affiliate.php">Affiliate Product</a>
                                            </li>
                                            <li><a href="single-product-group.php">Group Product</a></li>
                                            <li><a href="single-product-tabstyle-2.php">Product Left Tab</a>
                                            </li>
                                            <li><a href="single-product-tabstyle-3.php">Product Right Tab</a>
                                            </li>
                                            <li><a href="single-product-gallery-left.php">Product Gallery
                                                    Left</a></li>
                                            <li><a href="single-product-gallery-right.php">Product Gallery
                                                    Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Product Details</a>
                                        <ul class="submenu2">
                                            <li><a href="single-product-sticky-left.php">Product Sticky
                                                    Left</a></li>
                                            <li><a href="single-product-sticky-right.php">Product Sticky
                                                    Right</a></li>
                                            <li><a href="single-product-slider-box.php">Product Box Slider</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="shop.php">New Arrivals</a></li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu2">
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="blog-two-column.php">Blog Two Column</a></li>
                                    <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.php">Blog Details</a></li>
                                    <li><a href="blog-details-gallery.php">Blog Details Gallery</a></li>
                                    <li><a href="blog-details-audio.php">Blog Details Audio</a></li>
                                    <li><a href="blog-details-video.php">Blog Details Video</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.php">Contact</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                    <ul class="submenu2">
                                        <li><a href="login-register.php">Login</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="my-account.php">My account</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)">€ Euro</a></li>
                                        <li><a href="javascript:void(0)">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/en-gb.png" alt=""> English</a></li>
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/de-de.png" alt=""> Germany</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                    <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
        <!-- Offcanvas Menu End -->

        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="fa fa-times"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- main-search start -->