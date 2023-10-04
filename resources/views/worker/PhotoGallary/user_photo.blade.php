@extends('worker.worker_dashboard')
@section('worker')

<div class="page-content PMainCont"> 

    <div class=" card MYphoto">MY PHOTO</div>

    <div class=" card MYphotoP"><a href='{{ route('worker.photo.gallary.add') }}' id="update" class="btn btn-primary PhotoAddNewButton" >ADD NEW</a></div>
    @foreach ($photo as $photo)
    <div class="container">
        <div class="row uPhR">		 
            <div class="column uPhC1">
                <img src="{{$photo->photo}}" class="userPhotoG">
            </div>
            <div class="column uPhC2">
                <h1 class="photoGTitle">{{$photo->photo_title}}</h1>
                <h1 class="photoGText">{{$photo->photo_text}}</h1>
                <a href='{{route('worker.photo.gallary.edit',$photo->id)}}' id="update" class="btn btn-primary noteButton" >UPDATE</a>
				<a href='{{route('worker.photo.gallary.delete',$photo->id)}}' id="delete" class="btn btn-danger noteButton" >DELETE</a>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

@endsection