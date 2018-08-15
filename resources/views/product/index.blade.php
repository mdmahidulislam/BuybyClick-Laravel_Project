<!DOCTYPE html>
<html>
<head>
	<title>Product list</title>
		@include('partials.head')
		<style>
	    table {
	        font-family: arial, sans-serif;
	        border-collapse: collapse;
	        width: 100%;
	    }

	    td, th {
	        border: 1px solid #dddddd;
	        text-align: left;
	        padding: 8px;
	    }

	    tr:nth-child(even) {
	        background-color: #dddddd;
	    }
	    </style>
</head>
<body>
	@include('partials.adminheader')
	<h2>List of Products</h2>
	<h3><a class="text-success" href="/product/create">Create New</a></h3>
	<form method="post" action="/product/search">
		<input type="text" name="searchText">
		<input type="submit" value="Search">
	</form>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>QUANTITY</th>
			<th>CATEGORY</th>
			<th>OPTION</th>
		</tr>
		<?php 
		      $totalPrice = 0;
		      $totalQuantity= 0;           
		 ?>
		@foreach($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->productname}}</td>
				<td>{{$product->price}}</td>
				<td>{{$product->quantity}}</td>
				<td>{{$product->catagoryId}}</td>
				<?php 
		      		$totalPrice+=$product->price; 
		      		$totalQuantity+=$product->quantity;          
		 		?>
				<td>
					<a href="/product/{{$product->id}}/edit">Edit</a> | 
					<a href="/product/{{$product->id}}/delete">Delete</a>
				</td>
			</tr>
		@endforeach
		<tr>
			<th></th>
			<th></th>
			<th>Total: {{$totalPrice}}</th>
			<th>Total: {{$totalQuantity}}</th>
		</tr>
	</table>
</body>
</html>