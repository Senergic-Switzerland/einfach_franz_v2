<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo/logo.ico')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="assets/css/all.min.css">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('assets/css/audiostyle.css')}}">
</head>
<body>
@yield('content')

<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/audio.js')}}"></script>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</body>
</html>