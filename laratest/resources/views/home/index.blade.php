<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!</h1>


	<h2>user list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['name']}}</td>
			<td>{{$users[$i]['email']}}</td>
			<td>{{$users[$i]['password']}}</td>
			<td>
				<a href="/home/edit/{{$users[$i]['id']}}">Edit</a> |
				<a href="/home/delete/{{$users[$i]['id']}}">Delete</a> |
				<a href="/home/details/{{$users[$i]['id']}}">Details</a> |
			</td>
		</tr>
	@endfor
	</table>

</body>
</html>