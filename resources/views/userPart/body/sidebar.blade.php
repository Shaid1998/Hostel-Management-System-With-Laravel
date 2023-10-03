
<div style="background-image: linear-gradient(to bottom right, red, yellow);" class="sidebar-wrapper" data-simplebar="true">
	@php
		$id = Auth::user()->id;
		$userData = App\Models\User::find($id);
	@endphp	
	<div class="user-profile text-center mt-3">
		<div class="">
			<img src="{{$userData->photo}}"  class="avatar-md rounded-circle">
		</div>
		<div class="mt-3">
			<h4 style="color:rgb(0, 30, 255);font-size:40px;" class="font-size-16 mb-1">{{$userData->username}}</h4>
			<span style="color:rgb(0, 30, 255);font-size:20px;" class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
		</div>
	</div>
		<!--navigation-->
	<div>
		<ul class="metismenu" id="menu">
			<li>
				<a href="{{ route('user.dashobard') }}">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class='bx bx-home-circle'></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">Dashboard</div>
				</a>
			</li>
			<li>
				<a href="{{route('user.information')}}">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="fas fa-user-check"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">My Profile</div>
				</a>
			</li>
			<li>
				<a href=" ">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="fas fa-envelope"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">Messages</div>
				</a>
			</li>
			<li>
				<a href=" ">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="fas fa-bell"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">Notice</div>
				</a>
			</li>
			<li>
				<a href=" ">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="fas fa-tasks"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">My ToDo List</div>
				</a>
			</li>
			<li>
				<a href="{{route('user.own.photo.galary')}}">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="fas fa-image"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">My Gallary</div>
				</a>
			</li>
			<li>
				<a href="{{route('user.notes.list')}}">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="far fa-file-alt"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">Notes</div>
				</a>
			</li>
			<li>
				<a href="{{route('user.hostel.contact')}}">
					<div style="color:rgb(0, 30, 255);font-size:25px;" class="parent-icon"><i class="fa fa-address-book"></i>
					</div>
					<div style="color:rgb(0, 30, 255);font-size:16px;" class="menu-title">Hostel Contact</div>
				</a>
			</li>
		</ul>
	</div>
	<!--end navigation-->
</div>