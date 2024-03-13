@extends('frontend')
@section('content1')

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="icon" type="jpg" href="1.png" size="16*16">
	

<style type="text/css">
	body{
  overflow-x: hidden;
}
.hidden-thing
{
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}
div#cool1 a {
color:white;
}

div#cool2 a {
color:white;
}

div#carouselExampleIndicators img
    {
     width:100%;
     margin: 0 auto;
     height:500px;
     object-fit:cover;
   }
</style>

</head>
<body>


		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" class="col-lg-12 col-md-12 col-sm-12 my-3">
					<img src="{{asset('moviefrontend/image/slide1.jpg')}}" class="d-block w-100" alt="..." >
				</div>
				<div class="carousel-item" class="col-lg-12 col-md-12 col-sm-12 my-3">
					<img src="{{asset('moviefrontend/image/slide2.jpg')}}" class="d-block w-100" alt="..." >
				</div>
				<div class="carousel-item" class="col-lg-12 col-md-12 col-sm-12 my-3">
					<img src="{{asset('moviefrontend/image/slide3.jpeg')}}" class="d-block w-100" alt="..." >
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		<br><br>
		<div class="container">
			<div class="row">

<!-- 	<div class="container" style="padding:20px;">
-->		<div class="col-lg-6 col-md-6 col-sm-12">


	<form>
		<h1 class="text-danger my-5">Contact Us</h1>
		<div class="form-group">

<!--<label for="username" hidden="email">User Name</label>-->		
	<input type="text" name="" class="form-control my-3" placeholder="Your Name" id="username">

<!--<label for="username">Email</label>-->			
	<input type="text" name="" class="form-control my-3" id="email" placeholder="Email">
	
<!--<label for="username">Password</label>-->
	<textarea class="form-control my-3" type="text" name="" class="form-control my-3" placeholder="Messages" id="messages"></textarea>
</div>

<div class="mt-4">
	<button type="submit" class="btn btn-danger btn-block">
			Contact
									</button>
</div>

</form>
</div>
<!-- </div>
-->

<div class="col-lg-6 col-md-12 col-sm-12 my-5">


	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.605988127587!2d96.12316124915151!3d16.84589172257581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1953fc49fb755%3A0x45b19605a43c3143!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1580375587634!5m2!1sen!2smm" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


</div>
</div>

</div>

			</body>
		</body>
		</html>


@endsection