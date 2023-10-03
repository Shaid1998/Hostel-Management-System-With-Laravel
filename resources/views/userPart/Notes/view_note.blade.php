@extends('userPart.user_Dashboard')
@section('user')

<div style="background-image: linear-gradient(to right, rgb(119, 255, 0) , rgb(0, 8, 255))" class="page-content">
    <div class="card noteViewTitleCard">
        <div class="card-body">
            <div >
                <div>
                    <h6 class="TitleWord">TITLE </h6>
                    <h5 class="mb-0 noteTitle">{{$note->note_title}}</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="card noteViewTitleCard">
        <div class="card-body">
            <div>
                <div>
                    <h6 class="TitleWord">NOTE</h6>
                    <h5  class="mb-0 NoteText">{{$note->note_text}}</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="card noteViewTitleCard">
        <div class="card-body">
            <div class=" align-items-center">
                <div class="row">
                    <div class="column btnColumn1"><a href='{{route('user.note.edit',$note->id)}}'  id="update" class="btn btn-primary noteButton" >UPDATE</a></div>
                    <div class="column btnColumn2"><a id="delete" class="btn btn-danger noteButton" >DELETE</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection