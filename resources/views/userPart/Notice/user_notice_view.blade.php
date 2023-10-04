@extends('userPart.user_Dashboard')
@section('user')
 

<div style="background-image: linear-gradient(to bottom right, rgb(234, 255, 0), rgb(22, 241, 241));text-align:center;" class="page-content">
	<div class="card radius-10">
		<div class="card-body">
			<div class=" align-items-center">
				<div class="row">
					<div style="width: 50%;padding-top:1.5rem;" class="column"><h5 style="font-family: 'Times New Roman', Times, serif;font-weight:900;font-style:italic;font-size:40px;color:rgb(6, 38, 249);text-align:center;" class="mb-0">My Notice</h5></div>
				</div>
			</div>
		</div>
		<hr>
		<div style="background-color: black" class="table-responsive">
			<table class="table align-middle mb-0">
				<thead class="table-dark">
					<tr>
						<th class="NoticeVHEAD">Sl</th>
						<th class="NoticeVHEAD">Post Date & Time</th>
						<th class="NoticeVHEAD">Update Date & Time</th>
						<th class="NoticeVHEAD">Notice Topic</th>
						<th class="NoticeVHEAD">Alart Type</th>
						<th class="NoticeVHEAD">Notice Details</th>
					</tr>
				</thead>
					@foreach ($notice as $notice)
                        <tbody>
                            <tr>
                                <td class="noticeUView">{{$notice->id}}</td>
                                <td class="noticeUView">{{$notice->created_at}}</td>
                                <td class="noticeUView">{{$notice->updated_at}}</td>
                                <td class="noticeUView">{{$notice->notice_topic}}</td>
                                <td class="noticeUView">{{$notice->notice_Alart}}</td>
                                <td class="noticeUView">{!! nl2br ($notice->notice_details) !!}</td>
                            </tr>
                        </tbody>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
</div>

@endsection