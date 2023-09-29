<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags --> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('adminbackend/assets/images/favicon-32x32.png') }}" type="image/png" />

	<link href="{{ asset('adminbackend/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

 
	<!--plugins-->
	<link href="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('adminbackend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('adminbackend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('adminbackend/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('adminbackend/assets/js/pace.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('adminbackend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('adminbackend/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('adminbackend/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('adminbackend/assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('adminbackend/assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('adminbackend/assets/css/header-colors.css') }}" />

<!-- DataTable -->
	<link href="{{ asset('adminbackend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<!-- DataTable-->
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<title>Contact Send and Message Page</title>
</head>

<body> 
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('visitor.visitor_sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('visitor.visitor_header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
            <div class="page-content"> 
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Send Message And Contact</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Type Your Message And Contact</li>
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
                                        <form id="myForm" method="post" action="{{ route('visitor.message.contact.store')}}" >
                                            @csrf
                                            <input type="hidden" name="id" >
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Name</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="name" class="form-control" placeholder="name" required  />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="email" name="email" class="form-control" placeholder="email"/>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="phone" name="phone" class="form-control" placeholder="phone"/>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="address" class="form-control" placeholder="address" required  />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Designation</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="designation" class="form-control" placeholder="designation" required  />
                                                    <span style="font-family: 'Times New Roman', Times, serif;font-weight:400;font-size:13px;color:black">If you are new in this system or not a user or employer, type "Guest User" in designation box.</span>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Message</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <textarea type='text' name="message" class="form-control" form="myForm" placeholder="Enter text here..."></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="submit" class="btn btn-primary px-4" value="Send" />
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
                            name: {required : true,}, 
                            email: {required : false,}, 
                            phone: {required : false,}, 
                            address: {required : true,}, 
                            message: {required : false,}, 
                            designation: {required : true,}, 
                        },
                        messages :{
                            name: {required : 'Please Enter Your Name',},
                            address: {required : 'Please Enter Your Address',},
                            designation: {required : 'Please Enter Your Designation',},
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
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('visitor.visitor_footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	 
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('adminbackend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('adminbackend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('adminbackend/assets/js/index.js') }}"></script>
	  <script src="{{ asset('adminbackend/assets/js/validate.min.js') }}"></script>
	
<!--Datatable-->
<script src="{{ asset('adminbackend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
<!--Datatable-->

	<!--app JS-->
	<script src="{{ asset('adminbackend/assets/js/app.js') }}"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="{{ asset('adminbackend/assets/js/code.js') }}"></script>

 <script src="{{ asset('adminbackend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>

 	<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>
	
	<script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>

</body>

</html>