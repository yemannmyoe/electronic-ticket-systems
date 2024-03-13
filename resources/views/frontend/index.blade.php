@extends('frontend')
@section('content1')

 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('moviefrontend/image/mo.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('moviefrontend/image/t2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('moviefrontend/image/t3.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 

<div class="container col-lg-12 col-md-12 col-sm-6 my-5">
           <h1 class="ml15" align="center">
  <span class="text-danger word">Now</span>
  <span class="text-danger word">Showing</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        
 <div class="row mx-5" align="center">
                @foreach($showings as $row)

  <div class="column col-lg-12 col-md-12 col-sm-6 ">
    <a href="{{route('showdetail')}}"><img src="{{$row->movie->photo}}" width="800" align="center"></a>
    <h1 class="display-10 text-dark" align="center">{{$row->movie->name}}</h1>


  </div>

      @endforeach

</div>



  </div>

<div class="container col-lg-12 col-md-12 col-sm-6 my-5">
            <h1 class="ml15" align="center">
  <span class="text-danger word">Up</span>
  <span class="text-danger word">Comming</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  
        
 <div class="row" align="center">
                @foreach($upcommings as $row)

  <div class="column">
    <a href="{{route('upshowdetail')}}"><img src="{{$row->movie->photo}}" width="400px"></a>
    <h1 class="display-10 text-dark">{{$row->movie->name}}</h1>


  </div>
   @endforeach
</div>
</div>


  </div>
  <script type="text/javascript" >
    anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 4000
  });

  
  </script>
  
@endsection

