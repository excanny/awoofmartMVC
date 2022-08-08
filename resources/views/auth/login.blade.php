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

    <div class="page-content pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-5">Login</h3>
                                        <p class="mb-30">Don't have an account?<a href="/register">Create here</a></p>
                                    </div>

                                    <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <input type="text" required="" name="email" placeholder="Email" :value="old('email')"/>
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Password" :value="old('password')"/>
                                        </div>
                                    
                                        
                                        <div class="form-group mb-30">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold float-end">Login</button>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
