@extends('userPart.user_Dashboard')
@section('user')
 

<div class="page-content">
	<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
		<div class="col">
			<div class="card radius-10 bg-gradient-deepblue">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">2</h5>
						<div class="ms-auto">
							<i class='fas fa-user-cog fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total Admin</p>
						<p class="mb-0 ms-auto">--<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-orange">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">200000</h5>
						<div class="ms-auto">
							<i class='far fa-file-alt fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total Post</p>
						<p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-ohhappiness">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">2000</h5>
						<div class="ms-auto">
							<i class='fas fa-user-alt fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total User</p>
						<p class="mb-0 ms-auto">+9.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-ibiza">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">200</h5>
						<div class="ms-auto">
							<i class='fas fa-user-alt fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Messages</p>
						<p class="mb-0 ms-auto">+11.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
	</div><!--end row-->
	<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">Orders Summary</h5>
				</div>
				<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>Sl</th>
							<th>Date</th>
							<th>Invoice</th>
							<th>Amount</th>
							<th>Payment</th>
							<th>Status</th> 
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection