@extends('userPart.user_Dashboard')
@section('user')
 

<div class="page-content MainCont">
	<div class="card radius-10 taskPage">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">Recent Payment Summary</h5>
				</div>
				<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-dark">
						<tr>
							<th style="width:5%;" class="NoticeVHEAD">Sl</th>
							<th style="width:10%;" class="NoticeVHEAD">Date</th>
							<th style="width:10%;" class="NoticeVHEAD">Amount</th>
							<th style="width:60%;" class="NoticeVHEAD">Details</th>
							<th style="width:7%;padding-right:2rem" class="NoticeVHEAD">Account</th>
							<th style="width:8%;" class="NoticeVHEAD">Reference</th> 
						</tr>
					</thead>
					@foreach ($payment as $payment)
                        <tbody>
                            <tr>
                                <td style="width:5%;" class="noticeUView">{{$payment->id}}</td>
                                <td style="width:10%;" class="noticeUView">{{$payment->created_at}}</td>
                                <td style="width:10%;" class="noticeUView">{{$payment->payment_amount}}</td>
								<td style="width:50%;" class="noticeUView">{!! nl2br ($payment->payment_details) !!}</td>
                                <td style="width:15%;" class="noticeUView">{{$payment->account_number}}</td>
                                <td style="width:10%;" class="noticeUView">{{$payment->reference_code}}</td>
                                
                            </tr>
                        </tbody>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
</div>

@endsection