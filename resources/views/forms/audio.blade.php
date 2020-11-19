@extends('layouts/layout')
@section('title')
Sign Up
@endsection
@section('content')
<form action="{{url('/audio')}}" method="post"  enctype="multipart/form-data" >
    @csrf
	<div class="create ">
        <div class="container">
            <div class="row ">
     
                <div class="col-md-12 ">
                    <h3 class="my-3"> Upload Audio</h3>
                </div>
       
                <div class="col-md-12 my-3">
                <input class="form-control" type="text" placeholder=" Name" name="name" value="{{old('name')}}">
                </div>
                <div class="col-md-12 my-3">
                <input class="form-control" type="file" placeholder=" Name" name="audio" accept="audio/*" value="{{old('audio')}}>
                </div>
                <div class="form-group w-100">
    <select class="form-control" id="exampleFormControlSelect1" name="lesson">
    @foreach($lessons as $lesson)
      <option>{{$lesson->lesson_name}}</option>
      @endforeach
    </select>
  </div>
            
                <div class="col-md-12  ">
                    <button type="submit" class=" btn btn-info w-100">create</button>
                </div>
                </div>
 
        </div>
    </div>
</form>
@endsection