@extends('layouts/layoutdownloads')
@section('title')
Downloads
@endsection
@section('content')
<section class="downloads">
<nav aria-label="breadcrumb" role="navigation" >

  <ol class="breadcrumb">
    <div class="container">
      <div class="row">
    <li class="breadcrumb-item home"><a href="{{url('/')}}">
    <img src="assets/images/logo/logo.png" width="50" height="50" alt="logo" style="margin-right :10px;">
    Home

  </a></li>
    <li class="breadcrumb-item active" aria-current="page">Downloads</li>
   <!-- <li class="btn-home ml-auto">Return to Home</li>-->


    </div>
</div>

  </ol>


</nav>

       <div class="lessons">
       <div class="container">
       <div class="row ">
       @foreach($lessons as $lesson)
<div class="col-md-4 my-5 text-center">
<div class="card" style="width: 20rem;">
<div class="layout">
 <a href="{{url('show',$lesson->id)}}"> <img class="card-img-top" src="assets/images/1.jpg" alt="Card image cap"></a>
  <div class="view">
  <a href="{{url('show',$lesson->id)}}">  <i class='far fa-eye' style='font-size:30px'></i></a>
  </div>
</div>
  <div class="card-body">
    <h4 class="card-title">    <a href="{{url('show',$lesson->id)}}"> {{$lesson->lesson_name}}</a></h4>
  
  </div>
</div>
</div>
      
        @endforeach
                          </div>

                    </div>
       </div>
    </section>
@endsection