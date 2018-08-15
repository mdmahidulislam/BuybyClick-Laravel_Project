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
	<div class="panel panel-primary">
		<a href="{{route('logout')}}">
			<button class="btn-danger btn pull-right">
				Logout
			</button>
		</a>
	</div>
	<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
	<div class="container font" style="margin-top: 1%;">
	  <div class="row">
			<div class="col-md-5 cal-md-offset-2">
			<h1 class="text-center text-success font"><strong>Create an Admin</strong></h1>
			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">

			    	@if(session('message'))
	                		<div class=" panel panel-danger">
	                			<label>{{session('message')}}</label>
	                		</div>
	                @endif
					<form method="post" action="/admindashboard">
					  <div class="form-group font">
					    <label for="productname" class="font">Admin Name:</label>
					    <input type="text" class="form-control font" id="name" name="name">
					    <p class="text-danger">
					    	@if($errors->has('name'))
					    		{{$errors->first('name')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group font">
					    <label for="price" class="font">User Name:</label>
					    <input type="text" class="form-control font" id="username" name="username">
					    <p class="text-danger">
					    	@if($errors->has('username'))
					    		{{$errors->first('username')}}
					    	@endif
					    </p>
					  </div>
					  </div>
					  <div class="form-group">
					    <label for="details" class="font">Email:</label>
					    <input type="text" class="form-control font" id="email" name="email">
					    <p class="text-danger">
					    	@if($errors->has('email'))
					    		{{$errors->first('email')}}
					    	@endif
					    </p>
					  </div>
					  <div class="form-group">
					    <label for="quantity" class="font">Phone:</label>
					    <input type="text" class="form-control font" id="password" name="phone">
					    <p class="text-danger">
					    	@if($errors->has('phone'))
					    		{{$errors->first('phone')}}
					    	@endif
					    </p>
					 </div>
					  <div class="form-group">
					    <label for="quantity" class="font">Password:</label>
					    <input type="Password" class="form-control font" id="password" name="password">
					    <p class="text-danger">
					    	@if($errors->has('password'))
					    		{{$errors->first('password')}}
					    	@endif
					    </p>
					  </div>
					  <div>
					  	<label>Gender:</label>
					  	<select name="gender">
					  			<option value="male">Male</option>
					  			<option value="female">Female</option>
					  			<option value="others">Others</option>
					  	</select>
					  </div>
					  <div>
					  	DOB:
					  	  <input type="date" name="dob">
					  </div>
					  <div class="form-group">
					    <label for="quantity" class="font">Nid:</label>
					    <input type="text" class="form-control font" id="nid" name="nid">
					 </div>
					  <div class="form-group">
					    <label for="quantity" class="font">Present Address:</label>
					    <input type="text" class="form-control font" id="presentaddress" name="presentaddress">
					 </div>
					 <div class="form-group">
					    <label for="quantity" class="font">Parmanent Address:</label>
					    <input type="text" class="form-control font" id="parmanentaddress" name="parmanentaddress">
					 </div>
					  <!-- <input type="submit" class="btn btn-primary btn-lg font" value="Submit"> -->
					  <button type="submit" class="btn btn-primary btn-lg font" id="submit">Create Admin</button>
					</form>
			    </div>
			    </div>
			   </div>
	  		</div>
		</div>
	<hr>
	<footer class="bg-dark text-white">
	@include('partials.footer')
	</footer>
</body>
</html>