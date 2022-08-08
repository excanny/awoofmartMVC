@extends('layouts.master')

@section('menu-list')
                            
        <li class="hot-deals">
            
            <a class="active" href="/">Home</a>
            
        </li>
        
        <li>
            <a href="">About Us</a>
        </li>
        
        <li>
            <a href="javascript:void" class="btn btn-xs btn-shop-now" data-bs-toggle="modal" data-bs-target="#cityModal">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
        </li>

 @endsection

 @section('home-slider-and-banners')
 <section class="home-slider position-relative mb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 d-none d-lg-flex">
                <div class="categories-dropdown-wrap style-2 font-heading mt-30">
                    <div class="d-flex categori-dropdown-inner">
                        <img src="https://dummyimage.com/540x945/ddead1/fff.png" alt="" class="img-rounded">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-5 dot-style-1 dot-style-1-position-2">
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('assets1/images/black-man-shopping.jpg')}})">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40 text-white">
                                    Cool<br>
                                    sweet deals
                                </h1>
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('assets1/images/excited-african-woman-holding-shopping-bags-mobile-phone_171337-14029.webp')}})">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40 text-white">
                                    Amazing<br>
                                    Cool products
                                </h1>
                                
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="banner-img style-4 mt-30">
                            <img src="https://dummyimage.com/760x596/E3EBC6/fff.png" alt>
                         
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="banner-img style-5 mt-5 mt-md-30">
                            <img src="https://dummyimage.com/571x345/EDE7D9/fff.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-cat mx-2">
    <div class="container-fluid wow animate__animated animate__fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                <div class="mx-1">
                                    <div class="banner-img style-6 wow animate__animated animate__fadeInUp featured-cat-height" data-wow-delay="0">
                                        <img src="https://dummyimage.com/756x332/DE669A/fff.png" alt>

                                    </div>
                                </div>
                                <div class="mx-1">
                                    <div class="banner-img style-6 wow animate__animated animate__fadeInUp featured-cat-height" data-wow-delay="0">
                                        <img src="https://dummyimage.com/756x332/DE669A/fff.png" alt>
                                    </div>
                                </div>
                                <div class="mx-1">
                                    <div class="banner-img style-6 wow animate__animated animate__fadeInUp featured-cat-height" data-wow-delay="0">
                                        <img src="https://dummyimage.com/756x332/DE669A/fff.png" alt>
                                       
                                    </div>
                                </div>
                                <div class="mx-1">
                                    <div class="banner-img style-6 wow animate__animated animate__fadeInUp featured-cat-height" data-wow-delay="0">
                                        <img src="https://dummyimage.com/756x332/DE669A/fff.png" alt>
                                        
                                    </div>
                                </div>
                                <div class="mx-1">
                                    <div class="banner-img style-6 wow animate__animated animate__fadeInUp featured-cat-height" data-wow-delay="0">
                                        <img src="https://dummyimage.com/756x332/DE669A/fff.png" alt>
                                        
                                    </div>
                                </div>
                                <div class="mx-1">
                                    <div class="banner-img style-6 wow animate__animated animate__fadeInUp featured-cat-height" data-wow-delay="0">
                                        <img src="https://dummyimage.com/756x332/DE669A/fff.png" alt>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--End product Wrap-->
                        </div>
                    </div>
                    <!--End tab-pane-->
                    <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Save 15%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-15-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-15-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">Save 35%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Encore Seafoods Stuffed Alaskan</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-12-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-12-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Gorton’s Beer Battered Fish </a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-13-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-13-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Haagen-Dazs Caramel Cone Ice</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-14-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-14-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Save 15%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Italian-Style Chicken Meatball</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Save 15%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Perdue Simply Smart Organics Gluten Free</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">Save 35%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Seeds of Change Organic Quinoa</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                                <img class="hover-img" src="m{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Signature Wood-Fired Mushroom</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-13-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-13-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Simply Lemonade with Raspberry Juice</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{asset('assets1/images/product-14-1.jpg')}}" alt>
                                                <img class="hover-img" src="{{asset('assets1/images/product-14-2.jpg')}}" alt>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href=""><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href=""><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Save 15%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Hodo Foods</a>
                                        </div>
                                        <h2><a href="">Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>₦238.85 </span>
                                            <span class="old-price">₦245.8</span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>
<!--End hero slider-->

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <img src="https://dummyimage.com/756x332/FEEFEA/fff.png" alt>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <img src="https://dummyimage.com/756x332/EAEEFE/fff.png" alt>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <img src="https://dummyimage.com/756x332/FEF4D5/fff.png" alt>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    <img src="https://dummyimage.com/756x332/C4F5DF/fff.png" alt>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End 4 banners-->
 @endsection