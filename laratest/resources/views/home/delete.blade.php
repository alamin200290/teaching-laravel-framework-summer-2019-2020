<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<h1>Delete user page</h1>

	<form method="post">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>{{$user['name']}}</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>{{$user['password']}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$user['email']}}</td>
			</tr>
		</table>
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
</body>
</html>