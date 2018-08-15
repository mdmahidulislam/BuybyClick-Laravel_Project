<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	@include('partials.head')
</head>
<body id="details">

	<header>
		@include('partials.header')
	</header>	
	<div id="containerdetails">
		<!-- Start	Product details -->
		<div class="product-details">
			<!-- 	Product Name -->
			<h1>{{$p->productname}}</h1>
			<!-- 		<span class="hint new">New</span> -->
			<!-- 		<span class="hint free-shipping">Free Shipping</span> -->
			<!-- 		the Product rating -->
			<span class="hint-star star">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				<i class="fa fa-star-o" aria-hidden="true"></i>
			</span>	
<!-- 			<% if(typeof errorMessage !== 'undefined'){ %>
				<div class="panel panel-warning">
					<p class="text-center text-danger"><%= errorMessage.message %></p>
				</div>
			<% } %> -->
			<form method="post"  action="/cart/addtocart">
				
				<div class="form-group">
					<p><strong>Available Quantity: </strong>{{$p->quantity}}</p>
				    <label for="quantity" class="col-sm-3 control-label font">
				        Quantity: </label>
				    <div class="col-sm-8 col-sm-offset-1">
				        <input type="hidden" id="proid" value="{{$p->id}}" name="id">
				        <input type="text" class="form-control font" id="quantity" value="1" name="quantity" onchange="check()">
				    </div>

				    <!-- 		Control -->
				    <div class="control">
				    	<!-- Start Button buying -->
				    	<button class="btndetails button" type="submit" id='addtocart'>
				    		<!-- 		the Price -->
				    		<span class="price">BDT {{$p->price}}</span>
				    		<!-- 		shopping cart icon-->
				    		<span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
				    		<!-- 		Buy Now / ADD to Cart-->
				    		<span class="buy">Add to Cart</span>
				    	</button>
				    		<!-- End Button buying -->
				    </div>
				</div>
			</form>		
		</div>
				
			<!-- 	End	Product details   -->
			<script>
			function check() {
			    if(document.getElementById("quantity").value>{{$p->quantity}})
			    {
			    	window.alert('We do not have sock as much you want');
			    	document.getElementById('addtocart').disabled=true;
			    }
			    else
			    {
			    	document.getElementById('addtocart').disabled=false;
			    }
			}
			</script>
				
			<!-- 	Start product image & Information -->
				
			<div class="product-image">
				
				<img src="{{asset('images/product.jpg')}}" alt="Product">
					
				<!-- 	product Information-->
				<div class="info">
					<h2>The Description</h2>
					<ul>
						<li><strong>Details: </strong>{{$p->details}}</li>
						<li><strong>Category: </strong>{{$p->categoryname}}</li>
					</ul>
				</div>
			</div>
			<!--  End product image  -->
	</div>





	<hr>
	<footer class="bg-dark text-white">
	@include('partials.footer')
	</footer>

	
  </body>
</html>
