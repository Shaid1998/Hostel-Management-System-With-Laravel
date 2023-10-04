<header>
	<div style="background-image: linear-gradient(to right, red , yellow);" class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand">
			<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
			</div>
			<div class="search-bar flex-grow-1">
				<div class="position-relative search-bar-box">
					<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
					<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
				</div>
			</div>
			
			@php
				$id = Auth::user()->id;
				$workerData = App\Models\User::find($id);
			@endphp				
			<div class="user-box dropdown">
				<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="{{ (!empty($workerData->photo)) ? url('upload/worker_images/'.$workerData->photo):url('upload/no_image.jpg') }}" class="user-img" alt="user avatar">
					<div class="user-info ps-3">
						<p class="user-name mb-0">{{ Auth::user()->name }}</p>
						<p class="designattion mb-0">{{ Auth::user()->username }}</p>
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li><a class="dropdown-item" href="{{ route('worker.profile') }}"><i class="bx bx-user"></i><span>Edit Profile</span></a></li>
					<li><a class="dropdown-item" href="{{ route('worker.change.password') }}"><i class="bx bx-cog"></i><span>Change Password</span></a></li>
					<li><a class="dropdown-item" href="{{ route('worker.dashobard') }}"><i class='bx bx-home-circle'></i><span>Dashboard</span></a></li>
					<li><a class="dropdown-item" href="{{ route('worker.logout') }}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>