<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
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
	<h2>List of Users</h2>
	<br/><br/>
	<form method="post" action="/admindashboard/userSearch">
		<input type="text" name="searchText">
		<input type="submit" value="Search">
	</form>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>Phone</th>
			<th>address</th>
		</tr>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->phone}}</td>
				<td>{{$user->address}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>