@extends('userPart.user_Dashboard')
@section('user')
 

<div class="page-content MainCont">
	<div class="row text-center">
		<h1 class="topName">{{$userData->name}}</h1>
	</div>
	<div class="row">
		<h4>{{$userData->name}}</h4>
	</div>
	<div class="row">
		<h4>{{$userData->username}}</h4>
	</div>
	<div class="row">
		<h4>{{$userData->email}}</h4>
	</div>
	<div class="row">
		<h4>{{$userData->password}}</h4>
	</div>
	<div class="row">
		<h4><img src='{{$userData->photo}}' /></h4>
	</div>
	<div class="row">
		<h4>{{$userData->phone}}</h4>
	</div>
	<div class="row">
		<h4>{{$userData->address}}</h4>
	</div>
	<div class="row">
		<h4>{{$userData->role}}</h4>
	</div>
	<div class="row">
		<h4>{{$userData->status}}</h4>
	</div>

</div>

@endsection