@extends('userPart.user_Dashboard')
@section('user')
 

<div style="background-image: linear-gradient(to bottom right, rgb(234, 255, 0), rgb(22, 241, 241));text-align:center;" class="page-content">
	<div class="card radius-10 TitileUN">
		<div class="card-body">
			<div class=" align-items-center">
				<div class="row">
					<div class="column col11"><h5 class="mb-0 TitileUN">My Notice</h5></div>
				</div>
			</div>
		</div>
		<hr>
		<div style="background-color: black" class="table-responsive">
			<table class="table align-middle mb-0">
				<thead class="table-dark">
					<tr>
						<th style="width:5%;" class="NoticeVHEAD">Sl</th>
						<th style="width:10%;" class="NoticeVHEAD">Post Date & Time</th>
						<th style="width:10%;" class="NoticeVHEAD">Update Date & Time</th>
						<th style="width:15%;" class="NoticeVHEAD">Notice Topic</th>
						<th style="width:10%;" class="NoticeVHEAD">Alart Type</th>
						<th style="width:50%;" class="NoticeVHEAD">Notice Details</th>
					</tr>
				</thead>
					@foreach ($notice as $notice)
                        <tbody>
                            <tr>
                                <td style="width:5%;" class="noticeUView">{{$loop->iteration}}</td>
                                <td style="width:10%;" class="noticeUView">{{$notice->created_at}}</td>
                                <td style="width:10%;" class="noticeUView">{{$notice->updated_at}}</td>
                                <td style="width:15%;" class="noticeUView">{{$notice->notice_topic}}</td>
                                <td style="width:10%;" class="noticeUView">{{$notice->notice_Alart}}</td>
                                <td style="width:50%;" class="noticeUView">{!! nl2br ($notice->notice_details) !!}</td>
                            </tr>
                        </tbody>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
</div>

@endsection