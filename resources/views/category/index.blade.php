<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>List of Categories</h2>
	<a href="/home">Back to Home</a> | 
	<a href="/category/create">Create New</a>
	<br/><br/>
	<form method="post" action="/category/search">
		<input type="text" name="searchText">
		<input type="submit" value="Search">
	</form>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>OPTION</th>
		</tr>
		@foreach($categories as $cat)
			<tr>
				<td>{{$cat->categoryId}}</td>
				<td>{{$cat->categoryName}}</td>
				<td>
					<a href="/category/{{$cat->categoryId}}">Details</a> | 
					<a href="/category/{{$cat->categoryId}}/edit">Edit</a> | 
					<a href="/category/{{$cat->categoryId}}/delete">Delete</a>
				</td>
			</tr>
		@endforeach
	</table>
</body>
</html>