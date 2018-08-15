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
			<h1 class="text-center text-success font"><strong>Product Register page</strong></h1>
			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">

			    	@if(session('message'))
	                		<div class=" panel panel-danger">
	                			<label>{{session('message')}}</label>
	                		</div>
	                @endif
					<form method="post" action="/product">
					  <div class="form-group font">
					    <label for="productname" class="font">Product Name:</label>
					    <input type="text" class="form-control font" id="productname" name="productname">
					    <p class="text-danger">
					    	@if($errors->has('productname'))
					    		{{$errors->first('productname')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group font">
					    <label for="price" class="font">Price:</label>
					    <input type="text" class="form-control font" id="price" name="price">
					    <p class="text-danger">
					    	@if($errors->has('price'))
					    		{{$errors->first('price')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group">
					    <label for="quantity" class="font">Quantity:</label>
					    <input type="text" class="form-control font" id="quantity" name="quantity">
					    <p class="text-danger">
					    	@if($errors->has('quantity'))
					    		{{$errors->first('quantity')}}
					    	@endif
					    </p>
					  </div>
					  
					  <div class="form-group">
					    <label for="category" class="font">Category:</label>
					    <select name="cat">
					    		@foreach($categories as $cat)
					    				<option value="{{$cat->id}}">{{$cat->categoryname}}</option>
					    		@endforeach
					    </select>
					    <p class="text-danger">
					    	@if($errors->has('category'))
					    		{{$errors->first('category')}}
					    	@endif
					    </p>
					  </div>
					  <div class="form-group">
					    <label for="image" class="font">Image 1:</label>
					    <input type="file" class="form-control font" id="image" name="iamge1">
					  </div>

					  <div class="form-group">
					    <label for="image" class="font">Image 2:</label>
					    <input type="file" class="form-control font" id="image" name="iamge2">
					  </div>

					  <div class="form-group">
					    <label for="image" class="font">Image 3:</label>
					    <input type="file" class="form-control font" id="image1" name="iamge3">
					  </div>

					  <div class="form-group">
					    <label for="details" class="font">Details:</label>
					    <textarea class="form-control font" id="details" name="details"></textarea>
					    <p class="text-danger">
					    	@if($errors->has('details'))
					    		{{$errors->first('details')}}
					    	@endif
					    </p>
					  </div>

					  <!-- <input type="submit" class="btn btn-primary btn-lg font" value="Submit"> -->
					  <button type="submit" class="btn btn-primary btn-lg font" id="submit">Add</button>
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