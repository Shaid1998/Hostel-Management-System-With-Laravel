@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ADD NEW PAY DETAILS</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ADD NEW RECORD</li>
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
                            <form id="myForm" method="post" action="{{ route('admin.add.new.worker.pay.store') }}" >
                                @csrf
                                <input type="hidden" name="id" >
                                        
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Person Name</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="person_name" class="form-control" placeholder="Person Name" required  />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Payment Amount</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="payment_amount" class="form-control" placeholder="payment Amount" required   />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Person Designation</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select name='person_designation' required>
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
                                        <textarea type='text' name="payment_details" class="form-control" form="myForm" placeholder="Enter details here..."></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Payment Medium</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select name='payment_medium' required>
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
                                        <input type="text" name="account_number" class="form-control" placeholder="Enter which account number have complete payment." required   />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Reference Code</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="reference_code" class="form-control" placeholder="Enter  a Reference Code" required   />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Add Payment Details" />
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




<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                person_name: {required : true,}, 
                payment_amount: {required : true,}, 
                person_designation: {required : true,}, 
                payment_details: {required : true,}, 
                payment_medium: {required : true,}, 
                account_number: {required : true,}, 
                reference_code: {required : true,}, 
            },
            messages :{
                person_name: {required : 'Please enter person name',}, 
                payment_amount: {required : 'Please enter payment amount',}, 
                person_designation: {required : 'Please enter person designation',}, 
                payment_details: {required : 'Please enter person details',}, 
                payment_medium: {required : 'Please enter payment medium',}, 
                account_number: {required : 'Please enter person account number',}, 
                reference_code: {required : 'Please enter reference code as person username',}, 
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection