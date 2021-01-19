
	
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="sec" style="background-image: url({{asset('css/images/i1.png')}})"> 
	
	<div class="" >
		<input type="checkbox" name="" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>

	<div class="sidebar">
		<header class="container"><br>
			<h1>Admin Pannel</h1>
		</header>
		<ul>
		
			<li> <a href="/dashboard">Dashboard</a></li>
			<li> <a href="/users">Users</a></li>
			<li> <a href="/adminpost">Posts</a></li>
			<li> <a href="/">Home Page</a></li>
			
		</ul>
		
	</div>
	<h1 class="container" align="center">ADMIN PANNEL</h1>

			<hr>
			<br>
        @yield('admincontent')
	
	</div>

	
		
	

</body>
</html>

