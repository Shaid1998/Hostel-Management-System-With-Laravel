@extends('userPart.user_Dashboard')
@section('user')

<div class="page-content taskPage">
    <div class="card radius-25">
        <div class="card-body taskLC">
            <div class="card-body">
                <div class=" align-items-center">
                    <div class="row">
                        <div class="column TC1"><h5 class="mb-0 TaskListTitle">ALL MESSAGE</h5></div>
                        <div class="column TC2"><a href='{{ route ('user.message.send')}}' class="btn btn-success TaskAddButton" >NEW MESSAGE</a></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive overflow-x:auto">
                <table style="" class="table align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:10%;text-aligh:center;">Sl</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Message</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Date</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:30%;text-aligh:center;">Action</th>
                        </tr>
                    </thead>
                    @foreach ($message as $task)
                        <tbody>
                        <tr>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:10%;text-aligh:center;">{{$task->id}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:20%;text-aligh:center;">{{$task->message}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:20%;text-aligh:center;">{{$task->created_at}}</td>
                            <td>
								<a href='{{route('user.message.delete',$task->id)}}' id="delete" class="btn btn-danger noteButton" >DELETE</a>
							</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection