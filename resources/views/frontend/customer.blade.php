@extends('frontend')
@section('content1')

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="col-12" action="{{route('customers.store')}}" method="post" >
  @csrf
  <div class="container col-6">
<h1 class="ml15" align="center">
  <span class="text-danger word">Customer</span>
  <span class="text-danger word">Register</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
          <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="text-light">Name</label>
      <input type="text" class="form-control" id="inputname" name="name" placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" class="text-light">Email</label>
      <input type="email" class="form-control" id="inputEmail4"name="email" placeholder="Email">
      <input type="hidden" name="chosenID" value="{{$chosenID}}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="text-light">Phone</label>
    <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="text-light">Address</label>
   <textarea type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St"></textarea>
     </div>
  


  <input type="hidden" name="bid" value="4">
    <button type="submit" class="btn btn-success btn-lg-4 my-5">Save Register</button>
        <a href="{{route('seat',$chosenID)}}" type="submit" class="btn btn-success btn-lg-4 my-5">Old User</a> 

</div>
</form>
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