<!DOCTYPE html>
<html>
<head>
	<title>KABAADI ONLINE MARKET</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap.min.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<!-- <script type="text/javascript" src="{{asset('css/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('css/js/bootstrap.min.js')}}"></script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
	<section class="">

	<div class="container-fluid">
            
		<nav class="navbar navbar-expand-lg navbar-light ">
			
			<div class="row">
				<div class="col-2">
				<a class="navbar-brand logoname" href="#">
			
				<img src="{{asset('css/images/logo.png')}}"  class="logo"></a>
				</div>

				<div class="col-6">
				<a class="navbar-brand logoname" href="#">
				
				<div class=" logos" >
				KABAADI<BR>ONLINE MARKET
				</div>

				</a>
				</div>
			</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true">
					<i class="fa fa-bars"></i>
				</button>

				<div class="collapse navbar-collapse text-align:right" id="navbarNav">
					<ul class="navbar-nav mr-auto ">
						<li class="nav-item active">
							<a class="nav-link" href="/index">Home </a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="true">
							Uploads
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="nav-link dropdown-item" href="/myupload">My Uploads</a>
							
							<div class="dropdown-divider"></div>
							<a class="nav-link dropdown-item" href="/newupload">New Upload</a>
							
							</div>
						</li>

				
						<li class="nav-item">
							<a class="nav-link" href="/categories">Category</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/like-page">My Likes</a>
						</li>

						

						<li>
							{{-- copied from home blade 
							it is for login /register --}}
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
								<span class="navbar-toggler-icon"></span>
							</button>
								
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<!-- Left Side Of Navbar -->
								
			
								<!-- Right Side Of Navbar -->
								<ul class="navbar-nav ml-auto">
									<!-- Authentication Links -->
									@guest
										@if (Route::has('login'))
											<li class="nav-item">
												<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
											</li>
										@endif
										
										@if (Route::has('register'))
											<li class="nav-item">
												<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
											</li>
										@endif
										@else
											<li class="nav-item dropdown">
												<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													{{ Auth::user()->name }}
												</a>
				
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													<a class="dropdown-item" href="{{ route('logout') }}"
													onclick="event.preventDefault();
																	document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
													</a>
				
													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												</div>
											</li>
									@endguest
								</ul>
							</div>
											
						</li>

						<li>
							<div class="search"><form class="form-inline my-2 my-lg-0 " action="{{ url('search') }}" method ="get">
								<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" >
								<button class="btn nav-link btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
							</div></li>
					</ul>

					
				</div> 
		</nav>
		@yield('content')
							

	</div>

</section>

<br>
<hr>
<br>

<div class="row">

	<div class="col-6 fontblack weight-bold">
		<h3 align ="center">Support Us On</h3>
		<button></button>

	</div>

	<div class="col-6 fontblack weight-bold">
		<h3 align ="center">
			About Us
		</h3>

	</div>


</div>
<br>
<br>
<br>

<footer class="footer container">
	<h5>Copyright &copy 2020, Kabaadi Corporation</h5>

</footer>

</body>

</html>