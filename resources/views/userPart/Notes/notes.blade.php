@extends('userPart.user_Dashboard')
@section('user')

<div style="background-image: linear-gradient(to right, rgb(119, 255, 0) , rgb(0, 8, 255))" class="page-content">
    <div class="card radius-25">
        <div style="background-color: black" class="card-body">
            <div class="card-body">
                <div class=" align-items-center">
                    <div class="row">
                        <div style="width: 50%;padding-top:1.5rem;" class="column"><h5 style="font-family: 'Times New Roman', Times, serif;font-style:italic;font-size:50px;color:rgb(22, 249, 6);text-align:center;font-weight:900" class="mb-0">All Notes List</h5></div>
                        <div style="width: 50%;padding-top:2rem;padding-left:22rem;" class="column"><a href='{{ route ('user.add.note')}}' style="font-family: 'Times New Roman', Times, serif;font-style:bold;color:white;font-size:20px;cursor:pointer;" class="btn btn-success" >ADD NEW NOTE</a></div>
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
								<a href='#' id="delete" class="btn btn-danger noteButton" >DELETE</a>
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