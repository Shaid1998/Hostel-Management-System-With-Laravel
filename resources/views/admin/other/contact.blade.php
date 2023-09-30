@extends('admin.admin_dashboard')
@section('admin')
 
<div class="page-content">
    <div class="main-body">
        <div class="row">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-style:italic;font-size:55px;color:black;text-align:center" class="mb-0">ALL CONTACT FOR VISITOR</h5>
                        </div>
                        <div class="font-22 ms-auto"><a href='{{route('add.new.contact')}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:15px;cursor:pointer;" class="btn btn-success" >ADD NEW CONTACT</a></div>
                    </div>
                    <hr>
                    <div style="background-color:black" class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:5%;text-align:center">Sl</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:14%;text-align:center">Photo</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:15%;text-align:center">Name</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:15%;text-align:center">Phone</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:15%;text-align:center">Email</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:15%;text-align:center">Position</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:15%;text-align:center">Update Date</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;width:15%;text-align:center">Action</th> 
                                </tr>
                            </thead>
                            @foreach ($data as $data)
                                    <tbody>
                                    <tr>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->id}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center"><img src="{{ asset($data->image)}}" height="40px" width="40px" /></td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->name}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->phone}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->email}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->position}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->updated_at}}</td>
                                        <td>
                                            <a href='{{ route ('contact.edit',$data->id)}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:20px;cursor:pointer;" class="btn btn-success" >UPDATE</a>
                                            <a href='{{ route ('contact.delete',$data->id)}}'style="font-family: 'Times New Roman', Times, serif;font-style:bold;font-size:20px;cursor:pointer;color:white;" id="delete" class="btn btn-danger" >DELETE</a>
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