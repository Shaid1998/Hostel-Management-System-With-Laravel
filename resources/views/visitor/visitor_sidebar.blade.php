
<div style="background-image: linear-gradient(to bottom right, red, yellow);" class="sidebar-wrapper" data-simplebar="true">
	<!--navigation-->
	<div>
		<ul class="metismenuG" id="menu">
			<li style="padding-top: 5rem">
				<a href="{{ route('login') }}">
					<div style="color:rgb(0, 30, 255);font-size:45px;" class="parent-icon"><i class="fas fa-sign-in"></i></div>
					<div style="font-family: 'Times New Roman', Times, serif;font-weight:900;font-size:45px;color:rgb(0, 30, 255);" class="menu-title">Log In</div>
				</a>
			</li>
		</ul>
		<ul class="metismenuG" id="menu">
			<li style="padding-top: 5rem">
				<a href="{{ route('hostel.home') }}">
					<div style="color:rgb(0, 30, 255);font-size:30px;" class="parent-icon"><i class='bx bx-home-circle'></i></div>
					<div style="color:rgb(0, 30, 255);font-size:22px;" class="menu-title">Home</div>
				</a>
			</li>
			<li style="padding-top: 2rem">
				<a href="{{ route ('hostel.contact')}}">
					<div style="color:rgb(0, 30, 255);font-size:30px;" class="parent-icon"><i class="fas fa-user-check"></i></div>
					<div style="color:rgb(0, 30, 255);font-size:22px;" class="menu-title">Contact</div>
				</a>
			</li>
			<li style="padding-top: 2rem">
				<a href="{{ route('visitor.message.contact')}}">
					<div style="color:rgb(0, 30, 255);font-size:30px;" class="parent-icon"><i class="fas fa-envelope"></i></div>
					<div style="color:rgb(0, 30, 255);font-size:22px;" class="menu-title">Send Message</div>
				</a>
			</li>
			<li style="padding-top: 2rem">
				<a href="{{ route('photo.gallary') }}">
					<div style="color:rgb(0, 30, 255);font-size:30px;" class="parent-icon"><i class="fas fa-image"></i></div>
					<div style="color:rgb(0, 30, 255);font-size:22px;" class="menu-title">Gallary</div>
				</a>
			</li>
		</ul>
	</div>
	<!--end navigation-->
</div>