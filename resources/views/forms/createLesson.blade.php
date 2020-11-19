@extends('layouts/layout')
@section('title')
Sign Up
@endsection
@section('content')
<form action="{{url('/create')}}" method="post" >
    @csrf
	<div class="create ">
        <div class="container">
            <div class="row ">
            <div class="col-md-12">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            </div>
                <div class="col-md-12 ">
                    <h3 class="my-3"> create Lesson</h3>
                </div>
                <div class="col-md-6 my-3">
                <input class="form-control" type="text" placeholder=" Name" name="lesson_name">
                </div>
            
                <div class="col-md-12  ">
                    <button type="submit" class=" btn btn-info w-50">create</button>
                </div>
                </div>
 
        </div>
    </div>
</form>
@endsection