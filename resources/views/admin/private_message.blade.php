@extends('admin.admin_dashboard')
@section('admin')
 

<div  class="page-content">
	<div  class="card radius-10">
		<div class="card-body">
			<div  style="background-color: rgb(21, 241, 29)" class="align-items-center">
				<div>
					<h5 style="font-family: Arial, Helvetica, sans-serif;font-weight:900;font-size:70px;font-style:italic;color:rgb(9, 33, 247);padding-left:13rem;padding-top:3rem;padding-bottom:3rem;" class="mb-0">Private Message</h5>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th style="width:4%;text-align:center" class="NoticeVHEAD">Sl</th>
							<th style="width:8%;text-align:center" class="NoticeVHEAD">Date & Time</th>
							<th style="width:8%;text-align:center" class="NoticeVHEAD">Username</th>
							<th style="width:70%;text-align:center" class="NoticeVHEAD">Message</th> 
							<th style="width:10%;text-align:center" class="NoticeVHEAD">Action</th> 
						</tr>
					</thead>
                    @foreach ($messages as $messages)
                        <tbody>
                            <tr>
                                <td style="width:4%;text-align:center" class="noticeUView">{{$messages->id}}</td>
                                <td style="width:8%;text-align:center" class="noticeUView">{{$messages->created_at}}</td>
                                <td style="width:8%;text-align:center"  class="noticeUView">{{$messages->username}}</td>
                                <td  style="width:70%;text-align:center" class="noticeUView">{!! nl2br($messages->message) !!}</td>
                                <td  style="width:10%;text-align:center" class="noticeUView"><a href='{{ route ('p.message.delete',$messages->id)}}'style="font-family: 'Times New Roman', Times, serif;font-style:bold;font-size:20px;cursor:pointer;color:white;" id="delete" class="btn btn-danger" >DELETE</a></td>
                            </tr>
					    </tbody>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
</div>

@endsection