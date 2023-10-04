@extends('userPart.user_Dashboard')
@section('user')

<div style="background-image: linear-gradient(to right, rgb(119, 255, 0) , rgb(0, 8, 255))" class="page-content">
    <div class="card noteViewTitleCard">
        <div class="card-body">
            <div >
                <div>
                    <h6 class="TitleWord">TITLE </h6>
                    <h5 class="mb-0 noteTitle">{{$task->task_title}}</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="card noteViewTitleCard">
        <div class="card-body">
            <div>
                <div>
                    <h6 class="TitleWord">TASK DETAILS</h6>
                    <h5  class="mb-0 NoteText">{{$task->task}}</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="card noteViewTitleCard3">
        <div class="card-body">
            <div class=" align-items-center">
                <div class="row">
                    <div class="column btnColumn1"><a href='{{route('user.task.list')}}' id="view" class="btn btn-success noteButton" >LIST</a></div>
                    <div class="column btnColumn2"><a href='{{route('user.task.edit',$task->id)}}'  id="update" class="btn btn-primary noteButton" >UPDATE</a></div>
                    <div class="column btnColumn3"><a href="{{route('user.task.delete',$task->id)}}" id="delete" class="btn btn-danger noteButton" >DELETE</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection