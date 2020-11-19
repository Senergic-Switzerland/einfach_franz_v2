@extends('layouts/playlist')
@section('title')
Lesson {{$lesson->id}}
@endsection
@section('content')
<section class="downloads">
<nav aria-label="breadcrumb" role="navigation" >

  <ol class="breadcrumb">
    <div class="container">
      <div class="row">
    <li class="breadcrumb-item home"><a href="{{url('/')}}">
    <img src="{{asset('assets/images/logo/logo.png')}}" width="50" height="50" alt="logo" style="margin-right :10px;">
    Home
  </a></li>
  <li class="breadcrumb-item home"><a href="{{url('/downloads')}}">
    Downloads
  </a></li>
    
    <li class="breadcrumb-item active" aria-current="page">{{$lesson->lesson_name}}</li>


   <!-- <li class="btn-home ml-auto">Return to Home</li>-->


    </div>
</div>

  </ol>


</nav>
    
<div class="container my-5">

<div class="row" >


<table class="text-center m-auto ">

  <tbody>

  @foreach ($lesson->attachments as $attachment)
 <!-- <audio id="myAudio" preload="none">
  <source src="{{asset($attachment->audio)}}" type="audio/ogg">
</audio>
 <tr>-->
      <td >{{$attachment->name}}</td>
    <td class="float-right " ><a href="{{url($attachment->audio)}}" download><i class="material-icons" style="font-size:28px; color:#000;"<a>file_download</i>
  <!--  <td class="float-right" ><a id="play-pause-button" class="fa fa-play"></a></td>-->

</td>
    </tr>
  @endforeach

  </tbody>
</table>


</div>

       </div>
    </section>
@endsection