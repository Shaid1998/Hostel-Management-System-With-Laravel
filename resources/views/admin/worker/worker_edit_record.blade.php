@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">EDIT PAY DETAILS</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">CHANGE RECORD</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">		 
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <form id="myForm" method="post" action="{{ route('worker.pay.record.update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$worker->id}}" >
                                        
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Person Name</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="person_name" class="form-control" value="{{$worker->person_name}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Payment Amount</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="payment_amount" class="form-control" value="{{$worker->payment_amount}}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Person Designation</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select name='person_designation'>
                                            <option value="">Select One</option>
                                            <option value="worker">Worker</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Payment Details</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea type='text' name="payment_details" class="form-control" form="myForm" value="{{$worker->payment_details}}"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Payment Medium</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select name='payment_medium' >
                                            <option value="">Select One</option>
                                            <option value="bKash">bKash</option>
                                            <option value="nagad">Nagad</option>
                                            <option value="uKash">uKash</option>
                                            <option value="direct">Direct</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Payment Account Number</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="account_number" class="form-control" value="{{$worker->account_number}}"   />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Reference Code</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="reference_code" class="form-control" value="{{$worker->reference_code}}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Update Payment Details" />
                                    </div>
                                </div>
                            </div>
		                </form>
	                </div>
		        </div>
			</div>
		</div>
	</div>
</div>


@endsection