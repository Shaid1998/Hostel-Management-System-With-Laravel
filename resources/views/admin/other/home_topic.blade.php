@extends('admin.admin_dashboard')
@section('admin')
 
<div class="page-content">
    <div class="main-body">
        <div class="row">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 style="font-family: 'Times New Roman', Times, serif;font-weight:800;font-style:italic;font-size:55px;color:black;text-align:center" class="mb-0">ALL TOPIC</h5>
                        </div>
                        <div class="font-22 ms-auto"><a href='{{route('add.new.homeTopic')}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:15px;cursor:pointer;" class="btn btn-success" >ADD NEW TOPIC</a></div>
                    </div>
                    <hr>
                    <div style="width:100%;background-color:black" class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Sl</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Date & Time</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Updated</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Title</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Sub Title</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Button 1 Text</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Button 2 Text</th>
                                    <th style="font-family: 'Times New Roman', Times, serif;font-weight:600;font-size:20px;font-style:italic;text-align:center">Action</th>
                                </tr>
                            </thead>
                            @foreach ($home as $data)
                                    <tbody>
                                    <tr>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->id}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->created_at}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->updated_at}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->home_title}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->home_sub_Title}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->Home_button_1}}</td>
                                        <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:16px;font-style:italic;color:aliceblue;text-align:center">{{$data->home_button_2}}</td>
                                        <td>
                                            <a href='{{ route ('admin.home.text.edit',$data->id)}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:20px;cursor:pointer;" class="btn btn-success" >UPDATE</a>
                                            <a href='{{ route ('admin.home.text.delete',$data->id)}}'style="font-family: 'Times New Roman', Times, serif;font-style:bold;font-size:20px;cursor:pointer;color:white;" id="delete" class="btn btn-danger" >DELETE</a>
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