@extends('userPart.user_Dashboard')
@section('user')
 

<div class="page-content MainCont">
	<div class="row text-center">
		<h1 class="topName">{{$userData->name}}</h1>
	</div>
	<div class="row">
		<h4 class="showDataim"><img src='{{$userData->photo}}' /></h4>
	</div>
	<div class="row">
		<h4 class="showData"> Name : {{$userData->name}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"> Username : {{$userData->username}}</h4>
	</div>
	<div class="row">
		<h4 class="showData">{{$userData->email}}</h4>
	</div>
	<div class="row">
		<h4 class="showData">{{$userData->password}}</h4>
	</div>
	
	<div class="row">
		<h4 class="showData">{{$userData->phone}}</h4>
	</div>
	<div class="row">
		<h4 class="showData">{{$userData->address}}</h4>
	</div>
	<div class="row">
		<h4 class="showData">{{$userData->role}}</h4>
	</div>
	<div class="row">
		<h4 class="showData">{{$userData->status}}</h4>
	</div>

</div>

@endsection