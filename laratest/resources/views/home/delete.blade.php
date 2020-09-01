<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<h1>Delete user page</h1>
	<a href="{{route('home.index')}}">Back</a>

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>Username</td>
				<td>{{$user['username']}}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>{{$user['name']}}</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>{{$user['password']}}</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>{{$user['type']}}</td>
			</tr>
		</table>
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
</body>
</html>