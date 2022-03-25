<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>awoofMart | Low Prices all the time</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('custom/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/cookieconsent.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/easy-autocomplete.css')}}">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="saleshill-clone-wrap">
        <div class="saleshill-panels-actions-wrap">
            <a class="saleshill-close-btn saleshill-close-panels" href="#">x</a>
        </div>
        <div class="saleshill-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row header-bg">
				<div class="wrap-banner-top" style="height: 48px; width: 1920px; background-color: #76BD17;">
					<!--<figure><img src="assets/images/top_bg.png" alt="awoofMart top banner" width="1920" height="88"></figure>
					 the green color code is 76BD17  -->
				</div>

				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
                                <li class="menu-item" >
                                    <span style="color:RED;font-size:14;font-weight:14">.</span> 
                                </li>							    
                            	<li class="menu-item" ><a title="Information" href="help.html">Intro</a></li>
                            	<li class="menu-item" ><a title="Sellers" href="#sellerList" data-toggle="modal" class="">Track Order</a></li>
                               <!-- <li class="menu-item" ><a title="Sellers near you" href="nearest-seller.html">Sellers Near You</a></li>-->
                            	
								<li class="menu-item" ><a title="Login / Register" href="javascript:void" data-toggle="modal" data-target="#myModal">Login / Register</a></li>
								
								<li class="menu-item">
									<select>
										<option selected="selected">Select City</option>
										<option id="">Ilorin</option>
										<option id="">Osogbo</option>
									</select>
								</li>
								<li class="menu-item menu-prominent" >
									<a id="startbtn" title="Start Shopping" href="#"><span class="prom-text"><i class="fa fa-thumbtack"></i> Start Shopping</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

                <div class="alert alert-danger">
                    <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

                     <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />
                </div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="assets/images/saleslogosmall.png" alt="awoofMart"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="product-list.html" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search for an item...">
                                    <span class="wrap-search-prep">in</span>
                                    <input type="text" name="location" value="All Cities" placeholder="All Cities" readonly="readonly">
									<button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main id="main">
    	<div class="container">
            <div class="wrap-top-banner-3">
                <!--SLIDER-->
                <div class="wrap-main-slide-3">
                    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="true" data-nav="true" data-dots="true" data-autoplay="true">
                        <div class="item-slide">
                            <img src="assets/images/fancyhat-model.jpg" alt="" class="img-slide" width="830" height="500">
                            
                        </div>
                        <div class="item-slide">
                            <img src="assets/images/bikini-model.jpg" alt="" class="img-slide" width="830" height="500">
                            
                        </div>
                        <div class="item-slide">
                            <img src="assets/images/makeup-model.jpg" alt="" class="img-slide" width="830" height="500">
                            
                        </div>
                        <div class="item-slide">
                            <img src="assets/images/fashion-model.jpg" alt="" class="img-slide" width="830" height="500">
                            
                        </div>
                        <div class="item-slide">
                            <img src="assets/images/hair-model.jpg" alt="" class="img-slide" width="830" height="500">
                            
                        </div>
                    </div>
                </div><!-- end of the main slider -->
                <div class="banner-style-vertical">
                    <div class="banner-item breaker">
                        <a href="hot-deals.html" class="link-banner banner-effect-1">
                            <figure><img src="assets/images/sony-HDS.jpg" alt="" width="330" height="245"></figure>
                        </a>
                        <div class="hotdeal1"><i class="fa fa-bolt"></i> Hot Deal</div>
                    </div>
                    
                    <div class="banner-item breaker">
                        <a href="hot-deals.html" class="link-banner banner-effect-1">
                            <figure><img src="assets/images/amazon-echo-1.jpg" alt="" width="330" height="245"></figure>
                        </a>
                        <div class="hotdeal2"><i class="fa fa-bolt"></i> Hot Deal</div>
                    </div>
                    
                </div>
            </div>

		</div><!--end container-->
        
		<div class="container">
        <div class="wrap-show-advance-info-box style-1"><h3 class="title-box">Feature Products</h3></div>
            
        <!--PRODUCT IMAGES-->
			<div class="wrap-show-advance-info-box style-1">
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/puma.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name">
								<span>the-description</span>
							</a>
							<!--<div class="wrap-price"><span class="product-price">68.00</span></div>-->
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/liz-earl.jpg" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name">
								<span>the-description</span>
							</a>
							<div class="wrap-price"><ins><p class="product-price">16.00</p></ins> <del><p class="product-price">19.00</p></del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the-description">
								<figure><img src="home_page_features/becca.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name"><span>the-description</span></a>
							<div class="wrap-price"><span class="product-price">25.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/lego-superheros.jpg" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name"><span>the-description</span></a>
							<div class="wrap-price"><ins><p class="product-price">84.99</p></ins> <del><p class="product-price">102.99</p></del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/kettler-bike.jpg" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name"><span>the-description</span></a>
							<div class="wrap-price"><span class="product-price">449.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/balenciaga-trainers.jpg" width="800" height="800" alt="Balenciaga"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name"><span>the-description</span></a>
							<div class="wrap-price"><ins><p class="product-price">368.00</p></ins> <del><p class="product-price">550.00</p></del></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/boots.jpg" width="800" height="800" alt="Knee High Boots"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" title="the description">
							<div class="wrap-price"><span class="product-price">125.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="the seller page" title="the description">
								<figure><img src="home_page_features/armanix.jpg" width="800" height="800" alt="Armani Exchange"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="the seller page" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="the seller page" class="product-name"><span>the-description</span></a>
							<div class="wrap-price"><ins><p class="product-price">159.00</p></ins> <del><p class="product-price">189.00</p></del></div>
						</div>
					</div>

				</div>
			</div>

            
        <!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="home_page_adverts/4318_block2_furn20.jpeg" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="home_page_adverts/4318_block2_furn40.jpeg" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>
            
            <!-- EVENTS/BLOG DISPLAY  -->
      
            <div class="wrap-show-advance-info-box style-1"><h3 class="title-box">Lates Events/Blog</h3></div>
            
            <div class="wrap-banner style-triple-default">
            	<div class="wrap-banner style-event-default slide-carousel owl-carousel style-nav-1 equal-container" data-items="3" data-loop="false" data-nav="true" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"3"}}'>

				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/4418_block8_bonfire.jpeg" alt="" width="386" height="190"></figure>
					</a>
                    <div class="event-box-content">
                  	<div class="event-box-title">
                  		<a href="#">Introducing The New Dyson</a>
                    </div>
                    <div class="event-box-text">
                    You have to see to believe 
                    
                    </div>
                    <div class="btn-box">
                    <a href="#" class="btn btn-default event-btn" role="button" style="background-color:#992c31; color: #ffffff;">Visit us</a>
                    </div>
                    
                  </div>
                  
				</div>
                
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/4418_block9_bushtvs.jpeg" alt="" width="386" height="190"></figure>
					</a>
                    <div class="event-box-content">
                  	<div class="event-box-title">
                  		<a href="#">Television Redefined</a>
                    </div>
                    <div class="event-box-text">
                   The new Bush 4K Television ...
                    </div>
                    <div class="btn-box">
                    <a href="#" class="btn btn-default event-btn" role="button" style="background-color:#03285D; color: #ffffff;">Get Mesmerised</a>
                    </div>
                  </div>
                  
				</div>
                
                <div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/3218_block11_toyoffers.jpeg" alt="" width="386" height="190"></figure>
					</a>
                    <div class="event-box-content">
                  	<div class="event-box-title">
                  		<a href="#">Legoland Builders Show</a>
                    </div>
                    <div class="event-box-text">
                    Visit the new legoland builders... 
                    </div>
                    <div class="btn-box">
                    <a href="#" class="btn btn-default event-btn" role="button" style="background-color:#04592A; color: #ffffff;">Find out more</a>
                    </div>
                    
                  </div>
                  
				</div>
                
                <div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="home_page_adverts/4418_block10_diwali.jpeg" alt="" width="386" height="190"></figure>
					</a>
                    <div class="event-box-content">
                  	<div class="event-box-title">
                  		<a href="album.html">Diwali Sales</a>
                    </div>
                    <div class="event-box-text">
                    Celebrate the colours ... 
                    </div>
                    <div class="btn-box">
                    <a href="#" class="btn btn-default event-btn" role="button" style="background-color:#992c31; color: #ffffff;">Expeience it</a>
                    </div>
                    
                  </div>
                  
				</div>
                
                
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/4318_block13_google_v02.jpeg" alt="" width="386" height="190"></figure>
					</a>
                    <div class="event-box-content">
                  	<div class="event-box-title">
                  		<a href="album.html">The New Google AI</a>
                    </div>
                    <div class="event-box-text">
                    Synchronising just got better ... 
                    </div>
                    <div class="btn-box">
                    <a href="#" class="btn btn-default event-btn" role="button" style="background-color:#992c31; color: #ffffff;">Visit us</a>
                    </div>
                    
                  </div>
                  
				</div>
                <div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/4418_block11_winter.jpeg" alt="" width="386" height="190"></figure>
					</a>
                    <div class="event-box-content">
                  	<div class="event-box-title">
                  		<a href="album.html">Winter Sale Event</a>
                    </div>
                    <div class="event-box-text">
                    Join Matalan to usher the winter in ... 
                    </div>
                    <div class="btn-box">
                    <a href="#" class="btn btn-default event-btn" role="button" style="background-color:#4467F7; color: #ffffff;">Learn more</a>
                    </div>
                    
                  </div>
                  
				</div>
                </div>
			</div>
            
            <!-- Subscribe to our email -->
            
            <div class="wrap-banner subscribe-ads">
            	<div class="col-sm-12 subscribe-ads-box">
                  <div class="row">
                  	<div class="col-sm-6 ads-box-text">
                       <h3 class="title"><i class="fa fa-envelope"></i> Subscribe for offers in your inbox</h3>
                    </div>
                    <div class="col-sm-6 subs-form-col">
                      <form action="#" class="subs-form" id="subs-form">
				  		<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
				  		<button class="btn-submit">Subscribe</button>
						</form>
                    </div>
                  </div>
                </div>
            </div>

			<!--Adverts-->
			<div class="wrap-show-advance-info-box style-1">
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="home_page_adverts/spa-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				
			</div>
		
		</div>

	</main>

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<!--<div class="wrap-function-info">
				<div class="container seller-bar">
					<h4><a href="nearest-seller.html">Find your nearest awoofMart Registered Seller <i class="fa fa-search"></i></a></h4>
				</div>
			</div>-->
			<!--End Seller Search-->
          <!--  <div class="container">
            	<div class="row writeup">
                	
                </div>
            </div>-->
            <!-- End write up -->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item">
									<h3 class="item-header"> About awoofMart</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="about_us.html" class="link-term">About Us</a></li>
												<li class="menu-item"><a href="contact_us.html" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="using-saleshill.html" class="link-term">Using awoofMart</a></li>
												<li class="menu-item"><a href="investors.html" class="link-term">Investors</a></li>
												<li class="menu-item"><a href="careers.html" class="link-term">Career</a></li>
												<li class="menu-item"><a href="privacy_policy.html" class="link-term">Cookies Policy</a></li>
												<li class="menu-item"><a href="faq.html" class="link-term">FAQ</a></li>

											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item">
									<h3 class="item-header"> Customer Service</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="help.html" class="link-term">Help center</a></li>
												<li class="menu-item"><a href="buyer_login.html" class="link-term">Buyer Login/Registration</a></li>
												<li class="menu-item"><a href="track_order.html" class="link-term">Track Order</a></li>
												<li class="menu-item"><a href="pick_up_centers.html" class="link-term">Pickup Points</a></li>
												<li class="menu-item"><a href="seller_login.html" class="link-term">Seller Login/Register</a></li>
												<li class="menu-item"><a href="post_adverts.html" class="link-term">Post Adverts</a></li>
												<li class="menu-item"><a href="post_sponsorships.html" class="link-term">Products Sponsorships</a></li>
												<li class="menu-item"><a href="logistics.html" class="link-term">Logistics</a></li>
												<li class="menu-item"><a href="resolution_center.html" class="link-term">Resolution Center</a></li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item">
									<h3 class="item-header"> Information</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="news.html" class="link-term">News</a></li>
												<li class="menu-item"><a href="events.html" class="link-term">Events</a></li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item">
									<h3 class="item-header"> General</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
                                                <li class="menu-item"><a href="downloads.html" class="link-term">Android App</a></li>
                                                  <li class="menu-item"><a href="downloads.html" class="link-term">IOS App</a></li>
                                                  <li class="menu-item"><a href="downloads.html" class="link-term">Windows App</a></li>
                                                  <li class="menu-item"><a href="terms.html" class="link-term">Terms & Conditions</a></li>
                                                  <li class="menu-item"><a href="privacy.html" class="link-term">Privacy Policy</a></li>
												  <li class="menu-item"><a href="privacy_policy.html" class="link-term">Cookies Policy</a></li>
												  <li class="menu-item"><a href="return_policy.html" class="link-term">Return Policy</a></li>  
                                                </ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>

					</div>
				</div>

			</div>
            <!-- End Footer Links -->
            
			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2019 <a href="index.html" class="link-to-home">awoofMart</a>. All rights reserved. &nbsp;&nbsp;&nbsp;<a href="https://www.khojodpay.com" target="_blank">Powered by Khojodpay</a></p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav social-network">
							<ul>
								<li class="menu-item"><a href="#" class="link-term" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
								<li class="menu-item"><a href="#" class="link-term" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
								<li class="menu-item"><a href="#" class="link-term" title="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
    
	<button type="button" id="popup" class="feedback-button" data-toggle="modal" data-target="#feedback-main" ><i class="fa fa-caret-right"></i> Feedback</button>
   <!-- Modal -->
	<div class="modal fade" id="feedback-main" tabindex="-1" role="dialog" aria-labelledby="feedbackLabel">
  <div class="modal-dialog" role="document">
  <form> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="feedbackLabel">Customer Feedback</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for your feedback - which will help us improve our website.</p>
        <p>To get a response, you can use the <a href="contact-us.html">Contact Form</a> to send us a message.</p>
        <h5><b>Rate your experience on our website</b></h5>
  
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
		
		<div class="feedback-box">
        	<label for="feedback-option">What is your feedback regarding?</label>
            <select class="feedback-option" required>
            	<option value="">Please choose and option...</option>
            	<option value="1">Having a problem</option>
                <option value="2">Suggestion</option>
                <option value="2">Compliment</option>
             </select>
             
             
             <label for="feedback-text">Please leave your feedbak here</label>
             <textarea id="feedback-text" class="" name="feedback-text" maxlength="1000" required></textarea>
                
        </div>
       
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="submit-feedback" class="btn btn-primary">Send feedback</button>
      </div>
    </div>
    </form>
  </div>
</div>
	
    <!-- Sellers List Modal -->
    
	<div aria-hidden="true" aria-labelledby="sellersListLabel" role="dialog" tabindex="-1" id="sellerList" class="modal fade" style="display: none;">
	<div class="modal-dialog">
    	<div class="modal-content">
         	
        	<div class="modal-body">
            	<form role="form" class="form-horizontal">
                	<div class="form-group has-feedback">
                    	
                        	<div class="col-lg-12">
                            	<input type="text" placeholder="Search Sellers & Merchants on awoofMart" id="inputSeller" class="form-control" >
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                    </div>
				</form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
  
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Login / Register</h4>
		</div>
		<div class="modal-body">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Login</a></li>
				<li><a data-toggle="tab" href="#menu1">Register</a></li>
			  </ul>
			  
			  <div class="tab-content">
				<div id="home" class="tab-pane fade in active m-5">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="form-group">
						  <label for="email">Email address:</label>
						  <input class="form-control" type="email" name="email" :value="old('email')" required autofocus>
						</div> 
						<div class="form-group">
						  <label for="pwd">Password:</label>
						  <input type="password" class="form-control" name="password" required autocomplete="current-password" >
						</div>
						{{-- <div class="checkbox">
						  <label><input type="checkbox"> Remember me</label>
						</div> --}}
						<div class="row form-group">
							<div class="col">
								<button type="submit" class="btn btn-default">Login</button>
							</div>
						</div>
						
					  </form>
				</div>
				<div id="menu1" class="tab-pane fade">
                    <form method="POST" action="{{ route('register') }}" novalidate>
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name">First Name:</label>
									<input type="text" class="form-control" name="firstname" :value="old('firstname')" required autofocus >
								  </div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name">Last Name:</label>
									<input type="text" class="form-control" name="lastname" :value="old('lastname')" required >
								  </div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="email">Email address:</label>
									<input type="email" class="form-control" name="email" :value="old('email')" required>
								  </div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="phone">Phone Number:</label>
									<input type="number" class="form-control" name="phone" :value="old('phone')" required>
								  </div>
							</div>
						</div>
                        <div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label for="address">Address:</label>
									<input type="text" class="form-control" name="address" :value="old('address')" required>
								  </div>
							</div>
						</div>
						
                        <div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label for="city">City:</label> <br>
									<select name="city" class="form-control" id="city" required style="width:100%; background:red">
										<option value="">Select one</option>
										@foreach($cities as $city)
										<option value="{{$city->fcity_name}}">{{$city->fcity_name}}</option>
										@endforeach
									</select>
							    </div>
							</div>
							<div class="col-lg-4">
								<label for="area">Area:</label>
								<select class="form-control" name="area" id="area" required>
							
								</select>
							</div>
							<div class="col-lg-4">
								<label for="city">Landmark:</label>
								<select name="landmark" id="landmark" class="form-control" required>
									
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input class="form-control" type="password"
									name="password"
									required autocomplete="new-password">
								  </div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="pwd">Confirm Password:</label>
									<input type="password" class="form-control" type="password"
									name="password_confirmation" required>
								</div>
							</div>
						</div>
                        
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
				</div>
			  </div>
		</div>
	  </div>
  
	</div>
  </div>


<a href="#" class="back-to-top" style="display: inline;">
<i class="fa fa-arrow-circle-up"></i></a>

	<script src='{{asset('assets/js/jquery-1.12.4.min.js?ver=1.12.4') }}'></script>
	<script src='{{asset('assets/js/jquery-ui-1.12.4.min.js?ver=1.12.4') }}'></script>
	<script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{asset('assets/js/functions.js') }}"></script>
    <script src="{{asset('assets/js/cookieconsent.min.js') }}"></script>
   <!-- <script src="assets/js/function-cookie.js"></script>-->
    <script src="{{asset('assets/js/jquery.easy-autocomplete.js') }}"></script>
    <script src="{{asset('assets/js/functions2.js') }}"></script>



	<script>
		//Dynamic Area Select
		$('#city').change(function(){
			var city = $('#city').val();
				//alert(city);
				if(city != '')
				{
					 //alert("Hi");
					 $.ajax({
						 url:"{{ url('/getareas') }}",
						 method:"POST",
						 data:{city:city},
						 dataType:"json",
						 success:function(data)
						 {
							//alert(data.areas);
							//console.log(data.areas);
							//$('#area').html(data.areas);
							console.log("yes");
						},
						error: function(xhr, textStatus, errorThrown) {
						//code to execut
						alert(xhr.responseText);
						//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
					},
				});
	
				//	}
				// else
				// {
				// 	$('#areaname').html('<option value="">Select Area</option>');
				// }
	
			});
		</script>
	
	
		<script>
		//Dynamic Area Select
		$('#area').change(function(){
			var area = $('#area').val();
				//alert(area);
				if(area != '')
				{
					 //alert("Hi");
					 $.ajax({
						 url:"{{ url('/getlandmarks') }}",
						 method:"POST",
						 data:{area:area},
						 dataType:"json",
						 success:function(data)
						 {
							//alert(data.landmarks);
							$('#landmark').html(data.landmarks);
						},
						error: function(xhr, textStatus, errorThrown) {
						//code to execut
						alert(xhr.responseText);
						//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
					},
				});
	
					}
				// else
				// {
				// 	$('#areaname').html('<option value="">Select Area</option>');
				// }
	
			});
		</script>


</body>
</html>