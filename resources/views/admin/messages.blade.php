@extends('admin.admin_dashboard')
@section('admin')
 

<div  style="background-color: black" class="page-content">
	<div class="card radius-10">
		<div class="card-body">
			<div  style="background-color: rgb(21, 241, 29)" class="align-items-center">
				<div>
					<h5 style="font-family: Arial, Helvetica, sans-serif;font-weight:900;font-size:70px;font-style:italic;color:rgb(9, 33, 247);padding-left:22rem;padding-top:3rem;padding-bottom:3rem;" class="mb-0">All Messages</h5>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>Sl</th>
							<th>Date & Time</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Designation</th> 
							<th>Message</th> 
							<th>Action</th> 
						</tr>
					</thead>
                    @foreach ($messages as $messages)
                        <tbody>
                            <tr>
                                <td>{{$messages->id}}</td>
                                <td>{{$messages->created_at}}</td>
                                <td>{{$messages->name}}</td>
                                <td>{{$messages->email}}</td>
                                <td>{{$messages->phone}}</td>
                                <td>{{$messages->designation}}</td>
                                <td>{!! nl2br($messages->message) !!}</td>
                                <td><a href='{{ route ('message.delete',$messages->id)}}'style="font-family: 'Times New Roman', Times, serif;font-style:bold;font-size:20px;cursor:pointer;color:white;" id="delete" class="btn btn-danger" >DELETE</a></td>
                            </tr>
					    </tbody>
                    @endforeach
					
				</table>
			</div>
		</div>
	</div>
</div>

@endsection