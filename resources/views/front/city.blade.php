@extends('layouts.master')

@section('menu-list')

    <li class="position-static">
        <a href="javascript:void" class="btn btn-menu-cat">Categories <i class="fi-rs-angle-down"></i></a>
        @include('front.includes.category-menu', ['segment_number' => request()->segment(2)])
    </li>
    <li class="hot-deals"><img src="{{asset('assets1/fonts/icon-hot-white.svg')}}" alt="hot deals"><a href="">Deals</a></li>
    <li>
        <a class="active" href="/">Home </a>
        
    </li>
    <li>
        <a href="/about">About</a>
    </li>
    
    <li>
        <a href="javascript:void" class="text-dark text-italicize">City:  {{ ucfirst(request()->segment(2)) }}</a>  <small class="badge bg-secondary cursor" data-bs-toggle="modal" data-bs-target="#cityModal">change city</small> 
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


<section class="product-tabs section-padding position-relative mt-60">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Popular Products</h3>
        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @if ($popular_products->isEmpty())

                        <p class="text-center">No popular products for this city</p>
                    @else
                        @foreach ($popular_products as $product)
                    
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="">
                                            <img class="default-img" src="{{asset('assets1/images/product-1-1.jpg')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets1/images/product-1-2.jpg')}}" alt="" />
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
                                        <a href="">{{$product->fmerchant_id}}</a>
                                    </div>
                                    <h2><a href="">{{$product->fitem_name}}</a></h2>
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <div class="product-price mt-10">
                                        <span>₦{{$product->fprice}} </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="sold mt-15 mb-15">
                                        <div class="progress mb-5">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="font-xs text-heading"> Sold: 90/120</span>
                                    </div>
                                    <a href="javascript:void" class="btn w-100 hover-up addtocart" data-product_id="{{$product->fproduct_id}}"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                </div>

                            </div>
                        </div>

                        @endforeach

                    @endif
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab one-->
            <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦283333.85</span>
                                        <span class="old-price">₦32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-12-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-12-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦52.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-13-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-13-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦48.85</span>
                                        <span class="old-price">₦52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-14-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-14-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Vegetables</a>
                                </div>
                                <h2><a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦17.85</span>
                                        <span class="old-price">₦19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-15-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-15-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Pet Foods</a>
                                </div>
                                <h2><a href="">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-16-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-16-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦54.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Meats</a>
                                </div>
                                <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦32.85</span>
                                        <span class="old-price">₦33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦35.85</span>
                                        <span class="old-price">₦37.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Coffes</a>
                                </div>
                                <h2><a href="">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cream</a>
                                </div>
                                <h2><a href="">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 50%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Tyson</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦22.85</span>
                                        <span class="old-price">₦24.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab two-->
            <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦28.85</span>
                                        <span class="old-price">₦32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦52.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦48.85</span>
                                        <span class="old-price">₦52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-6-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-6-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Vegetables</a>
                                </div>
                                <h2><a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦17.85</span>
                                        <span class="old-price">₦19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-5-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-5-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Pet Foods</a>
                                </div>
                                <h2><a href="">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-4-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-4-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦54.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-3-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-3-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Meats</a>
                                </div>
                                <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦32.85</span>
                                        <span class="old-price">₦33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-2-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-2-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦35.85</span>
                                        <span class="old-price">₦37.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Coffes</a>
                                </div>
                                <h2><a href="">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-1-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-1-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cream</a>
                                </div>
                                <h2><a href="">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 50%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Tyson</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦22.85</span>
                                        <span class="old-price">₦24.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab three-->
            <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-6-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-6-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦28.85</span>
                                        <span class="old-price">₦32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦52.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦48.85</span>
                                        <span class="old-price">₦52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Vegetables</a>
                                </div>
                                <h2><a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦17.85</span>
                                        <span class="old-price">₦19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-4-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-4-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Pet Foods</a>
                                </div>
                                <h2><a href="">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-3-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-3-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦54.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-2-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-2-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Meats</a>
                                </div>
                                <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦32.85</span>
                                        <span class="old-price">₦33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-1-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-1-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦35.85</span>
                                        <span class="old-price">₦37.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-11-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-11-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Coffes</a>
                                </div>
                                <h2><a href="">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-12-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-12-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cream</a>
                                </div>
                                <h2><a href="">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 50%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Tyson</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦22.85</span>
                                        <span class="old-price">₦24.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab four-->
            <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-12-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-12-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦28.85</span>
                                        <span class="old-price">₦32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-13-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-13-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦52.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-14-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-14-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦48.85</span>
                                        <span class="old-price">₦52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-15-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-15-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Vegetables</a>
                                </div>
                                <h2><a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦17.85</span>
                                        <span class="old-price">₦19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-16-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-16-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Pet Foods</a>
                                </div>
                                <h2><a href="">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-5-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-5-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦54.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Meats</a>
                                </div>
                                <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦32.85</span>
                                        <span class="old-price">₦33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦35.85</span>
                                        <span class="old-price">₦37.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Coffes</a>
                                </div>
                                <h2><a href="">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cream</a>
                                </div>
                                <h2><a href="">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 50%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Tyson</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦22.85</span>
                                        <span class="old-price">₦24.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab five-->
            <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-4-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-4-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦28.85</span>
                                        <span class="old-price">₦32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-6-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-6-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦52.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦48.85</span>
                                        <span class="old-price">₦52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Vegetables</a>
                                </div>
                                <h2><a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦17.85</span>
                                        <span class="old-price">₦19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-5-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-5-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Pet Foods</a>
                                </div>
                                <h2><a href="">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-6-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-6-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦54.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Meats</a>
                                </div>
                                <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦32.85</span>
                                        <span class="old-price">₦33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦35.85</span>
                                        <span class="old-price">₦37.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Coffes</a>
                                </div>
                                <h2><a href="">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cream</a>
                                </div>
                                <h2><a href="">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 50%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Tyson</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦22.85</span>
                                        <span class="old-price">₦24.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab six-->
            <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-5-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-5-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦28.85</span>
                                        <span class="old-price">₦32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-3-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-3-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦52.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦48.85</span>
                                        <span class="old-price">₦52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Vegetables</a>
                                </div>
                                <h2><a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦17.85</span>
                                        <span class="old-price">₦19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Pet Foods</a>
                                </div>
                                <h2><a href="">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-16-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-16-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Hodo Foods</a>
                                </div>
                                <h2><a href="">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦54.85</span>
                                        <span class="old-price">₦55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-7-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-7-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Meats</a>
                                </div>
                                <h2><a href="">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦32.85</span>
                                        <span class="old-price">₦33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-8-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-8-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Snack</a>
                                </div>
                                <h2><a href="">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦35.85</span>
                                        <span class="old-price">₦37.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-9-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-9-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Coffes</a>
                                </div>
                                <h2><a href="">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦23.85</span>
                                        <span class="old-price">₦25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-10-1.jpg')}}" alt>
                                        <img class="hover-img" src="{{asset('assets1/images/product-10-2.jpg')}}" alt>
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href=""><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href=""><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cream</a>
                                </div>
                                <h2><a href="">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 50%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="">Tyson</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₦22.85</span>
                                        <span class="old-price">₦24.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab seven-->
        </div>
        <!--End tab-content-->
    </div>
</section>
<!--Products Tabs-->


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
    
@endsection

@section('deals-and-top-products')

<section class="section-padding pb-5">
    <div class="container">
        <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
            <h3 class>Deals Of The Day</h3>
            <a class="show-all" href="">
                All Deals
                <i class="fi-rs-angle-right"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <div class="product-img-action-wrap">
                        <div class="product-img">
                            <a href="">
                                <img src="https://dummyimage.com/568x503/EFEEF0/fff.png" alt>
                            </a>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <div class="deals-countdown-wrap">
                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                        </div>
                        <div class="deals-content">
                            <h2><a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="">AwoofMartFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>₦32.85</span>
                                    <span class="old-price">₦33.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="product-img-action-wrap">
                        <div class="product-img">
                            <a href="">
                                <img src="https://dummyimage.com/568x503/EFEEF0/fff.png" alt>
                            </a>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <div class="deals-countdown-wrap">
                            <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                        </div>
                        <div class="deals-content">
                            <h2><a href="">Perdue Simply Smart Organics Gluten Free</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="">Old El Paso</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>₦24.85</span>
                                    <span class="old-price">₦26.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="product-img-action-wrap">
                        <div class="product-img">
                            <a href="">
                                <img src="https://dummyimage.com/568x503/EFEEF0/fff.png" alt>
                            </a>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <div class="deals-countdown-wrap">
                            <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                        </div>
                        <div class="deals-content">
                            <h2><a href="">Signature Wood-Fired Mushroom and Caramelized</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="">Progresso</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>₦12.85</span>
                                    <span class="old-price">₦13.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="product-img-action-wrap">
                        <div class="product-img">
                            <a href="">
                                <img src="https://dummyimage.com/568x503/EFEEF0/fff.png" alt>
                            </a>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <div class="deals-countdown-wrap">
                            <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                        </div>
                        <div class="deals-content">
                            <h2><a href="">Simply Lemonade with Raspberry Juice</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="">Yoplait</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>₦15.85</span>
                                    <span class="old-price">₦16.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href=""><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Deals-->
<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <h4 class="section-title style-1 mb-30 animated animated">Top Selling</h4>
                <div class="product-list-small animated animated">
                    @foreach ($top_selling as $product)
                        
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">{{$product->fproduct_id}}</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>

                    @endforeach
                  
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <h4 class="section-title style-1 mb-30 animated animated">Trending Products</h4>
                <div class="product-list-small animated animated">
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">Organic Cage-Free Grade A Large Brown Eggs</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">Seeds of Change Organic Quinoa, Brown, & Red Rice</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">Naturally Flavored Cinnamon Vanilla Light Roast Coffee</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                <div class="product-list-small animated animated">
                    @foreach ($recent_products as $product)
                        
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="">{{ucwords($product->fitem_name)}}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>{{$product->fprice}}</span>
                                    <span class="old-price">₦33.8</span>
                                </div>
                            </div>
                        </article>
                    
                    @endforeach
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <h4 class="section-title style-1 mb-30 animated animated">Top Rated</h4>
                <div class="product-list-small animated animated">
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">Foster Farms Takeout Crispy Classic Buffalo Wings</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href=""><img src="https://dummyimage.com/600x600/F7F8FA/000.png" alt></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="">All Natural Italian-Style Chicken Meatballs</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>₦32.85</span>
                                <span class="old-price">₦33.8</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection