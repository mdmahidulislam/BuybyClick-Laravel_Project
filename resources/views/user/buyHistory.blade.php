<!DOCTYPE html>
<html>
<head>
	<title>Buy History</title>
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
	<h2 align="center">List of Buy History</h2>
	
	
	<br/>
		<table border="1">
		<tr>
			<th>Order ID</th>
			<th>Option</th>
		</tr>
		@foreach($orders as $order)
			<tr>
				<td>{{$order->orderId}}</td>
				<td><a href="/user/{{$order->orderId}}/userOrderDetails">Order Details</a></td>
			</tr>
		@endforeach
	</table>
	<br/><br/>
	<a href="/user/userProfile">Back to My Profile</a>  

</body>
</html>