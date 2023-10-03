@extends('userPart.user_Dashboard')
@section('user')

<div class="page-content"> 
    <!--breadcrumb-->
    
        <div style="font-family: 'Times New Roman', Times, serif;font-weight:900;font-style:italic;font-size:70px;text-align:center;background-color:black;color:blue">Photo Gallary</div>
    <!--end breadcrumb-->
    @foreach ($photo as $photo)
        
    @endforeach
    <div class="container">
        <div style="background-color: black;margin-top:1rem" class="row">		 
            <div style="height: 300px;width:40%;align-items:center" class="column">
                <img src="{{$photosall->photo}}" style="height: 280px;width:100%;padding-top:1rem;">
            </div>
            <div style="height: 300px;width:60%;text-align:center" class="column">
                <h1 style="font-family: 'Times New Roman', Times, serif;font-weight:500;font-style:italic;font-size:35px;padding:1rem;color:aliceblue;">{{$photo->photo_title}}</h1>
                <h1 style="font-family: 'Times New Roman', Times, serif;font-weight:500;font-style:italic;font-size:25px;padding:1rem;color:aliceblue;">@credit:<span style="padding-left: 1rem">{{$photo->photo_credit}}</span></h1>
                <h1 style="font-family: 'Times New Roman', Times, serif;font-weight:500;font-style:italic;font-size:25px;padding:1rem;color:aliceblue;">Upload Date:<span style="padding-left: 1rem">{{$photo->created_at}}</span></h1>
            </div>
        </div>
    </div>
</div>

@endsection