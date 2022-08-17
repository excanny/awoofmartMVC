@extends('layouts.master')

@section('menu-list')

    <li class="position-static">
        <a href="#" class="btn btn-menu-cat">Mega menu <i class="fi-rs-angle-down"></i></a>
        <ul class="mega-menu">
            <li class="sub-mega-menu sub-mega-menu-width-22">
                <a class="menu-title" href="#">Fruit & Vegetables</a>
                <ul>
                    <li><a href="">Meat & Poultry</a></li>
                    <li><a href="">Fresh Vegetables</a></li>
                    <li><a href="">Herbs & Seasonings</a></li>
                    <li><a href="">Cuts & Sprouts</a></li>
                    <li><a href="">Exotic Fruits & Veggies</a></li>
                    <li><a href="">Packaged Produce</a></li>
                </ul>
            </li>
            <li class="sub-mega-menu sub-mega-menu-width-22">
                <a class="menu-title" href="#">Breakfast & Dairy</a>
                <ul>
                    <li><a href="">Milk & Flavoured Milk</a></li>
                    <li><a href="">Butter and Margarine</a></li>
                    <li><a href="">Eggs Substitutes</a></li>
                    <li><a href="">Marmalades</a></li>
                    <li><a href="">Sour Cream</a></li>
                    <li><a href="">Cheese</a></li>
                </ul>
            </li>
            <li class="sub-mega-menu sub-mega-menu-width-22">
                <a class="menu-title" href="#">Meat & Seafood</a>
                <ul>
                    <li><a href="">Breakfast Sausage</a></li>
                    <li><a href="">Dinner Sausage</a></li>
                    <li><a href="">Chicken</a></li>
                    <li><a href="">Sliced Deli Meat</a></li>
                    <li><a href="">Wild Caught Fillets</a></li>
                    <li><a href="">Crab and Shellfish</a></li>
                </ul>
            </li>
            <li class="sub-mega-menu sub-mega-menu-width-34">
                <div class="menu-banner-wrap">
                    <a href=""><img src="{{asset('assets1/images/banner-menu.png')}}" alt="AwoofMart"></a>
                    <div class="menu-banner-content">
                        <h4>Hot deals</h4>
                        <h3>
                            Don't miss<br>
                            Trending
                        </h3>
                        <div class="menu-banner-price">
                            <span class="new-price text-success">Save to 50%</span>
                        </div>
                        <div class="menu-banner-btn">
                            <a href="">Shop now</a>
                        </div>
                    </div>
                    <div class="menu-banner-discount">
                        <h3>
                            <span>25%</span>
                            off
                        </h3>
                    </div>
                </div>
            </li>
        </ul>
    </li>
    <li class="hot-deals"><img src="{{asset('assets1/fonts/icon-hot-white.svg')}}" alt="hot deals"><a href="Deals</a></li>
    <li>
        <a class="active" href="/">Home </a>
        
    </li>
    <li>
        <a href="">About</a>
    </li>
    
    <li>
        <a href="" class="text-dark text-italicize">City:  {{ ucfirst(request()->segment(2)) }}</a>  <small class="badge bg-secondary cursor" data-bs-toggle="modal" data-bs-target="#cityModal">change city</small> 
    </li>

                       
@endsection

@section('home-slider-and-banners')

<div class="page-content pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                <p class="mb-20"><img src="assets/imgs/page/page-404.png" alt="" class="hover-up" /></p>
                <h4 class="display-5 mb-30">Invalid City Name Entered</h4>
                <p class="font-lg text-grey-700 mb-30">
                    The link you clicked may be broken or the page may have been removed.<br />
                    visit the <a href="/"> <span> Homepage</span></a> or <a href="/contact"><span>Contact us</span></a> about the problem
                </p>
                <div class="search-form">
                    <form action="#">
                        <input type="text" placeholder="Search…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="/"><i class="fi-rs-home mr-5"></i> Back To Home Page</a>
            </div>
        </div>
    </div>
</div>

@endsection