@extends('admin.admin_dashboard')
@section('admin')
 

<div style="background-image: linear-gradient(to bottom right, rgb(234, 255, 0), rgb(22, 241, 241));text-align:center;" class="page-content">
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