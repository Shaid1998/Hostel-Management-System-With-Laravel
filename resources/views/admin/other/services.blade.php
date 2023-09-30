@extends('admin.admin_dashboard')
@section('admin')
 
<div class="page-content">
    <div class="main-body">
        <div class="row">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-style:italic;font-size:55px;color:black;text-align:center" class="mb-0">ALL SERVICES</h5>
                        </div>
                        <div class="font-22 ms-auto"><a href='{{route('add.new.service')}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:15px;cursor:pointer;" class="btn btn-success" >ADD NEW SERVICE</a></div>
                    </div>
                    <hr>
                    <div style="width:100%;background-color:black" class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Sl</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Date & Time</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Updated</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Service Name</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Service Status</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Service Cost</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;">Action</th>
                                </tr>
                            </thead>
                            @foreach ($data as $data)
                                    <tbody>
                                    <tr>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->id}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->created_at}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->updated_at}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->service_name}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->service_status}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue">{{$data->service_cost}}</td>
                                        <td>
                                            <a href='{{ route ('service.information.edit',$data->id)}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:20px;cursor:pointer;" class="btn btn-success" >UPDATE</a>
                                            <a href='{{ route ('service.delete',$data->id)}}'style="font-family: 'Times New Roman', Times, serif;font-style:bold;font-size:20px;cursor:pointer;color:white;" id="delete" class="btn btn-danger" >DELETE</a>
                                        </td>
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