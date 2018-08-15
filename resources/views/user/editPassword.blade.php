<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	@include('partials.head')
</head>
<body>
	<h2>Edit Password</h2>
	<a href="/user/userProfile">Back to List</a>
	<br/><br/>
	@if(session('message'))
		<div class=" panel panel-danger">
			<label>{{session('message')}}</label>
		</div>
	@endif
	<form method="post" action="/user/{{$user->id}}/updatePassword">
		<input type="hidden" name="_method" value="put">
		<table>
			<tr>
				<td>Enter Old Password:</td>
				<td><input type="password" name="oldPassword"></td>
			</tr>
			<tr>
				<td>Enter New Password:</td>
				<td><input type="password" name="newPassword"></td>
			</tr>
				<td><button type="submit" class="btn btn-primary">Update</button></td>
			</tr>
		</table>
	</form>

</body>
</html>