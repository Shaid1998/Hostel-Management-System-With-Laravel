@extends('userPart.user_Dashboard')
@section('user')

<div class="page-content notePage">
    <div class="card radius-25">
        <div class="card-body noteLC">
            <div class="card-body">
                <div class=" align-items-center">
                    <div class="row">
                        <div class="column noteC1"><h5 class="mb-0 noteListTitle">All Notes List</h5></div>
                        <div class="column noteC2"><a href='{{ route ('user.add.note')}}' class="btn btn-success noteAddButton" >ADD NEW NOTE</a></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive overflow-x:auto">
                <table style="" class="table align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:10%;text-aligh:center;">Sl</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Note Title</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Created Date</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:20%;text-aligh:center;">Updated</th>
                            <th style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:20px;font-style:italic;color:rgb(251, 247, 21);width:30%;text-aligh:center;">Action</th>
                        </tr>
                    </thead>
                    @foreach ($note as $note)
                        <tbody>
                        <tr>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:10%;text-aligh:center;">{{$note->id}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:20%;text-aligh:center;">{{$note->note_title}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:20%;text-aligh:center;">{{$note->created_at}}</td>
                            <td style="font-family: 'Times New Roman', Times, serif;font-weight:700;font-size:15px;font-style:italic;color:aliceblue;width:30%;text-aligh:center;">{{$note->updated_at}}</td>
                            <td>
								<a href='{{route('user.note.view',$note->id)}}' id="view" class="btn btn-success noteButton" >VIEW</a>
								<a href='{{route('user.note.edit',$note->id)}}' id="update" class="btn btn-primary noteButton" >UPDATE</a>
								<a href='{{route('user.note.delete',$note->id)}}' id="delete" class="btn btn-danger noteButton" >DELETE</a>
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