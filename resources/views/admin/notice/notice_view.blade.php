@extends('admin.admin_dashboard')
@section('admin')
 

<div style="background-image: linear-gradient(to bottom right, rgb(234, 255, 0), rgb(22, 241, 241));text-align:center;" class="page-content">
	
	<div class="row text-center">
		<div class="column"><h1 style="font-family: 'Times New Roman', Times, serif;background-color:rgb(39, 12, 210);font-weight:900;font-size:100px;height:250px;width:100%;text-align:center;padding-top:3rem;color:aliceblue;">ALL <span style="padding-left: 2rem"> NOTICE</span></h1></div>						
	</div>
	<div class="card radius-10">
		<div class="card-body">
			<div class=" align-items-center">
				<div class="row">
					<div style="width: 50%;padding-top:1.5rem;" class="column"><h5 style="font-family: 'Times New Roman', Times, serif;font-weight:900;font-style:italic;font-size:40px;color:rgb(6, 38, 249);text-align:center;" class="mb-0">All Notice</h5></div>
					<div style="width: 50%;padding-top:2rem;padding-left:22rem;" class="column"><a href='{{ route ('add.new.notice')}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:20px;cursor:pointer;" class="btn btn-success" >ADD NEW NOTICE</a></div>
				</div>
			</div>
		</div>
		<hr>
		<div class="table-responsive">
			<table class="table align-middle mb-0">
				<thead class="table-light">
					<tr>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Sl</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Post Date & Time</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Update Date & Time</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Notice Topic</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Notice For</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Alart Type</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Notice Details</th>
						<th style="font-family: 'Times New Roman', Times, serif;font-size:15px;text-align:center;">Action</th>
					</tr>
				</thead>
					
				</table>
			</div>
		</div>
	</div>
</div>

@endsection