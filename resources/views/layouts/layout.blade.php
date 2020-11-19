<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/jpg" href="assets/images/logo/logo.ico"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/reviews.css">
     <link rel="stylesheet" href="assets/css/formstyle.css">
     <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
@yield('content')

<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/reviews.js"></script>
	<!-- Slimscroll JavaScript -->
  <script src="assets/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="assets/js/init.js"></script>
<script>
    AOS.init();
  </script>  
</body>
</html>