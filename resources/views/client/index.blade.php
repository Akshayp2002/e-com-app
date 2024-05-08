<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Cartzio - Fashion Store eCommerce Tailwind CSS Landing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Fashion Store eCommerce Tailwind CSS Landing Template" name="description">
        <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, tailwind css, Admin, Landing" name="keywords">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        <!-- TAGLINE START-->
        <div class="tagline bg-slate-900">
            <div class="container relative">                
                <div class="grid grid-cols-1">
                    <div class="text-center">
                        <h6 class="text-white font-medium">Refer a friend & get $50 in credits each 🎉</h6>
                    </div>
                </div>
            </div><!--end container-->
        </div><!--end tagline-->
        <!-- TAGLINE END-->
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky tagline-height">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <div>
                        <img src="assets/images/logo-dark.png" class="h-[22px] inline-block dark:hidden" alt="">
                        <img src="assets/images/logo-white.png" class="h-[22px] hidden dark:inline-block" alt="">
                    </div>
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="dropdown inline-block relative pe-1">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle align-middle inline-flex" type="button">
                            <i data-feather="search" class="size-5"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-5 z-10 md:w-52 w-48 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <div class="relative">
                                <i data-feather="search" class="absolute size-4 top-[9px] end-3"></i>
                                <input type="text" class="h-9 px-3 pe-10 w-full border-0 focus:ring-0 outline-none bg-white dark:bg-slate-900 shadow dark:shadow-gray-800" name="s" id="searchItem" placeholder="Search...">
                            </div>
                        </div>
                    </li>

                    <li class="dropdown inline-block relative ps-0.5">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-orange-500 border border-orange-500 text-white" type="button">
                            <i data-feather="shopping-cart" class="h-4 w-4"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                        <span class="flex items-center">
                                            <img src="assets/images/shop/trendy-shirt.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">T-shirt (M)</span>
                                                <span class="block text-sm text-slate-400">$320 X 2</span>
                                            </span>
                                        </span>

                                        <span class="font-semibold">$640</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                        <span class="flex items-center">
                                            <img src="assets/images/shop/luxurious-bag2.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">Bag</span>
                                                <span class="block text-sm text-slate-400">$50 X 5</span>
                                            </span>
                                        </span>

                                        <span class="font-semibold">$250</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                        <span class="flex items-center">
                                            <img src="assets/images/shop/apple-smart-watch.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">Watch (Men)</span>
                                                <span class="block text-sm text-slate-400">$800 X 1</span>
                                            </span>
                                        </span>

                                        <span class="font-semibold">$800</span>
                                    </a>
                                </li>

                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                                <li class="flex items-center justify-between py-1.5 px-4">
                                    <h6 class="font-semibold mb-0">Total($):</h6>
                                    <h6 class="font-semibold mb-0">$1690</h6>
                                </li>

                                <li class="py-1.5 px-4">
                                    <span class="text-center block">
                                        <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-orange-500 border border-orange-500 text-white">View Cart</a>
                                        <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-orange-500 border border-orange-500 text-white">Checkout</a>
                                    </span>
                                    <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="inline-block ps-0.5">
                        <a href="javascript:void(0)" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-orange-500 text-white">
                            <i data-feather="heart" class="h-4 w-4"></i>
                        </a>
                    </li>
            
                    <li class="dropdown inline-block relative ps-0.5">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-orange-500 bg-orange-500 text-white"><img src="assets/images/client/16.jpg" class="rounded-full" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <p class="text-slate-400 pt-2 px-4">Welcome Jesus!</p>
                                </li>
                                <li>
                                    <p class="flex items-center font-medium py-2 px-4"><i data-feather="dollar-sign" class="h-4 w-4 me-2"></i> Balance: <span class="text-orange-500 ms-2">$ 245.10</span></p>
                                </li>
                                <li>
                                    <a href="user-account.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="user" class="h-4 w-4 me-2"></i>Account</a>
                                </li>
                                <li>
                                    <a href="helpcenter.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="help-circle" class="h-4 w-4 me-2"></i>Helpcenter</a>
                                </li>
                                <li>
                                    <a href="user-setting.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="settings" class="h-4 w-4 me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="login.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-orange-500 dark:hover:text-white"><i data-feather="log-out" class="h-4 w-4 me-2"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Hero</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Fashion One</a></li>
                                <li><a href="index-fashion-two.html" class="sub-menu-item">Fashion Two</a></li>
                                <li><a href="index-fashion-three.html" class="sub-menu-item">Fashion Three</a></li>
                                <li><a href="index-fashion-four.html" class="sub-menu-item">Fashion Four</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Products</a><span class="menu-arrow"></span>

                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Product Features</li>
                                        <li><a href="#!" class="sub-menu-item">Bundle - Upsell</a></li>
                                        <li><a href="#!" class="sub-menu-item">Hot Stock</a></li>
                                        <li><a href="#!" class="sub-menu-item">Sticky Add To Cart</a></li>
                                        <li><a href="#!" class="sub-menu-item">Notify Me (Out Of Stock)</a></li>
                                        <li><a href="#!" class="sub-menu-item">Ask An Expert</a></li>
                                        <li><a href="#!" class="sub-menu-item">Variant Image Grouped</a></li>
                                        <li><a href="#!" class="sub-menu-item">Wishlist</a></li>
                                        <li><a href="#!" class="sub-menu-item">Trust Badge</a></li>
                                        <li><a href="#!" class="sub-menu-item">Delivery Information</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Product Features</li>
                                        <li><a href="#!" class="sub-menu-item">Sold In Last</a></li>
                                        <li><a href="#!" class="sub-menu-item">Color Comparison</a></li>
                                        <li><a href="#!" class="sub-menu-item">Product Swatches</a></li>
                                        <li><a href="#!" class="sub-menu-item">Product Select Options</a></li>
                                        <li><a href="#!" class="sub-menu-item">Pre-Order</a></li>
                                        <li><a href="#!" class="sub-menu-item">Product 3D, AR Models</a></li>
                                        <li><a href="#!" class="sub-menu-item">Terms And Conditions Checkbox</a></li>
                                        <li><a href="#!" class="sub-menu-item">Variant Metafield Description</a></li>
                                        <li><a href="#!" class="sub-menu-item">Variant Metafield Property</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Product Features</li>
                                        <li><a href="#!" class="sub-menu-item">Product Video</a></li>
                                        <li><a href="#!" class="sub-menu-item">Size Chart</a></li>
                                        <li><a href="#!" class="sub-menu-item">Dynamic Checkout</a></li>
                                        <li><a href="#!" class="sub-menu-item">Product Countdown</a></li>
                                        <li><a href="#!" class="sub-menu-item">Custom Content</a></li>
                                        <li><a href="#!" class="sub-menu-item">Custom Options</a></li>
                                        <li><a href="#!" class="sub-menu-item">Product Combo</a></li>
                                        <li><a href="#!" class="sub-menu-item">Product Complementary</a></li>
                                        <li><a href="#!" class="sub-menu-item">Auto Discount</a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Product Features</li>
                                        <li><a href="#!" class="sub-menu-item">Custom Product Tabs</a></li>
                                        <li><a href="#!" class="sub-menu-item">Vertical Product Tab</a></li>
                                        <li><a href="#!" class="sub-menu-item">Horizontal Product Tab</a></li>
                                        <li><a href="#!" class="sub-menu-item">Social Share</a></li>
                                        <li><a href="#!" class="sub-menu-item">Related Products</a></li>
                                        <li><a href="#!" class="sub-menu-item">Recently Viewed Products</a></li>
                                        <li><a href="#!" class="sub-menu-item">Custom Label</a></li>
                                        <li><a href="#!" class="sub-menu-item">Local Pick Up</a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li class="megamenu-head"><img src="assets/images/cta.png" alt=""></li>

                                        <li class="text-center"><a href="#!" class="py-2 px-5 inline-block font-medium tracking-wide align-middle duration-500 text-base text-center bg-orange-500/10 text-orange-500 rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> Shop Now</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Shop </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Shop Grid </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="shop-grid.html" class="sub-menu-item">Shop Grid</a></li>
                                        <li><a href="shop-grid-left-sidebar.html" class="sub-menu-item">Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html" class="sub-menu-item">Grid Right Sidebar</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Shop List </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="shop-list.html" class="sub-menu-item">Shop List</a></li>
                                        <li><a href="shop-list-left-sidebar.html" class="sub-menu-item">List Left Sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html" class="sub-menu-item">List Right Sidebar</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Shop Detail </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="product-detail-one.html" class="sub-menu-item">Product Detail One</a></li>
                                        <li><a href="product-detail-two.html" class="sub-menu-item">Product Detail Two</a></li>
                                        <li><a href="product-detail-three.html" class="sub-menu-item">Product Detail Three</a></li>
                                    </ul>  
                                </li>
                                <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                                <li><a href="our-store.html" class="sub-menu-item">Our Store</a></li>
                                <li><a href="brands.html" class="sub-menu-item">Brands</a></li>
                                <li><a href="compare-product.html" class="sub-menu-item">Compare Product</a></li>
                                <li><a href="recently-viewed-product.html" class="sub-menu-item">Recently Viewed Products</a></li>
                            </ul>
                        </li>
                
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> My Account</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="user-account.html" class="sub-menu-item">User Account</a></li>
                                        <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                        <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                        <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                        <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                        <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                        <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item"> Confirmation</a></li>
                                        <li><a href="email-cart.html" class="sub-menu-item"> Cart</a></li>
                                        <li><a href="email-offers.html" class="sub-menu-item"> Offers</a></li>
                                        <li><a href="email-order-success.html" class="sub-menu-item"> Order Success</a></li>
                                        <li><a href="email-gift-voucher.html" class="sub-menu-item"> Gift Voucher</a></li>
                                        <li><a href="email-reset-password.html" class="sub-menu-item"> Reset Password</a></li>
                                        <li><a href="email-item-review.html" class="sub-menu-item"> Item Review</a></li>
                                    </ul> 
                                </li>
                        
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>

                                <li><a href="career.html" class="sub-menu-item">Career </a></li>
                        
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="login.html" class="sub-menu-item"> Login</a></li>
                                        <li><a href="signup.html" class="sub-menu-item"> Signup</a></li>
                                        <li><a href="forgot-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                        <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                        <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                        <li><a href="error.html" class="sub-menu-item"> 404!</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>  
                                        </li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="sale.html" class="sub-menu-item">Sale</a></li>

                        <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->
        
        <!-- Start Hero -->
        <section class="relative md:flex table w-full items-center md:h-screen py-36 bg-emerald-500/5 bg-[url('../../assets/images/hero/bg3.png')] md:bg-top bg-center bg-no-repeat bg-cover">
            <div class="container relative">
                <div class="grid grid-cols-1 justify-center">
                    <div class="text-center">
                        <span class="uppercase font-semibold text-lg">New Collection</span>
                        <h4 class="md:text-6xl text-4xl md:leading-normal leading-normal font-bold my-3">The Gift Suite</h4>
                        <p class="text-lg">Our latest collection of essential basics.</p>

                        <div class="mt-6">
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-center bg-slate-900 dark:bg-orange-500 text-white rounded-md">Shop Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 justify-center text-center mb-6">
                    <h5 class="font-semibold text-3xl leading-normal mb-4">Shop The Collections</h5>
                    <p class="text-slate-400 max-w-xl mx-auto">Shop the latest products from the most popular collections</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 pt-6 gap-6">
                    <a href="" class="text-center hover:text-orange-500">
                        <img src="assets/images/categories/mens-ware.jpg" class="rounded-full shadow dark:shadow-gray-800" alt="">
                        <span class="text-xl font-medium mt-3 block">Men's Wear</span>
                    </a>

                    <a href="" class="text-center hover:text-orange-500">
                        <img src="assets/images/categories/ladies-ware.jpg" class="rounded-full shadow dark:shadow-gray-800" alt="">
                        <span class="text-xl font-medium mt-3 block">Ladies Wear</span>
                    </a>

                    <a href="" class="text-center hover:text-orange-500">
                        <img src="assets/images/categories/kids-ware.jpg" class="rounded-full shadow dark:shadow-gray-800" alt="">
                        <span class="text-xl font-medium mt-3 block">Kids Wear</span>
                    </a>

                    <a href="" class="text-center hover:text-orange-500">
                        <img src="assets/images/categories/smart-watch.jpg" class="rounded-full shadow dark:shadow-gray-800" alt="">
                        <span class="text-xl font-medium mt-3 block">Smart Watch</span>
                    </a>

                    <a href="" class="text-center hover:text-orange-500">
                        <img src="assets/images/categories/sunglasses.jpg" class="rounded-full shadow dark:shadow-gray-800" alt="">
                        <span class="text-xl font-medium mt-3 block">Sunglasses</span>
                    </a>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 justify-center text-center mb-6">
                    <h5 class="font-semibold text-3xl leading-normal mb-4">New Arrival Products</h5>
                    <p class="text-slate-400 max-w-xl mx-auto">Shop the latest products from the most popular collections</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 pt-6 gap-6">
                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">-40% Off</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Black Print T-Shirt</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/fashion-shoes-sneaker.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Fashion Shoes Sneaker</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/men-white-espadrilles-slip-shoes.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Mens White Slip Shoes</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/luxurious-bag.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Luxurious Bag</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/ladies-1.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Green Top</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/ladies-2.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Onepiece Wear</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/mens-jecket.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Featured</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Mens Brown Jecket</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/sweater-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Sweater T-Shirt</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/trendy-t-shirt2.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Trendy T-shirt</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/men-sun-glasses.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Men Sun Glasses</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/women-s-white-low-heel-shoes.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">-25% Off</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Women White Low Heel Shoes</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/casual-men-shorts.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Featured</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Black Print T-Shirt</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container-fluid relative md:mt-24 mt-16">
                <div class="grid grid-cols-1">
                    <div class="relative overflow-hidden py-24 px-4 md:px-10 bg-orange-600 bg-[url('../../assets/images/hero/bg3.png')] bg-center bg-no-repeat bg-cover">
                        <div class="absolute inset-0 bg-[url('../../assets/images/hero/bg-shape.png')] bg-center bg-no-repeat bg-cover"></div>
                        <div class="grid grid-cols-1 justify-center text-center relative z-1">
                            <h3 class="text-4xl leading-normal tracking-wide font-bold text-white">End of Season Clearance <br> Sale upto 30%</h3>
                            <div id="countdown" class="mt-6">
                                <ul class="count-down list-none inline-block space-x-1">
                                    <li id="days" class="text-[28px] leading-[72px] h-[80px] w-[80px] font-medium rounded-md shadow shadow-gray-100 inline-block text-center text-white"></li>
                                    <li id="hours" class="text-[28px] leading-[72px] h-[80px] w-[80px] font-medium rounded-md shadow shadow-gray-100 inline-block text-center text-white"></li>
                                    <li id="mins" class="text-[28px] leading-[72px] h-[80px] w-[80px] font-medium rounded-md shadow shadow-gray-100 inline-block text-center text-white"></li>
                                    <li id="secs" class="text-[28px] leading-[72px] h-[80px] w-[80px] font-medium rounded-md shadow shadow-gray-100 inline-block text-center text-white"></li>
                                    <li id="end" class="h1"></li>
                                </ul>
                            </div>
                            <div class="mt-4">
                                <a href="sale.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-center bg-white text-orange-500 rounded-md"><i class="mdi mdi-cart-outline"></i> Shop Now</a>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div>
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid items-end md:grid-cols-2 mb-6">
                    <div class="md:text-start text-center">
                        <h5 class="font-semibold text-3xl leading-normal mb-4">Popular Items</h5>
                        <p class="text-slate-400 max-w-xl">Popular items in this week</p>
                    </div>

                    <div class="md:text-end hidden md:block">
                        <a href="shop-grid.html" class="text-slate-400 hover:text-orange-500">See More Items <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 pt-6 gap-6">
                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/luxurious-bag2.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>

                            <ul class="list-none absolute top-[10px] start-4">
                                <li><a href="javascript:void(0)" class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Orange Luxurious Bag</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/smart-watch.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Smart Watch</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/white-sandals-summer-footwear.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">White Sandals</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="assets/images/shop/ladies-skirt-pair.jpg" class="group-hover:scale-110 duration-500" alt="">
    
                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>
    
                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Skirt</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-6">
                    <div class="text-center md:hidden block">
                        <a href="shop-grid.html" class="text-slate-400 hover:text-orange-500">See More Items <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
            <div class="container relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
                                <div class="lg:col-span-3 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="assets/images/logo-light.png" alt="">
                                    </a>
                                    <p class="mt-6 text-gray-300">Upgrade your style with our curated sets. Choose confidence, embrace your unique look.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="dribbble" class="h-4 w-4 align-middle" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="linkedin" class="h-4 w-4 align-middle" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="facebook" class="h-4 w-4 align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="instagram" class="h-4 w-4 align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="twitter" class="h-4 w-4 align-middle" title="twitter"></i></a></li>
                                        <li class="inline"><a href="mailto:support@shreethemes.in" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:text-orange-500 dark:hover:text-orange-500 text-slate-300"><i data-feather="mail" class="h-4 w-4 align-middle" title="email"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                        
                                <div class="lg:col-span-6 md:col-span-12">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Shopping & Clothes</h5>

                                    <div class="grid md:grid-cols-12 grid-cols-1">
                                        <div class="md:col-span-4">
                                            <ul class="list-none footer-list mt-6">
                                                <li><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Men</a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Jackets & Coats </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Jeans </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i>  Loungewear </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Polo shirts </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Shirts</a></li>
                                            </ul>
                                        </div><!--end col-->
                                
                                        <div class="md:col-span-4">
                                            <ul class="list-none footer-list mt-6">
                                                <li><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Shorts </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Suits Swimwear </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> T-shirts </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Tracksuits </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Trousers</a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Shirts</a></li>
                                            </ul>
                                        </div><!--end col-->
                                
                                        <div class="md:col-span-4">
                                            <ul class="list-none footer-list mt-6">
                                                <li><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> My account </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Order History </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Wish List </a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Newsletter</a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Affiliate</a></li>
                                                <li class="mt-[10px]"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Returns</a></li>
                                            </ul>
                                        </div><!--end col-->
                                    </div>
                                </div>
    
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                    <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="my-3">
                                                <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="email" class="ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200 outline-none" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md">Subscribe</button>
                                        </div>
                                    </form>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end col-->
                    </div>
                </div><!--end grid-->

                <div class="grid grid-cols-1">
                    <div class="py-[30px] px-0 border-t border-slate-800">
                        <div class="grid lg:grid-cols-4 md:grid-cols-2">
                            <div class="flex items-center lg:justify-center">
                                <i class="mdi mdi-truck-check-outline align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Free delivery</h6>
                            </div><!--end content-->

                            <div class="flex items-center lg:justify-center">
                                <i class="mdi mdi-archive align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Non-contact shipping</h6>
                            </div><!--end content-->

                            <div class="flex items-center lg:justify-center">
                                <i class="mdi mdi-cash-multiple align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Money-back quarantee</h6>
                            </div><!--end content-->

                            <div class="flex items-center lg:justify-center">
                                <i class="mdi mdi-shield-check align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Secure payments</h6>
                            </div><!--end content-->
                        </div><!--end grid-->
                    </div><!--end-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container relative text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="md:text-start text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Cartzio. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                            <li class="inline"><a href=""><img src="assets/images/payments/american-express.jpg" class="max-h-6 rounded inline" title="American Express" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/discover.jpg" class="max-h-6 rounded inline" title="Discover" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/mastercard.jpg" class="max-h-6 rounded inline" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/paypal.jpg" class="max-h-6 rounded inline" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/visa.jpg" class="max-h-6 rounded inline" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -left-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code --> 

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-orange-500 text-white justify-center items-center"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="{{asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>