@extends('worker.worker_dashboard')
@section('worker')
 

<div style="background-image: linear-gradient(to bottom right, rgb(234, 255, 0), rgb(22, 241, 241));text-align:center;" class="page-content">
	<div class="row text-center">
		<h1 style="font-family: 'Times New Roman', Times, serif;background-color:rgb(39, 12, 210);font-size:100px;height:250px;width:100%;text-align:center;padding-top:3rem;color:aliceblue;">All User's Information</h1>
	</div>
	<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 style="font-family: 'Times New Roman', Times, serif;font-style:italic;font-size:40px;color:rgb(6, 38, 249);text-align:center;" class="mb-0">All User's Information</h5>
				</div>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Sl</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Name</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Email</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Status</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">join Date</th>
							<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Action</th> 
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