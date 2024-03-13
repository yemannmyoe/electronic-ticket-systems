@extends('frontend')
@section('content1')
          <!DOCTYPE html>
<html>
<head>
	<title>About</title>
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
    div#carouselExampleIndicators img
    {
     width:100%;
     margin: 0 auto;
     height:500px;
     object-fit:cover;
   }
   div#cool1 a {
    color:white;
  }

  div#cool2 a {
    color:white;
  }

  #conuter
  {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{asset('moviefrontend/image/slide3.jpeg')}}");
    background-size:cover;
    background-position: center;
    background-attachment: fixed;
    padding: 35px;
  }


</style>
</head>
<body>
  

  <div class="container">

    <h1 class="text-danger my-5" align="center">About Us</h1>


   <hr class="my-5" id="">

   <div class="container my-5">
    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-12">
        <img src="{{asset('moviefrontend/image/seat2.jpg')}}" class="img-fluid img-thumbnail rounded" style="height: 700px;">
      </div>
      <div class="col-lg-8 col-md-7 col-sm-12">
        <h3 align="center">-Enjoy-</h3>
        <div class="row my-5">

          <div class="col-lg-2 col-md-3 col-sm-6">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x" style="color:red"></i>
              <i class="fas fa-ticket-alt fa-stack-1x fa-inverse"></i>
            </span>
          </div>

          <div class="col-lg-10  col-md-9 col-sm-6">

            <h4 class="text-danger">What Is NVIDIA?</h4>
            <p class="text-secondary">Navidia is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.

			You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</p>
          </div>
        </div>

        <div class="row my-5">

          <div class="col-lg-2 col-md-3 col-sm-6">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x" style="color:red"></i>
            <i class="fas fa-history fa-stack-1x fa-inverse"></i>
            </span>
          </div>

          <div class="col-lg-10  col-md-9 col-sm-6">

            <h4 class="text-danger">Our Story</h4>
            <p class="text-secondary">Navidia is one of Myanmar's leading multiplex cinema exihibitors. JCGV brand started offering services since 2009 at the capital city of Myanmar, Naypyitaw. Its expansion to Yangon has brought success in the entertainment industry fulfilling its goal to provide unique cinema experience.

			It is the first cinema with multiplex concept, international standard facilities and Digital 3D technology. It has the most modern state-of-the –art multiplex theater in the country and also set new standards of comfort and convenience with the international standard projection system, comfortable seating and advance computerized ticketing system.

			Through various innovations, impeccable customer services offered and latest technology, JCGV is able to provide the ultimate movie experience to all audiences.
          </div>
        </div>

        <div class="row my-5">

          <div class="col-lg-2 col-md-3 col-sm-6">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x" style="color:red"></i>
              <i class="fas fa-ban fa-stack-1x fa-inverse"></i>
            </span>
          </div>

          <div class="col-lg-10  col-md-9 col-sm-6">

            <h4 class="text-danger">How do I cancle?</h4>
            <p class="text-secondary">Nvidia is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</p>  
          </div>
        </div>

      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
      </div>
    </div>
  </div>

  <hr class="my-5" id="">

  <div class="row">

   <div class="col-ld-12 col-md-12 col sm-12">

    <h4 class="text-danger">Our Values</h4>
    <p>We provide opportunities for smaller restaurants and social businesses to partner with us by giving them an opportunity to showcase their menus and increase their sales through waiving listing fees..</p>

  </div>
</div>
</div>

<div id="conuter">
  <div class="container p-5">
    <div class="row text-white text-center text-danger">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h1>1,00</h1>
        <p>Movie</p>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h1>1,000+</h1>
        <p>Customer</p>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <h1>1M+</h1>
        <p>Flim</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cardoneModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In/Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-lg-6 col-md-12 col-sm-12">
        		<img src="a.gif" class="img-fluid">
        	</div>
        	<div class="col-lg-6 col-md-12 col-sm-12">

        		
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

               


           </div>
           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

             <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="" class="form-control" id="email">
               <label for="password">Password</label>
               <input type="password" name="" class="form-control" id="password">

               <input type="checkbox" name="" >
               <label for="rememberme">Remember Me</label>


             </div>
             <div class="offset-2 col-8 offset-2">

              <button type="submit" class="btn btn-danger btn-block">

               Login
             </button>

           </div>


         </form>

       </div>

     </div>
   </div></div></div></div></div></div>




<br>


  
</body>
</html>
@endsection

