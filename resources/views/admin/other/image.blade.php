@extends('admin.admin_dashboard')
@section('admin')
 
<div class="page-content">
    <div class="main-body">
        <div class="row">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-style:italic;font-size:55px;color:black;text-align:center" class="mb-0">Resent Image</h5>
                        </div>
                        <div class="font-22 ms-auto"><a href='#' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:15px;cursor:pointer;" class="btn btn-success" >ADD NEW IMAGE</a></div>
                    </div>
                    <hr>
                    <div style="width:100%;background-color:black" class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Sl</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Photo</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Date</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Title</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Credit</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Visiblity</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Action</th> 
                                </tr>
                            </thead>
                            @foreach ($data as $data)
                                    <tbody>
                                    <tr>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->id}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue"><img src="{{ asset($data->photo)}}" height="40px" width="40px" /></td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->created_at}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->photo_title}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->photo_credit}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->photo_for}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->photo_for}}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection