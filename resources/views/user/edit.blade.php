<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	@include('partials.head')
</head>
<body>
	<h2>Edit User</h2>
	<a href="/user/userProfile">Back to List</a>
	<br/><br/>
	<form method="post" action="/user/{{$user->id}}">
		<input type="hidden" name="_method" value="put">
		<table>
			<tr>
				<td>User ID:</td>
				<td>{{$user->id}}</td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="{{$user->name}}"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="{{$user->email}}"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="phone" value="{{$user->phone}}"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="address">{{$user->address}}</textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-primary">Update</button></td>
			</tr>
		</table>
	</form>

</body>
</html>