@extends('admin.admin_dashboard')
@section('admin')
 

<div class="page-content">
	<div >
		<div class="col">
            <a href="{{route('admin.other.photo.option')}}">
                <div style="height: 250px;width:100%;text-align:center" class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <div class=" align-items-center text-white">
                            <h1 style="font-family: 'Times New Roman', Times, serif;padding-top:4rem;font-weight:900;font-style:italic;color:aliceblue;text-align:center;font-size:70px">UPLOAD NEW PHOTO TO GALLARY</h1>
                        </div>
                    </div>
                </div>
            </a>
		</div>
		<div class="col">
            <a href="{{route('admin.other.service.option')}}">
                <div style="height: 250px;width:100%;text-align:center" class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class=" align-items-center text-white">
                            <h1 style="font-family: 'Times New Roman', Times, serif;padding-top:4rem;font-weight:900;font-style:italic;color:aliceblue;text-align:center;font-size:70px">UPLOAD NEW SERVICE & UPDATE</h1>
                        </div>
                    </div>
                </div>
            </a>
		</div>
		<div class="col">
            <a href="{{route('admin.other.contact.option')}}">
                <div style="height: 250px;width:100%;text-align:center" class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class=" align-items-center text-white">
                            <h1 style="font-family: 'Times New Roman', Times, serif;padding-top:4rem;font-weight:900;font-style:italic;color:aliceblue;text-align:center;font-size:70px">UPLOAD CONTACT & UPDATE</h1>
                        </div>
                    </div>
                </div>
            </a>
		</div>
		<div class="col">
            <a href="{{route('admin.other.photo.option')}}">
                <div style="height: 250px;width:100%;text-align:center" class="card radius-10 bg-gradient-orange">
                    <div class="card-body">
                        <div class=" align-items-center text-white">
                            <h1 style="font-family: 'Times New Roman', Times, serif;padding-top:4rem;font-weight:900;font-style:italic;color:aliceblue;text-align:center;font-size:70px">UPLOAD SITE HOME & UPDATE</h1>
                        </div>
                    </div>
                </div>
            </a>
		</div>
	</div><!--end row-->
</div>

@endsection