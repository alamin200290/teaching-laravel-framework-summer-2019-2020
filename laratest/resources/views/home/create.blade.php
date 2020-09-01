<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

	<h1>Create New user</h1>
	<a href="{{route('home.index')}}">Back</a>

	<form method="post">
		
		{{csrf_field()}}
		<table>

			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{old('type')}}"></td>
			</tr>
			<tr>
				<td>Dept</td>
				<td><input type="text" name="dept" value="{{old('dept')}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="{{old('cgpa')}}" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>