<!DOCTYPE html>
<html lang="en">
<head>
  <title>AwoofMart Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
</head>
<body>



  <section class="mt-3">
      <div class="container">
          <div class="row">
              <div class="col">
Logo
              </div>
              <div class="col">
                <input type="text"> in
            </div>
              <div class="col">
                   <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit">Go</button>
                    </div>
                  </div>
            </div>
          </div>
      </div>
  </section>

  <section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                  
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/8566659/pexels-photo-8566659.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Los Angeles" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/6384610/pexels-photo-6384610.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Chicago" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/10153603/pexels-photo-10153603.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="New York" width="100%">
                      </div>
                    </div>
                  
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  
                  </div>
            </div>
            <div class="col-lg-3"> 

                <div class="row">
                    <div class="col">
                        <img src="https://images.pexels.com/photos/1878399/pexels-photo-1878399.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" width="100%">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <img src="https://images.pexels.com/photos/1878399/pexels-photo-1878399.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" width="100%">
                    </div>
                </div>

          </div>
            
        </div>
    </div>
</section>


<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <button>FEATURED PRODUCTS</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                Slider
            </div>
        </div>
    </div>
</section>

<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <button>LATEST EVENTS/BLOG</button>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text.</p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text.</p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text.</p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                  </div>
            </div>
          
        </div>
    </div>
</section>

<section class="mt-3 ">
    <div class="container">
        <div class="row">
            <div class="col bg-light">
                Subscribe for offers in your inbox

                <form class="form-inline" action="/action_page.php">
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-3 py-5" style="background: #992C31;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="py-3" style="background: #76BD17;">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Copyright © 2019 awoofMart. All rights reserved.    Powered by Khojodpay

  
                </p>
            </div>
        </div>
    </div>
</section>




<!-- Modal -->
<div id="authModal" class="modal fade" role="dialog">
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


              <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Register </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
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
                <div id="menu1" class="container tab-pane fade"><br>
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
									<select name="city" class="form-control" id="city" required style="width:100%;">
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
  </div>

  <!-- The Modal -->
<div class="modal" id="startShoppingModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row ">
					<label for="" class="col-12 text-center ">
						<h3  class="text-white">Welcome To Awoofmart NG</h3> 
						<h5  class="text-white">Please</h5><h5 class="text-white">Choose City To Start Shooping</h5></label>
						<div class="col-sm-12">
							<select name="city" id="choosecitytoshop" class="custom-select">
								<option value="">Select one</option>
								<?php foreach($cities as $city){ ?>
								  <option value="<?php echo $city->fcity_name; ?>"><?php echo $city->fcity_name; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <script>
	//Dynamic Area Select
	$('#city').change(function(){
		var city = $('#city').val();
			//alert(city);
			if(city != '')
			{
				 //alert("Hi");
				 $.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				 $.ajax({
					 url:"{{ url('/getareas') }}",
					 method:"POST",
					 data:{city:city},
					 dataType:"json",
					 success:function(data)
					 {
						//alert(data.areas);
						//console.log(data.areas);
						$('#area').html(data.areas);
						//alert(data);
					},
					error: function(xhr, textStatus, errorThrown) {
					//code to execut
					alert(xhr.responseText);
					//$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
				},
				});

				}
			else
			{
				$('#areaname').html('<option value="">Select Area</option>');
			}

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
				 $.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
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