<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Create Category</h2>
	<a href="/category">Back to List</a>
	<br/><br/>
	<form method="post" action="/category">
		<table>
			<tr>
				<td>CATEGORY NAME:</td>
				<td><input type="text" name="catname"></td>
				<td>
					@if($errors->has('catname'))
						{{$errors->first('catname')}}
					@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>

	@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif

</body>
</html>