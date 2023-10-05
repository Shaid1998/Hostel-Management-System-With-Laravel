@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ADD NEW IMAGE</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ADD NEW </li>
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
                            <form id="myForm" method="post" action="{{ route('admin.add.new.photo.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="id" >
                                <input type="hidden" name="old_image" >
                                        
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Photo Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="photo_title" class="form-control"  required  />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">photo Credit</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="photo_credit" class="form-control" required   />
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Visible To</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select name='photo_for' required>
                                            <option value="">Select One</option>
                                            <option value="all">All</option>
                                            <option value="admin">Admin</option>
                                            <option value="worker">Worker</option>
                                            <option value="user">User</option>
                                            <option value="guest">Guest</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Photo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="photo" class="form-control"  id="image" required  />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <img id="showImage"  alt="Admin" style="width:100px; height: 100px;"  >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Upload Image" />
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
                photo_title: {required : true,}, 
                photo_credit: {required : true,}, 
                photo_for: {required : true,}, 
                photo: {required : true,}, 
            },
            messages :{
                photo_title: {required : 'Please enter a photo title',}, 
                photo_credit: {required : 'Please enter a photo credit',}, 
                photo_for: {required : 'Who is seen the photo',}, 
                photo: {required : 'Please upload a photo',}, 
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




<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

@endsection