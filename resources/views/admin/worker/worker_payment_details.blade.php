@extends('admin.admin_dashboard')
@section('admin')
 

<div style="background-image: linear-gradient(to bottom right, rgb(246, 247, 244), rgb(12, 12, 12));text-align:center;" class="page-content">
	<div style="height: 80px;width:100%;background-image:linear-gradient(to right, rgb(115, 255, 0) , rgb(0, 229, 255));margin-left:0px;margin-bottom:10px" class="row radius-10 d-flex align-items-center">
		<h1 style="font-family: Arial, Helvetica, sans-serif;font-weight:900;font-size:40px;font-style:italic;text-align:center;padding:10px;">WORKER PAYMENT</h1>
	</div>
	<div style="background-color:black;" class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-size:35px;font-style:italic;color:aliceblue" class="mb-0">Payment Summary Of Worker</h5>
				</div>
				<div class="font-22 ms-auto"><a href='{{route('add.worker.pay.details')}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:15px;cursor:pointer;" class="btn btn-success" >ADD NEW PAY DETAILS</a></div>
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
					@foreach ($worker as $user)
                    <tbody>
                        <tr>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->id}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->created_at}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->unique_payment_id}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->person_name}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->payment_amount}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->person_designation}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->payment_details}}</td>
                            <td>
                                <a href='{{ route ('contact.edit',$user->id)}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:20px;cursor:pointer;" class="btn btn-success" >UPDATE</a>
                                <a href='{{ route ('contact.delete',$user->id)}}'style="font-family: 'Times New Roman', Times, serif;font-style:bold;font-size:20px;cursor:pointer;color:white;" id="delete" class="btn btn-danger" >DELETE</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
</div>

@endsection