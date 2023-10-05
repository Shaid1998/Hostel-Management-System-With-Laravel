@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">EDIT SERVICE</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">TYPE CHANGES </li>
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
                            <form id="myForm" method="post" action="{{ route('admin.update.service') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $service->id }}">
                                        
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Service Name</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="service_name" value="{{ $service->service_name }}" class="form-control"  />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Service Status</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="service_status" value="{{ $service->service_status }}" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Service Cost</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="service_cost" value="{{ $service->service_cost }}" class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Update Service" />
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