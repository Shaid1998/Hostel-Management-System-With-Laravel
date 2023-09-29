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


	<title>Hostel Information Home</title>
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
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 bg-gradient-deepblue">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">50</h5>
                                    <div class="ms-auto">
                                        <i class='fas fa-hotel fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Rooms</p>
                                    <p class="mb-0 ms-auto">2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-orange">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">15</h5>
                                    <div class="ms-auto">
                                        <i class='fas fa-user-check fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Staff</p>
                                    <p class="mb-0 ms-auto">+3.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">120</h5>
                                    <div class="ms-auto">
                                        <i class='fas fa-user-alt fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Seat</p>
                                    <p class="mb-0 ms-auto">+9.2%<span><i style="color:red;" class='bx bx-down-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">30</h5>
                                    <div class="ms-auto">
                                        <i class='fas fa-bed fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Available Seat</p>
                                    <p class="mb-0 ms-auto">-8.4%<span><i style="color:rgb(21, 0, 255);" class='bx bx-down-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
                <div class="card radius-10">
                    <div style="background-color: black" class="card-body">
                        <div class="d-flex align-items-center">
                            <div style="background-color: black">
                                <h5 style="font-family: Arial, Helvetica, sans-serif;font-weight:800;font-size:50px;font-style:italic;color:rgb(250, 94, 146)" class="mb-0">Services List</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive overflow-x:auto">
                            <table style="" class="table align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21)">Sl</th>
                                        <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21)">Service</th>
                                        <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21)">Status</th>
                                        <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21)">Cost</th>
                                    </tr>
                                </thead>
                                @foreach ($serviceall as $serviceall)
                                    <tbody>
                                    <tr>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->id}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->service_name}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->service_status}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue">{{$serviceall->service_cost}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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