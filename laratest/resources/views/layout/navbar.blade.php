@extends('layout.main')

@section('nav')

	<nav>
		<a href="{{route('home.create')}}">Create User</a> |
		<a href="{{route('logout.index')}}">logout</a> |
		<a href="">About</a>
		<a href="">Contact</a>
		<a href="">Create User</a>
	</nav>	

@endsection