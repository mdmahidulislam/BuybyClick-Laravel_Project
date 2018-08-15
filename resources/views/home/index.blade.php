<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	@include('partials.head')
</head>
<body>

	<header>
		@include('partials.header')
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				@include('partials.sidebar')
			</div>
			 <div class="col-md-9 mainresult">				
				<div id="wrap">
					<div id="columns" class="columns_4">
						@foreach($products as $product)
							<a href="/product/{{$product->id}}">
								<figure>
								  <img src="{{asset('images/product.jpg')}}" alt="Hello Moni">
									<figcaption class="fig-pro">{{$product->productname}}</figcaption>
									<p><small>Category: </small>{{$product->categoryname}}</p>
								    <span class="price">BDT {{$product->price}}</span>
							    	<a href="/product/{{$product->id}}" class="button" type="submit">Buy Now</a> 
								</figure>
							</a>
						@endforeach
					</div>
				</div>
			</div>
			<div class="searchresult col-md-9">
				
			</div>
		</div>
	</div>
	
	<hr>
	<footer class="bg-dark text-white">
	@include('partials.footer')
	</footer>
</body>	
</html>