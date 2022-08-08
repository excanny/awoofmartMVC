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
                                        <h3 class="mb-5">Create an Account</h3>
                                        <p class="mb-30">Already have an account? <a href="/login">Login</a></p>
                                    </div>

                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="firstname" placeholder="First Name" :value="old('firstname')" required autofocus/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="lastname" placeholder="Last Name" :value="old('lastname')"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="email" placeholder="Email" :value="old('email')"/>
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="number" name="phone" placeholder="Phone" :value="old('phone')"/>
                                        </div>
                                    
                                        
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
                                                    <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pr-10 d-none d-lg-block">
                            <div class="card-login mt-95">
                                <div class="form-group">
                                    <input type="text" required="" name="address" placeholder="Address" :value="old('address')" />
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <select name="area" id="area" class="form-control">
                                                <option value="">Select area</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <select name="landmark" class="form-control">
                                                <option value="">Select landmark</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input required="" type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input required="" type="password" name="password_confirmation" placeholder="Confirm password" />
                                </div>
                                <div class="form-group mb-30">
                                    <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold float-end">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
{{-- 
'firstname' => ['required', 'string', 'max:255'],
'lastname' => ['required', 'string', 'max:255'],
'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
'phone' => ['required', 'string', 'max:255', 'unique:users'],
'address' => ['required', 'max:255'],
'area' => ['required', 'string', 'max:255'],
'landmark' => ['required', 'string', 'max:255'],
'password'  --}}