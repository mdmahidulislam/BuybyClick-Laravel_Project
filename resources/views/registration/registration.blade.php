<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	@include('partials.head')
</head>
<body id="reg">
	<header>
		@include('partials.header')
	</header>
	<div class="container font" style="margin-top: 1%;">
	  <div class="row">
			<div class="col-md-5 cal-md-offset-2">
			<h1 class="text-center text-success font"><strong>Register page</strong></h1>
			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			    	<div class="panel-group">
				    	<!-- @if($errors->any())
				    		<ul>
				    			@foreach($errors->all() as $error)
				    				<div class="panel panel-danger">
			    				      <div class="panel-heading">
			    				      	<li>{{$error}}</li>
			    				      </div>
			    				    </div>
				    			@endforeach
				    		</ul>
				    	@endif -->
				    	@if(session('message'))
		    				<div class="panel panel-danger">
	    				      <div class="panel-heading">
	    				      	<label>{{session('message')}}</label>
	    				      </div>
	    				    </div>
				    	@endif
					</div>			    	
					<form method="post">
					  <div class="form-group font">
					    <label for="FullName" class="font">Full Name</label>
					    <input type="text" class="form-control font" id="name" name="name" value="{{old('name')}}">
					    <p class="text-danger">
					    	@if($errors->has('name'))
					    		{{$errors->first('name')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group font">
					    <label for="UserName" class="font">Username:</label>
					    <input type="text" class="form-control font" id="username" name="username" value="{{old('username')}}">
					    <p class="text-danger">
					    	@if($errors->has('username'))
					    		{{$errors->first('username')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group">
					    <label for="email" class="font">Email address:</label>
					    <input type="email" class="form-control font" id="email" name="email" value="{{old('email')}}">
					    <p class="text-danger">
					    	@if($errors->has('email'))
					    		{{$errors->first('email')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group">
					    <label for="phone" class="font">Phone no:</label>
					    <input type="tel" class="form-control font" id="phone" name="phone" value="{{old('phone')}}">
					    <p class="text-danger">
					    	@if($errors->has('phone'))
					    		{{$errors->first('phone')}}
					    	@endif
					    </p>
					  </div>

					  <div class="form-group">
					    <label for="pwd" class="font">Password:</label>
					    <input type="password" class="form-control font" id="pwd" name="password">
					    <p class="text-danger">
					    	@if($errors->has('password'))
					    		{{$errors->first('password')}}
					    	@endif
					    </p>
					  </div>

					  <div class="form-group">
					    <label for="pwd" class="font">Confirm Password:</label>
					    <input type="password" class="form-control font" id="pwd" name="cpassword">
					    <p class="text-danger">
					    	@if($errors->has('cpassword'))
					    		{{$errors->first('cpassword')}}
					    	@endif
					    </p>
					  </div>

					  <div class="form-group">
					    <label for="address" class="font">Address:</label>
					    <input type="text-area" class="form-control font" id="address" name="address" value="{{old('address')}}">
					    <p class="text-danger">
					    	@if($errors->has('address'))
					    		{{$errors->first('address')}}
					    	@endif
					    </p>
					  </div>
					  <!-- <input type="submit" class="btn btn-primary btn-lg font" value="Submit"> -->
					  <button type="submit" class="btn btn-primary btn-lg font submit" id="submit">Submit</button>
					  <button type="submit" class=" pull-right btn-link font"><a href="www.google.com">Forget password</a></button>
					</form>
					<br/>
					<a href="/login" class="pull-right btn btn-block btn-danger font" > Already Register ?   </a>
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