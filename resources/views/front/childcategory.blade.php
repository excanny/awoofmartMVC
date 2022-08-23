@extends('layouts.master')

@section('menu-list')

    <li class="position-static">
        <a href="javascript:void" class="btn btn-menu-cat">Categories <i class="fi-rs-angle-down"></i></a>
        @include('front.includes.category-menu', ['segment_number' => request()->segment(4)])
    </li>
    <li class="hot-deals"><img src="{{asset('assets1/fonts/icon-hot-white.svg')}}" alt="hot deals"><a href="">Deals</a></li>
    <li>
        <a class="active" href="/">Home </a>
        
    </li>
    <li>
        <a href="/about">About</a>
    </li>
    
    <li>
        <a href="javascript:void" class="text-dark text-italicize">City:  {{ ucfirst(request()->segment(4)) }}</a>  <small class="badge bg-secondary cursor" data-bs-toggle="modal" data-bs-target="#cityModal">change city</small> 
    </li>

                       
@endsection

@section('deals-and-top-products')
<div class="container mb-30 mt-50">
    <div class="row">
        <div class="col-lg-5-5">
            <div class="row product-grid">
                <!--end product card-->
                @foreach ($items as $item)
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" src="{{asset('assets1/images/product-2-1.jpg')}}" alt="" />
                                        <img class="hover-img" src="{{asset('assets1/images/product-2-2.jpg')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="">{{$item->fitem_name}}</a></h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--product grid-->
            <div class="pagination-area mt-20 mb-20">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection