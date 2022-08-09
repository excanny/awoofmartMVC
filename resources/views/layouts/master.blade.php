<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>AwoofMart - Home</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content>
    <meta property="og:type" content>
    <meta property="og:url" content>
    <meta property="og:image" content>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="fonts/favicon.svg')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets1/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/main.css')}}">
</head>

<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-2.jpg')}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-1.jpg')}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-3.jpg')}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-4.jpg')}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-5.jpg')}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-6.jpg')}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets1/images/product-16-7.jpg')}}" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{asset('assets1/images/thumbnail-3.jpg')}}" alt="product image"></div>
                                    <div><img src="{{asset('assets1/images/thumbnail-4.jpg')}}" alt="product image"></div>
                                    <div><img src="{{asset('assets1/images/thumbnail-5.jpg')}}" alt="product image"></div>
                                    <div><img src="{{asset('assets1/images/thumbnail-6.jpg')}}" alt="product image"></div>
                                    <div><img src="{{asset('assets1/images/thumbnail-7.jpg')}}" alt="product image"></div>
                                    <div><img src="{{asset('assets1/images/thumbnail-8.jpg')}}" alt="product image"></div>
                                    <div><img src="{{asset('assets1/images/thumbnail-9.jpg')}}" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a href="" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">₦38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">₦52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">AwoofMart</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-style-5 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">My Account</a></li>
                                <li><a href="">Wishlist</a></li>
                                <li><a href="">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>100% Secure delivery without contacting the courier</li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>Need help? Call Us: <strong class="text-brand">  09030303030</strong></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{asset('assets1/fonts/logo.svg')}}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Milks and Dairies</option>
                                    <option>Wines & Alcohol</option>
                                    <option>Clothing & Beauty</option>
                                    <option>Pet Foods & Toy</option>
                                    <option>Fast food</option>
                                    <option>Baking material</option>
                                    <option>Vegetables</option>
                                    <option>Fresh Seafood</option>
                                    <option>Noodles & Rice</option>
                                    <option>Ice cream</option>
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>Your Location</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>Arizona</option>
                                            <option>Delaware</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>Hawaii</option>
                                            <option>Indiana</option>
                                            <option>Maryland</option>
                                            <option>Nevada</option>
                                            <option>New Jersey</option>
                                            <option>New Mexico</option>
                                            <option>New York</option>
                                        </select>
                                    </form>
                                </div>
  
                                <div class="header-action-icon-2">
                                    <a href="">
                                        <img class="svgInject" alt="AwoofMart" src="{{asset('assets1/fonts/icon-compare.svg')}}">
                                        <span class="pro-count blue">3</span>
                                    </a>
                                    <a href=""><span class="lable ml-0">Compare</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="">
                                        <img class="svgInject" alt="AwoofMart" src="{{asset('assets1/fonts/icon-heart.svg')}}">
                                        <span class="pro-count blue">6</span>
                                    </a>
                                    <a href=""><span class="lable">Wishlist</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="">
                                        <img alt="AwoofMart" src="{{asset('assets1/fonts/icon-cart.svg')}}">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href=""><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href=""><img alt="AwoofMart" src="{{asset('assets1/images/thumbnail-3.jpg')}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>₦800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href=""><img alt="AwoofMart" src="{{asset('assets1/images/thumbnail-2.jpg')}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>₦3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>₦4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="" class="outline">View cart</a>
                                                <a href="">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                             
                                   
                                <div class="header-action-icon-2">
                                   
                                   @auth  <i class="pro-count blue fi-rs-user-add text-success"></i> <a href="javascript:void"><span class="lable ml-0">Hi, <span class="text-dark"> {{ucfirst(strtolower(auth()->user()->first_name))}}</span> </span></a> @endauth
                                   @guest  <a href="javascript:void"> <i class="fi-rs-user"></i> </a> <a href="javascript:void"><span class="lable ml-0">Account</span></a> @endguest
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            @guest
                                                
                                            <li>
                                                <a href="/login"><i class="fi fi-rs-sign-in mr-10"></i>Login</a>
                                            </li>
                                            <li>
                                                <a href="/register"><i class="fi fi-rs-sign-out mr-10"></i>Register</a>
                                            </li>

                                            @endguest

                                            @auth
                                               
                                                <li>
                                                    <a href=""><i class="fi fi-rs-location-alt mr-10"></i>Orders</a>
                                                </li>
                                            @endauth
                                            
                                           
                                                <li>
                                                    <a href=""><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                                </li>

                                          @auth
                                                    
                                                
                                           
                                            <li>
                                                <a href=""><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                            </li>

                                           
                                                
                                            

                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <i class="fi fi-rs-sign-out mr-10"></i>
                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                      {{ __('Log Out') }} 
                                                    </x-dropdown-link>
                                                </form>
                                                {{-- <a href="/destroy"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a> --}}
                                            </li>

                                            @endauth
                                           
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{asset('assets1/fonts/logo.svg')}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>

                                    @yield('menu-list')

                                </ul>
                        
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img src="{{asset('assets1/fonts/icon-headphone-white.svg')}}" alt="hotline">
                        <p>09030303030<span>24/7 Support Center</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="">
                                    <img alt="AwoofMart" src="{{asset('assets1/fonts/icon-heart.svg')}}">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="AwoofMart" src="{{asset('assets1/fonts/icon-cart.svg')}}">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href=""><img alt="AwoofMart" src="{{asset('assets1/images/thumbnail-3.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>₦800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href=""><img alt="AwoofMart" src="{{asset('assets1/images/thumbnail-4.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>₦3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>₦383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="">View cart</a>
                                            <a href="">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{asset('assets1/fonts/logo.svg')}}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="/">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="">shop</a>
                                <ul class="dropdown">
                                    <li><a href="">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="">Shop List – Right Sidebar</a></li>
                                    <li><a href="">Shop List – Left Sidebar</a></li>
                                    <li><a href="">Shop - Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="">Product – Right Sidebar</a></li>
                                            <li><a href="">Product – Left Sidebar</a></li>
                                            <li><a href="">Product – No sidebar</a></li>
                                            <li><a href="">Product – Vendor Infor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Shop – Filter</a></li>
                                    <li><a href="">Shop – Wishlist</a></li>
                                    <li><a href="">Shop – Cart</a></li>
                                    <li><a href="">Shop – Checkout</a></li>
                                    <li><a href="">Shop – Compare</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Invoice</a>
                                        <ul class="dropdown">
                                            <li><a href="">Shop Invoice 1</a></li>
                                            <li><a href="">Shop Invoice 2</a></li>
                                            <li><a href="">Shop Invoice 3</a></li>
                                            <li><a href="">Shop Invoice 4</a></li>
                                            <li><a href="">Shop Invoice 5</a></li>
                                            <li><a href="">Shop Invoice 6</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Vendors</a>
                                <ul class="dropdown">
                                    <li><a href="">Vendors Grid</a></li>
                                    <li><a href="">Vendors List</a></li>
                                    <li><a href="">Vendor Details 01</a></li>
                                    <li><a href="">Vendor Details 02</a></li>
                                    <li><a href="">Vendor Dashboard</a></li>
                                    <li><a href="">Vendor Guide</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="">Dresses</a></li>
                                            <li><a href="">Blouses & Shirts</a></li>
                                            <li><a href="">Hoodies & Sweatshirts</a></li>
                                            <li><a href="">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Casual Faux Leather</a></li>
                                            <li><a href="">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="">Gaming Laptops</a></li>
                                            <li><a href="">Ultraslim Laptops</a></li>
                                            <li><a href="">Tablets</a></li>
                                            <li><a href="">Laptop Accessories</a></li>
                                            <li><a href="">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="">Blog Category Grid</a></li>
                                    <li><a href="">Blog Category List</a></li>
                                    <li><a href="">Blog Category Big</a></li>
                                    <li><a href="">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="">Left Sidebar</a></li>
                                            <li><a href="">Right Sidebar</a></li>
                                            <li><a href="">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Login</a></li>
                                    <li><a href="">Register</a></li>
                                    <li><a href="">Forgot password</a></li>
                                    <li><a href="">Reset password</a></li>
                                    <li><a href="">Purchase Guide</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Terms of Service</a></li>
                                    <li><a href="">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href=""><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href=""><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="{{asset('assets1/fonts/icon-facebook-white.svg')}}" alt></a>
                    <a href="#"><img src="{{asset('assets1/fonts/icon-twitter-white.svg')}}" alt></a>
                    <a href="#"><img src="{{asset('assets1/fonts/icon-instagram-white.svg')}}" alt></a>
                    <a href="#"><img src="{{asset('assets1/fonts/icon-pinterest-white.svg')}}" alt></a>
                    <a href="#"><img src="{{asset('assets1/fonts/icon-youtube-white.svg')}}" alt></a>
                </div>
                <div class="site-copyright">Copyright 2022 © AwoofMart. All rights reserved. Powered by AliThemes.</div>
            </div>
        </div>
    </div>
    <!--End header-->
    <main class="main">

       @yield('home-slider-and-banners')


        @yield('deals-and-top-products')
      

        <!--End 4 columns-->
    </main>
    <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay home & get your daily <br>
                                    needs from our shop
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">AwoofMart</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address">
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="{{asset('assets1/images/banner-9.png')}}" alt="newsletter">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="{{asset('assets1/fonts/icon-1.svg')}}" alt>
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices</h3>
                                <p>Orders ₦50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="{{asset('assets1/fonts/icon-2.svg')}}" alt>
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="{{asset('assets1/fonts/icon-3.svg')}}" alt>
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="{{asset('assets1/fonts/icon-4.svg')}}" alt>
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="{{asset('assets1/fonts/icon-5.svg')}}" alt>
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="{{asset('assets1/fonts/icon-6.svg')}}" alt>
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="/" class="mb-15"><img src="{{asset('assets1/fonts/logo.svg')}}" alt="logo"></a>
                                <p class="font-lg text-heading">Breaking the barriers</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="{{asset('assets1/fonts/icon-location.svg')}}" alt><strong>Address: </strong> <span>Ilorin</span></li>
                                <li><img src="{{asset('assets1/fonts/icon-contact.svg')}}" alt><strong>Call Us:</strong><span> 09030303030</span></li>
                                <li><img src="{{asset('assets1/fonts/icon-email-2.svg')}}" alt><strong>Email:</strong><span><a href="" class="__cf_email__" data-cfemail="c1b2a0ada4818fa4b2b5efa2aeac"> Send an email</a></span></li>
                                <li><img src="{{asset('assets1/fonts/icon-clock.svg')}}" alt><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help Ticket</a></li>
                            <li><a href="#">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Milk & Flavoured Milk</a></li>
                            <li><a href="#">Butter and Margarine</a></li>
                            <li><a href="#">Eggs Substitutes</a></li>
                            <li><a href="#">Marmalades</a></li>
                            <li><a href="#">Sour Cream and Dips</a></li>
                            <li><a href="#">Tea & Kombucha</a></li>
                            <li><a href="#">Cheese</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp mt-10" data-wow-delay=".5s">
                        <p class="mb-20">Secured Payment Gateways</p>
                        <img class src="{{asset('assets1/images/payment-method.png')}}" alt>
                    </div>
                </div>
        </div></section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2022, <strong class="text-brand">AwoofMart</strong> - Best Prices <br>All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                    <div class="hotline d-lg-inline-flex mr-30">
                        <img src="{{asset('assets1/fonts/phone-call.svg')}}" alt="hotline">
                        <p>090909090<span>Working 8:00 - 22:00</span></p>
                    </div>
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{asset('assets1/fonts/phone-call.svg')}}" alt="hotline">
                        <p>09030303030<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img src="{{asset('assets1/fonts/icon-facebook-white.svg')}}" alt></a>
                        <a href="#"><img src="{{asset('assets1/fonts/icon-twitter-white.svg')}}" alt></a>
                        <a href="#"><img src="{{asset('assets1/fonts/icon-instagram-white.svg')}}" alt></a>
                        <a href="#"><img src="{{asset('assets1/fonts/icon-pinterest-white.svg')}}" alt></a>
                        <a href="#"><img src="{{asset('assets1/fonts/icon-youtube-white.svg')}}" alt></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('assets1/images/loading.gif')}}" alt>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal" id="cityModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="deal" style="background-image: url('assets/imgs/banner/popup-1.png')">
                        <div class="deal-topx">
                            <h6 class="text-brand-2">Welcome to AwoofMart City Shopping</h6>
                        </div>
                        <div class="deal-content detail-info">
                            <h4 class="product-title2"><a class="text-heading">Choose a city to begin shopping</a></h4>
                        </div>
                        <div class="deal-bottom">
        
                            <select class="form-select" id="choosecitytoshop">
                                <option>Select one</option>
                                <option value="Ilorin">Ilorin</option>
                                <option value="Ogbomoso">Ogbomoso</option>
                                <option value="Osogbo">Osogbo</option>
                              </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script data-cfasync="false" src="js/email-decode.min.js')}}"></script><script src="{{asset('assets1/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets1/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets1/js/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets1/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets1/js/slick.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('assets1/js/waypoints.js')}}"></script>
    <script src="{{asset('assets1/js/wow.js')}}"></script>
    <script src="{{asset('assets1/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets1/js/magnific-popup.js')}}"></script>
    <script src="{{asset('assets1/js/select2.min.js')}}"></script>
    <script src="{{asset('assets1/js/counterup.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets1/js/images-loaded.js')}}"></script>
    <script src="{{asset('assets1/js/isotope.js')}}"></script>
    <script src="{{asset('assets1/js/scrollup.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset('assets1/js/main.js')}}"></script>
    <script src="{{asset('assets1/js/shop.js')}}"></script>

    <script>
        //Dynamic City Select
        $('#choosecitytoshop').change(function(){
            var city = $('#choosecitytoshop').val();
                    //alert(city);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:"{{ url('/choosecitytoshop') }}",
                        method:"POST",
                        data:{city:city},
                        beforeSend: function(){
                            //$("#citychangeproc").show();
                        },
                        success:function(data)
                        {
                              //alert(data.url);
                                window.location=data.url;
                              //$('#city_change').load();
                          },
                          error: function(xhr, textStatus, errorThrown) {
                             //code to execute
                              //alert(xhr.responseText);
                          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                      },
                  });
      
                  });
      </script>
</body>

</html>