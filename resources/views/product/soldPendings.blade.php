<!DOCTYPE html>
<html>
<head>
	<title>Product Pending</title>
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
	<h2>List of Sold Pendings</h2>
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
			<th>Option</th>
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
				<td><a href="/product/{{$soldp->id}}/statusUpdate">Approve</a></td>
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
			<th></th>
		</tr>
	</table>

</body>
</html>