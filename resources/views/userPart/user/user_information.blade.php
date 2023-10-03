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
		<h4 class="showData"><span class="TTitile"> Name: </span>  {{$userData->name}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Username : </span>{{$userData->username}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Email: </span>{{$userData->email}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Phone Number:</span> {{$userData->phone}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile"> Address:</span> {{$userData->address}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Role: </span>{{$userData->role}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"> <span class="TTitile">Status: </span>{{$userData->status}}</h4>
	</div>

</div>

@endsection