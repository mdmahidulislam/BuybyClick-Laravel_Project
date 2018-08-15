<!DOCTYPE html>
<html>
<head>
	<title>User Order Details</title>
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
	<h2>Order Details</h2>
	<a href="/user/userProfile">Back to Buy History</a> | 
	<br/><br/>
	<br/>
		<table border="1">
		<tr>
			<th>ORDER ID</th>
			<th>PRODUCT NAME</th>
			<th>QUANTITY</th>
			<th>PRICE</th>
			<th>PHONE NUMBER</th>
			<th>ADDRESS</th>
			<th>DELIVERY STATUS</th>
			<th>ORDER DATE</th>
		</tr>
		<?php 
		      $totalPrice = 0;
		      $totalQuantity= 0;           
		 ?>
		@foreach($soldProducts as $soldp)
			<tr>
				<td>{{$soldp->orderId}}</td>
				<td>{{$soldp->productname}}</td>
				<td>{{$soldp->quantity}}</td>
				<td>{{$soldp->price}}</td>
				<td>{{$soldp->phonenumber}}</td>
				<td>{{$soldp->address}}</td>
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
			<th>Total: {{$totalQuantity}}</th>
			<th>Total: {{$totalPrice}}</th>			
			<th></th>
			<th></th>
			<th></th>
			<th></th>

			
		</tr>
	</table>

</body>
</html>