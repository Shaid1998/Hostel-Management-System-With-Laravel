@extends('worker.worker_dashboard')
@section('worker')
<div class="page-content MainCont">
	<div class="row text-center">
		<h1 class="topName">{{$workerData->name}}</h1>
	</div>
	<div class="row">
		<h4 class="showDataim"><img src='{{$workerData->photo}}' /></h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile"> Name: </span>  {{$workerData->name}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Username : </span>{{$workerData->username}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Email: </span>{{$workerData->email}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Phone Number:</span> {{$workerData->phone}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile"> Address:</span> {{$workerData->address}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"><span class="TTitile">Role: </span>{{$workerData->role}}</h4>
	</div>
	<div class="row">
		<h4 class="showData"> <span class="TTitile">Status: </span>{{$workerData->status}}</h4>
	</div>

</div>

@endsection