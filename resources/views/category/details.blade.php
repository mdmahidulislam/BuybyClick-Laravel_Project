<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Category Details</h2>
	<a href="/category">Back to List</a> | 
	<a href="/category/{{$category->categoryId}}/edit">Edit</a>
	<br/><br/>
	<table>
		<tr>
			<td>CATEGORY ID:</td>
			<td>{{$category->categoryId}}</td>
		</tr>
		<tr>
			<td>CATEGORY NAME:</td>
			<td>{{$category->categoryName}}</td>
		</tr>
	</table>

</body>
</html>