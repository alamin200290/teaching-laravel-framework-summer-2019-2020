@extends('layout.navbar')


@section('title')
Home page
@endsection

@section('content1')
<h2>user list</h2>
<table border="1">
	<tr>
		<td>ID</td>
		<td>Username</td>
		<td>Password</td>
		<td>Type</td>
		<td>Action</td>
	</tr>

@for($i=0; $i != count($users); $i++)
	<tr>
		<td>{{$users[$i]->userId}}</td>
		<td>{{$users[$i]->username}}</td>
		<td>{{$users[$i]->password}}</td>
		<td>{{$users[$i]->type}}</td>
		<td>
			<a href="{{route('home.edit', [$users[$i]->userId])}}">Edit</a> |
			<a href="{{route('home.delete', [$users[$i]->userId])}}">Delete</a>
		</td>
	</tr>
@endfor
</table>
@endsection

