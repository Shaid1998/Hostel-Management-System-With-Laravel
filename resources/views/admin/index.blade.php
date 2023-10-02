@extends('admin.admin_dashboard')
@section('admin')
 

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
						<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
						<h5 class="mb-0 text-white">120</h5>
						<div class="ms-auto">
							<i class='fa fa-bed fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 77%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total Seat</p>
						<p class="mb-0 ms-auto">--<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-ohhappiness">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">30</h5>
						<div class="ms-auto">
							<i class='fas fa-bed fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 23%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total free Seat</p>
						<p class="mb-0 ms-auto">-9.2%<span><i style="color:red" class='bx bx-down-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-ibiza">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">1000</h5><i class="fa-solid fa-dollar-sign fs-5 text-white"></i>
						<div class="ms-auto">
							<i class='fa fa-dollar-sign fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Monthly Income</p>
						<p class="mb-0 ms-auto">+11.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
	</div><!--end row-->
	<div style="height: 80px;width:100%;background-image:linear-gradient(to right, rgb(115, 255, 0) , rgb(0, 229, 255));margin-left:0px;margin-bottom:10px" class="row radius-10 d-flex align-items-center">
		<h1 style="font-family: Arial, Helvetica, sans-serif;font-weight:900;font-size:40px;font-style:italic;text-align:center;padding:10px;">USER PAYMENT</h1>
	</div>
	<div style="background-color:black;" class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-size:35px;font-style:italic;color:aliceblue" class="mb-0">Payment Summary Of User</h5>
				</div>
				<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
				</div>
			</div>
			<hr>
			<div style="background-color:black;" class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-dark">
						<tr>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:4%">Sl</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:10%">Date</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:8%">Payment Id</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:12%">Name</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:10%">Amount</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:5%">Person Designation</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:35%">Details</th> 
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:16%">Action</th> 
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div style="height: 80px;width:100%;background-image:linear-gradient(to right, rgb(115, 255, 0) , rgb(0, 229, 255));margin-left:0px;margin-bottom:10px" class="row radius-10 d-flex align-items-center">
		<h1 style="font-family: Arial, Helvetica, sans-serif;font-weight:900;font-size:40px;font-style:italic;text-align:center;padding:10px;">WORKER PAYMENT</h1>
	</div>
	<div style="background-color:black;" class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-size:35px;font-style:italic;color:aliceblue" class="mb-0">Payment Summary Of Worker</h5>
				</div>
				<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-dark">
						<tr>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:4%">Sl</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:10%">Date</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:8%">Payment Id</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:12%">Name</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:10%">Amount</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:5%">Person Designation</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:35%">Details</th> 
							<th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center;width:16%">Action</th> 
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