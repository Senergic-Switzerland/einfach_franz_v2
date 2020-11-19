@extends('layouts/layout')
@section('title')
Login
@endsection
@section('content')
<form action="{{url('/Login')}}" method="post" >
    @csrf
	<div class="register">
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
                    <h3 class="my-3"> Login</h3>
                </div>
                <div class="col-md-12 my-3"">
                <div class="form-group">
               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                 </div>
                </div>
              
                <div class="col-md-12 text-center ">
                    <button type="submit" id="btn" class="w-50  mb-3">Login</button>
                </div>
                </div>
 
        </div>
    </div>
</form>
@endsection