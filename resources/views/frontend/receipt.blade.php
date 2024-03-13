@extends('frontend')
@section('content1')
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Arvo);
 /* body{
        background:url(https://subtlepatterns.com/patterns/broken_noise.png);
        font-family:Arvo;
    }*/
    .box{
        margin:0px auto;
        margin-top:80px;
        background:#FFF9EE url(https://subtlepatterns.com/patterns/lightpaperfibers.png);
        color:#333;
        text-transform:uppercase;
        padding:8px;
        width:300px;
        font-weight:bold;
        text-shadow:0px 1px 0px #fff;
        font-family:"arvo";
        font-size: 11px;
        border-left: 1px dashed rgba(51, 51, 51, 0.5);
        -webkit-filter: drop-shadow(0 5px 18px #000);
    }

  .inner{
        border: 2px dashed rgba(51, 51, 51, 0.5);
        min-height:100px;
        padding:8px;
        
    }
    .inner h1{
        padding:5px 0px;
        margin:0px;
        font-size:18px;
        border-bottom: 1px solid rgba(51, 51, 51, 0.3);
        text-align:center;
    }
    .info{
        width:100%;
        margin-top:5px;
    }
    .info .wp{
        float: left;
        padding: 5px;
        width: 83px;
        text-align: center;
    }
    .info .wp h2{
        margin: 8px;
    }
    .total{
        border-top: 1px solid rgba(51, 51, 51, 0.3);
    }
    
    .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
    .total h2{
        padding-left:115px;
        margin:10px 0px; 
        font-size: 15px;
    }
    .total p{float:right;margin:0px;margin-right: 15px;}
    
    a.buy{
        color:#fff;
        text-align:center;
        font-size:25px;
        text-decoration:none;
        display:block;
        width:200px;
        margin:0px auto;
        margin-top:50px;
        padding:5px;
        background:rgba(0,0,0,0.5);
    }


</style>

 <h1 class="ml15 my-5675" align="center">
  <span class="text-danger word">Your</span>
  <span class="text-danger word">Ticket</span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<div class="box">
        <div class='inner'>
        <h1><img src="{{asset('moviefrontend/image/nn.png')}}" style="width:80px; height:30px;"></h1>

        <div class='info clearfix'>
                
            <div class='wp'>Quantity<h2>{{$booking->totalqty}}</h2></div>
            <div class='wp'>Seat Number<h4>{{$booking->seatnumber}}</h4></div>
            <div class='wp'>Time<h2>{{$booking->timeslot_id}}</h2></div>
 
        

        </div>          
        
        <div class='wp' align="center">Date<h4>{{$booking->bookingdate}}</h4></div>


         @foreach($showings as $row)
        <div class='wp' align="center">Movie<h4>{{$row->movie->name}}</h4></div>
        @endforeach


        <div class='total clearfix'>
        
            
            <h2>Total : <p>{{$booking->price}}:ks</p></h2>
            

        </div>
        </div>

    </div>
    <div class="container my-3" align="center">
      <a href="" data-toggle="modal" data-target="#card1Modal"  class="btn btn-danger">Continue</a>
    </div>

<h1 class="my-5" align="center">
  <span class="text-danger word">Choose</span>
  <span class="text-danger word">Payment Type</span>
</h1>
  <div class="colorlib-partner my-5">
      <div class="container">
        <div class="row">
           </div>
        <div class="row my-2">
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardoneModal" class=""><img src="{{asset('moviefrontend/image/visa.svg')}}" class="img-fluid" alt=""></a>
          </div>

          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardtwoModal" class=""><img src="{{asset('moviefrontend/image/mm.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardthreeModal" class=""><img src="{{asset('moviefrontend/image/pp.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardfourModal" class=""><img src="{{asset('moviefrontend/image/ww.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col partner-col text-center">
            <a href="" data-toggle="modal" data-target="#cardfiveModal" class=""><img src="{{asset('moviefrontend/image/ok.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>



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

