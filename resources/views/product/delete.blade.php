<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Product</h2>
	<a href="/product">Back to List</a>
	<br/><br/>
	<table>
		<tr>
			<td>PRODUCT ID:</td>
			<td>{{$product->productId}}</td>
		</tr>
		<tr>
			<td>PRODUCT NAME:</td>
			<td>{{$product->productName}}</td>
		</tr>
		<tr>
			<td>PRICE:</td>
			<td>{{$product->price}}</td>
		</tr>
		<tr>
			<td>QUANTITY:</td>
			<td>{{$product->quantity}}</td>
		</tr>
		<tr>
			<td>CATEGORY</td>
			<td>{{$product->categoryId}}</td>
		</tr>
	</table>

	<h3>Are you sure?</h3>
	<form method="post" action="/product/{{$product->productId}}">
		<input type="hidden" name="_method" value="delete">
		<!--
		<input type="hidden" name="pid" value="{{$product->productId}}">
		-->
		<input type="submit" value="Confirm">
	</form>

</body>
</html>