<!DOCTYPE html>
<html>
<head>
	<title>Product Sold</title>
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
	<h2>List of Sold Products</h2>
	<div>
		
		<div class="row">
			<div class="col-md-3">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav my-nav">
				        <li class="dropdown my-dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search by Category <span class="caret text-right"></span></a>
				          <ul class="dropdown-menu">
				          	@foreach($categories as $cat)
				          		<li><a href="/product/{{$cat->id}}/searchByCatagorySoldproduct">{{$cat->categoryname}}</a></li>
				          	@endforeach
				          </ul>
				        </li>
				      </ul>
				      </div>
				  </div>
				</nav>
			</div>
			<div class="col-md-9"></div>
		</div>
	<form method="post" action="/product/searchSoldproduct">
		<label>Search by Product Name:</label>
		<input type="text" name="searchText">
		<input type="submit" value="Search">
	</form>
		
	<form method="post" action="/product/searchSoldproductbyDate">
		<label>Search by Date:</label>
		<div>
			From:
			  <input type="date" name="fromdate">
			  To:
			  <input type="date" name="todate">
			  <input type="submit" value="Search">
		</div>
	</form>
</div>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>PRODUCT NAME</th>
			<th>USERNAME</th>
			<th>QUANTITY</th>
			<th>PRICE</th>
			<th>PHONE NUMBER</th>
			<th>ADDRESS</th>
			<th>ZIP CODE</th>
			<th>DELIVERY STATUS</th>
			<th>ORDER DATE</th>
		</tr>
		<?php 
		      $totalPrice = 0;
		      $totalQuantity= 0;           
		 ?>
		@foreach($soldproduct as $soldp)
			<tr>
				<td>{{$soldp->id}}</td>
				<td>{{$soldp->productname}}</td>
				<td>{{$soldp->username}}</td>
				<td>{{$soldp->quantity}}</td>
				<td>{{$soldp->price}}</td>
				<td>{{$soldp->phonenumber}}</td>
				<td>{{$soldp->address}}</td>
				<td>{{$soldp->zipcode}}</td>
				<td>{{$soldp->delivery}}</td>
				<td>{{$soldp->Orderdate}}</td>
				<?php 
		      		$totalPrice+=$soldp->price; 
		      		$totalQuantity+=$soldp->quantity;          
		 		?>
			</tr>
		@endforeach
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th>Total: {{$totalQuantity}}</th>
			<th>Total: {{$totalPrice}}</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</table>
</body>
</html>