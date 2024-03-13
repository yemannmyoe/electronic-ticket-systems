@extends('frontend')
@section('content1')
<h1 class="ml15 my-5" align="center">
  <span class="text-danger word">Movie</span>
  <span class="text-danger word">Detail</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        
    @foreach($upcommings as $row)

      <div class="container my-5">
        <div class="row">
          <div class="col-lg-4">
          <img src="{{asset($row->movie->photo)}}" width="300px">
          </div>
          <div class="col-lg-8">
            <h1 class="text-light">{{$row->movie->name}}</h1>
            <h6 class="text-light">{{$row->status}}</h6>
            <h6 class="text-light">{{$row->startdate}}</h6>
          </div>
        </div>
      </div>

            @endforeach
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
    delay: 1000
  });
  </script>
@endsection

