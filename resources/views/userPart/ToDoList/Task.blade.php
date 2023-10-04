@extends('userPart.user_Dashboard')
@section('user')

<div class="page-content taskPage">
    <div class="card radius-25">
        <div class="card-body taskLC">
            <div class="card-body">
                <div class=" align-items-center">
                    <div class="row">
                        <div class="column TC1"><h5 class="mb-0 TaskListTitle">All Task's List</h5></div>
                        <div class="column TC2"><a href='{{ route ('user.task.add')}}' class="btn btn-success TaskAddButton" >ADD NEW TASK</a></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive overflow-x:auto">
                <table style="" class="table align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:10%;text-aligh:center;">Sl</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Task Title</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Created Date</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Updated</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:30%;text-aligh:center;">Action</th>
                        </tr>
                    </thead>
                    @foreach ($task as $task)
                        <tbody>
                        <tr>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:10%;text-aligh:center;">{{$task->id}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:20%;text-aligh:center;">{{$task->task_title}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:20%;text-aligh:center;">{{$task->created_at}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:30%;text-aligh:center;">{{$task->updated_at}}</td>
                            <td>
								<a href='{{route('user.note.view',$task->id)}}' id="view" class="btn btn-success noteButton" >VIEW</a>
								<a href='{{route('user.task.edit',$task->id)}}' id="update" class="btn btn-primary noteButton" >UPDATE</a>
								<a href='{{route('user.note.delete',$task->id)}}' id="delete" class="btn btn-danger noteButton" >DELETE</a>
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