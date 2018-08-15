<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Edit Product</h2>
	<a href="/product">Back to List</a>
	<br/><br/>
	<form method="post" action="/product/{{$product->id}}">
		<input type="hidden" name="_method" value="put">
		<table>
			<tr>
				<td>PRODUCT ID:</td>
				<td>{{$product->id}}</td>
			</tr>
			<tr>
				<td>PRODUCT NAME:</td>
				<td><input type="text" name="pname" value="{{$product->productname}}"></td>
			</tr>
			<tr>
				<td>PRICE:</td>
				<td><input type="text" name="price" value="{{$product->price}}"></td>
			</tr>
			<tr>
				<td>QUANTITY:</td>
				<td><input type="text" name="quantity" value="{{$product->quantity}}"></td>
			</tr>
			<tr>
				<td>CATEGORY:</td>
				<td><input type="text" name="cat" value="{{$product->categoryId}}"></td>
			</tr>
			<tr>
				<td>DETAILS:</td>
				<td><input type="text" name="details" value="{{$product->details}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>

</body>
</html>