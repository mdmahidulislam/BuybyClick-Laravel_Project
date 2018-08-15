<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Category</h2>
	<a href="/category">Back to List</a>
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

	<h3>Are you sure?</h3>
	<form method="post" action="/category/{{$category->categoryId}}">
		<input type="hidden" name="_method" value="delete">
		<!--
		<input type="hidden" name="catId" value="{{$category->categoryId}}">
		-->
		<input type="submit" value="Confirm">
	</form>

</body>
</html>