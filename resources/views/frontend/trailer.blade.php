@extends('frontend')
@section('content1')

 <h1 class="ml15 my-5" align="center">
  <span class="text-danger word">New</span>
  <span class="text-danger word">Trailer</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<div class="container my-5">
	<div class="row">
		<iframe class="col-lg-6" width="560" height="315" src="https://www.youtube.com/embed/WO_FJdiY9dA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<iframe  class="col-lg-6" width="560" height="315" src="https://www.youtube.com/embed/vOUVVDWdXbo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	</div>
	<div class="row my-5">
		<iframe class="col-lg-6"width="560" height="315" src="https://www.youtube.com/embed/WHXxVmeGQUc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe class="col-lg-6"width="560" height="315" src="https://www.youtube.com/embed/fEsFXBdWPmI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>


<div class="row my-5">
		<iframe class="col-lg-6" width="560" height="315" src="https://www.youtube.com/embed/EbSd4HM4JWU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe class="col-lg-6" width="560" height="315" src="https://www.youtube.com/embed/2AUmvWm5ZDQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    delay: 10000
  });

  
  </script>
@endsection
