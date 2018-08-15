<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	@include('partials.head')
</head>
<body>

	<header>
		@include('partials.adminHeader')
	</header>
	<!-- <div class="panel panel-primary">
		<a href="{{route('logout')}}">
			<button class="btn-danger btn pull-right">
				Logout
			</button>
		</a>
	</div> -->

	<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
	<div class="container font" style="margin-top: 3%;">
	  <div class="well">
	  	<h2 class="text-left">
	  		<a href="{{route('product.create')}}">Add Product</a>
	  	</h2>
	  </div>
	  <div class="well">
	  	<h2 class="text-left">
	  		<a href="{{route('product.index')}}">All Product</a>
	  	</h2>
	  </div>
	  <div class="well">
	  	<h2 class="text-left">
	  		<a href="{{route('admindashboard.create')}}">Add Admin</a>
	  	</h2>
	  </div>
	  <div class="well">
	  	<h2 class="text-left">
	  		<a href="{{route('admindashboard.userindex')}}">Users</a>
	  	</h2>
	  </div>
	  <div class="well">
	  	<h2 class="text-left">
	  		<a href="{{route('product.soldPendings')}}">Sold Pending</a>
	  	</h2>
	  </div>
	  <div class="well">
	  	<h2 class="text-left">
	  		<a href="{{route('product.productSold')}}">Sold Product</a>
	  	</h2>
	  </div>
	</div>
	<hr>
	<footer class="bg-dark text-white">
	@include('partials.footer')
	</footer>
</body>
</html>