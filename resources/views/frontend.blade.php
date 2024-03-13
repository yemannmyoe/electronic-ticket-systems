<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('moviefrontend/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('moviefrontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('moviefrontend/js/bootstrap.bundle.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('moviefrontend/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('moviefrontend/style1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('select2/css/select2.min.css')}}">
  <script type="text/javascript" src="{{asset('moviefrontend/custom.js')}}"></script>
</head>
<body style="background-color:black">
<style type="text/css">

  .star {
  animation: star 10s ease-out infinite;
}
.wars {
  animation: wars 10s ease-out infinite;
}
.byline span {
  animation: spin-letters 10s linear infinite;
}
.byline {
  animation: move-byline 10s linear infinite;
}

/* Keyframes */
@keyframes star {
  0% {
    opacity: 0;
    transform: scale(1.5) translateY(-0.75em);
  }
  20% {
    opacity: 1;
  }
  89% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: translateZ(-1000em);
  }
}

@keyframes wars {
  0% {
    opacity: 0;
    transform: scale(1.5) translateY(0.5em);
  }
  20% {
    opacity: 1;
  }
  90% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: translateZ(-1000em);
  }
}

@keyframes spin-letters {
  0%, 10% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  30% {
    opacity: 1;
  }
  70%, 86% {
    transform: rotateY(0);
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}

@keyframes move-byline {
  0% {
    transform: translateZ(5em);
  }
  100% {
    transform: translateZ(0);
  }
}

/* Make the 3D work on the container */
.starwars-demo {
  perspective: 800px;
  transform-style: preserve3d;
}

/* General styles and layout */
body {
  background: #000 url(//cssanimation.rocks/demo/starwars/images/bg.jpg);
}

.starwars-demo {
  height: 17em;
  left: 50%;
  position: absolute;
  top: 53%;
  transform: translate(-50%, -50%);
  width: 34em;
}

.byline span {
  display: inline-block;
}

/*img {
  width: 100%;
}*/

.star, .wars, .byline {
  position: absolute;
}

.star {
  top: -0.75em;
}

.wars {
  bottom: -0.5em;
}

.byline {
  color: #fff;
  font-family: "ITC Serif Gothic", Lato;
  font-size: 2.25em;
  left: -2em;
  letter-spacing: 0.4em;
  right: -2em;
  text-align: center;
  text-transform: uppercase;
  top: 29%;
}

    div#carouselExampleFade img

    
    {
     width:60%;
     margin:0 auto;
     height:500px;
     object-fit:cover;
   }
div#cool1 a {
    color:white;
  }

  div#cool2 a {
    color:white;
  }
  .ml15 {
  font-weight: 800;
  font-size: 3.8em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
}

.ml15 .word {
  display: inline-block;
  line-height: 1em;
}
.ml1 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml1 .letter {
  display: inline-block;
  line-height: 1em;
}

.ml1 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml1 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: #fff;
  transform-origin: 0 0;
}

.ml1 .line1 { top: 0; }
.ml1 .line2 { bottom: 0; }

body
{
  overflow-x:hidden;
}
.hidden-things{
  position:absolute;
  left:100px;
  width: 50px;
  height:50px;
  opacity:0;
}
  
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"><img src="{{asset('moviefrontend/image/nn.png')}}" style="width:100px; height:40px;">
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto " >
      <li class="nav-item active ">
        <a class="nav-link text-light" href="{{route('index')}}"><h5>Home</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link text-light" href="{{route('about')}}"><h5>About</h5></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link text-light" href="{{route('trailer')}}"><h5>Trailer</h5></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('contact')}}"><h5>Contact</h5></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('movies.index')}}"><h5>Admin</h5></a>
      </li>
         </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="modal fade" id="card1Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form>

                  <div class="form-group">
                   <label for="username">Card Number</label>
                   <input type="number" name="" class="form-control col-lg-6" id="username">
                   <label for="email">Card Verification Code</label>
                   <input type="email" name="" class="form-control col-lg-6" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control col-lg-6" id="password">
                 </div>
           <div class="colorlib-partner my-2">
      <div class="container">
        <div class="row">
           </div>
        <div class="row my-2">
          <div class="col partner-col text-center">
            <img src="{{asset('moviefrontend/image/visa.svg')}}" class="img-fluid" alt="">
          </div>

          <div class="col partner-col text-center">
            <img src="{{asset('moviefrontend/image/mm.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col partner-col text-center">
            <img src="{{asset('moviefrontend/image/pp.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col partner-col text-center">
            <<img src="{{asset('moviefrontend/image/ww.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col partner-col text-center">
            <<img src="{{asset('moviefrontend/image/ok.png')}}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div>

<div class="modal"  id="card2Modal"tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>We will sent a ticket to your email very soon</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary modalClose" >Close</button>

        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="cardoneModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visa Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('moviefrontend/image/visa.svg')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <form>

                  <div class="form-group">
                   <label for="username">Card Number</label>
                   <input type="text" name="" class="form-control" id="username">
                   <label for="email">Card Varifiction Code</label>
                   <input type="email" name="" class="form-control" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control" id="password">
                 </div>

                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div></div>

 <div class="modal fade" id="cardoneModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Master Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('moviefrontend/image/mm.png')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <form>

                  <div class="form-group">
                   <label for="username">User Name</label>
                   <input type="text" name="" class="form-control" id="username">
                   <label for="email">Email</label>
                   <input type="email" name="" class="form-control" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control" id="password">
                 </div>

                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div></div>




  
 
           
  <!-- Footer -->
           
  <!-- Footer -->






<div class="modal fade" id="cardtwoModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Master Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('moviefrontend/image/mm.png')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <form>

                  <div class="form-group">
                   <label for="username">Card Number</label>
                   <input type="text" name="" class="form-control" id="username">
                   <label for="email">Card Varification Number</label>
                   <input type="email" name="" class="form-control" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control" id="password">
                 </div>

                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div></div>




   
 @yield('content1')
           
  <!-- Footer -->

<div class="modal fade" id="cardthreeModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay Pal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('moviefrontend/image/pp.png')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <form>

                  <div class="form-group">
                   <label for="username">Card Number</label>
                   <input type="text" name="" class="form-control" id="username">
                   <label for="email">Card Varication Numer</label>
                   <input type="email" name="" class="form-control" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control" id="password">
                 </div>

                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div></div>



<div class="modal fade" id="cardfourModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wave Pay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('moviefrontend/image/ww.png')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <form>

                  <div class="form-group">
                   <label for="username">Card Number</label>
                   <input type="text" name="" class="form-control" id="username">
                   <label for="email">Card Varication Code</label>
                   <input type="email" name="" class="form-control" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control" id="password">
                 </div>

                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div></div>



<div class="modal fade" id="cardfiveModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ok Dollar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{asset('moviefrontend/image/ok.png')}}" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <form>

                  <div class="form-group">
                   <label for="username">Card Number</label>
                   <input type="text" name="" class="form-control" id="username">
                   <label for="email">Card Varifcation Number</label>
                   <input type="email" name="" class="form-control" id="email">
                   <label for="password">Password</label>
                   <input type="password" name="" class="form-control" id="password">
                 </div>

                 <div class="offset-2 col-8 offset-2">

                  <button type="submit" data-toggle="modal" data-target="#card2Modal"  class="btn btn-primary btn-block close" data-dismiss="modal" aria-label="Close">

                   Submit
                 </button>

               </div>

             </form>

       </div>

     </div>
   </div></div></div></div></div></div>

<footer class="bg-dark mt-2">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script type="text/javascript" src="{{asset('select2/js/select2.min.js')}}"></script>

<!-- Footer -->
</body>
<!-- <script>
function bigImg(x) {
  x.style.width = "400px";
}

function normalImg(x) {
  x.style.width = "390px";
}
</script> -->
 @yield('script')
 <script type="text/javascript">
   $(document).ready(function(){
    $('.modalClose').click(function(){
      $('#card2Modal').modal('hide');
      window.location.href="/";
    })
   })
 </script>

</html>