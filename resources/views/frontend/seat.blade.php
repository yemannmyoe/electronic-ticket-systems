@extends('frontend')
@section('content1')
 <style>
        .seat {
            height: 40px;
            width: 40;
           cursor:pointer;
           background-color:black ;
           text-align: center


        }

        .seat1 {
            height: 40px;
            width: 80px;
           cursor:pointer;
           background-color:white;
                      text-align: center

        }
        .seat2 {
            height: 40px;
            width:  40px;
           cursor:pointer;
           background-color:white;
                      text-align: center

        }

        .seat3 {
            height: 40px;
            width: 40px;
           cursor:pointer;
           background-color:white;
                      text-align: center


        }
        .seatt {
            height: 40px;
            width: 40px;
           cursor:pointer;
           background-color:white;
                      text-align: center


        }
        .seat1 {
            height: 40px;
            width: 80px;
           cursor:pointer;
           background-color:white;
            text-align: center

        }
        .walk{
          text-align:center;
        }
        .screen
        {
          height: 200px;
            width: 1000px;
           cursor:pointer;
           background-color:white;
          text-align: center;



        }
        
        .walk{
            padding-right:70px;
        }
        
        table 
        {
          margin-top: 80px;
        }
        table.cool{
          margin-top:20px
        }
        table.weed{
          margin-top:20px
        }
        table.die
        {
           margin-top:5px
       
        }

/*.addtocart {
  padding: 10px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.addtocart:hover {background-color: #3e8e41}

.addtocart:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
*/
    </style>
   
    
    
   

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($showings as $row)
    <div class="carousel-item active">
      <img src="{{$row->movie->photo}}" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
        <h1>Screen</h1>
        <h5>A,B,C 3000</h5>
        <h5>D,E,F 5000</h5>
        <h5>G,H 8000</h5>
      </div>
    </div>
    
    @endforeach
    </div>
  
</div>
<!-- <h1 class="ml15" align="center">
  <span class="text-danger word">Choose</span>
  <span class="text-danger word">Your</span>
    <span class="text-danger word"> Seat</span>

</h1>
 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

   <table align="center" id="formABC">
     @foreach($seats as $row)

              <tr>

                
                <td class="walk" ></td>


                @php 
                
                for($i=1; $i<=12; $i++) { 
                @endphp
                <td><div class="seat mx-2 my-3"><input type="button" data-name="{{$row->label}}" data-price="{{$row->price}}" data-id="{{$row->label}}{{$i}}" class="btn btn-outline-danger addtocart" value="{{$row->label}}{{$i}}" id="btnSubmit"
                  @if($all_seats[$row->label.$i] == true)
                    {{'disabled'}}
                  @endif
                  >
                </div></td>

                  @if($i==2 || $i==10)
                    <td class="walk" ></td>
                  @endif

                @php } @endphp


              </tr>
              
            @endforeach
        </table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript">
// anime.timeline({loop: true})
//   .add({
//     targets: '.ml15 .word',
//     scale: [14,1],
//     opacity: [0,1],
//     easing: "easeOutCirc",
//     duration: 800,
//     delay: (el, i) => 800 * i
//   }).add({
//     targets: '.ml15',
//     opacity: 0,
//     duration: 3000,
//     easing: "easeOutExpo",
//     delay: 1000
//   });
       
  ////////////////////////////////////////////////
  $(document).ready(
    function(){
      getData();

       allSeats = document.querySelectorAll('.seat');
        for (var i = 0; i < allSeats.length; i++) {
            var seat = allSeats[i];
            //console.log(seat);
            seat.addEventListener('click', function () {
                var bgclr = this.style.backgroundColor;
                //console.log(seat);
                if(bgclr =='white'){
                    this.style.backgroundColor = 'black';
                  }
                else
                    this.style.backgroundColor = 'white';
            }, false);
        }






        function multiply()
        {
          a=Number(document.getElementById('Qty').value);
          b=Number(document.getElementById('PRICE').value);
          c=a * b;

          document.getElementById('TOTAL').value = c;
        }



      $(".addtocart").click(function(){

          var id = $(this).data('id');
          //console.log(id);
          var name= $(this).data('name');
          var price= $(this).data('price');

          // alert(id+name+price);

          var crt={
            id:id,
            name:name,
            price:price,
            qty:1

          }
      var seatString = localStorage.getItem("cart");
      var seatArray;
      if (seatString==null)
       {
        seatArray = Array();
       }
       else
       {
        seatArray = JSON.parse(seatString);
       }
       //console.log(seatString);

      var status=false;
      $.each(seatArray,function(i,v)
      {
      //console.log(seatArray);
      // console.log(name);
        //console.log(id);
        //console.log(typeof(v));
        if (v.id==id) {

        status=1
        v.qty++;
        deleteseat = seatArray.findIndex(element => element.id==id);
          //seatArray.splice($.inArray(id,seatArray),1);

          
        }
        
      })
       // console.log(status);
        // false
        if (!status) 
        {
          //console.log(status);
          seatArray.push(crt);
        }else{
          seatArray.splice(deleteseat,1);
        }

        //seatArray.push(crt);
        var seatData = JSON.stringify(seatArray);

        localStorage.setItem("cart",seatData);
        getData();
        });
//////////////////////////////////////////////

     
/////////////////////////////////////////////////
$("#tbody").on ('click','.delete',function()
{
  // alert('Are you sure delete?');
  var id = $(this).data("id");
  //alert(id);
  var ans = confirm("Your Sure delete");
  if (ans)
   {
    var seatString=localStorage.getItem(
      "cart");
    if (seatString) 
    {
      var seatArray=JSON.parse(
        seatString);
      seatArray.splice(id,1);

      var Data = JSON.stringify(seatArray);

      localStorage.setItem("cart",Data);
      getData();
    }
   }
});


// \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$(document).ready(function () {
            getData();
            $("#items").hide();
    });

function getData()
{
  var seatString = localStorage.getItem("cart");
  // var seatArray;

  if (seatString)
   {
    var seatArray=JSON.parse(seatString);

   // console.log(seatArray);

    var html='';var total=0; var subtotal=0;
    $.each(seatArray,function(i,v){
      var id=v.id;
      var name = v.name;
      var price = v.price;
      var qty = v.qty;
      var subtotal= price*qty;
       total+=subtotal;
      console.log(total);
      


      var j= 1;

      html +=`<tr class="table-light">
        <td>${j++}</td>
        <td>${id}</td>
        <td>${price}</td>
        <td>
        ${qty}
        </td>
        <td>${subtotal}</td>
        <td>
        <button class=" delete btn btn-danger" data-id=${i}>Delete</button>
        </td>

          </tr>`;

          

    

    });

html+=`<tr class="table-light">
        <td colspan="5">Total</td>
        <td>${total}</td>
      </tr>
      
     <tr>
    <td colspan="7">
          <button type="submit" class="btn btn-success btn-lg btn-block">Continue</button>
      
     </tr>`;


   
$("#tbody").html(html);


        
   }

   if (seatString)
   {
    var seatArray=JSON.parse(seatString);

   // console.log(seatArray);

    var html='';var total=0; var subtotal=0;
    $.each(seatArray,function(i,v){
      var id=v.id;
      var name = v.name;
      var price = v.price;
      var qty = v.qty;
      var subtotal= price*qty;
       total+=subtotal;
      


      var j= 1;

      html +=`<tr class="table-light">
        <td>${j++}</td>
        <td>${id}</td>
        <td>${price}</td>
        <td>
        ${qty}
        </td>
        <td>${subtotal}</td>
        <td>
        <button class=" delete btn btn-danger" data-id=${i}>Delete</button>
        </td>

          </tr>`;

          

    

    });

html+=`<tr class="table-light">
        <td colspan="3">Total</td>
        <td colspan="3">${total}</td>
      </tr>
      
     <tr>
    <td colspan="7">
        <button type="submit" id="checkout"class="btn btn-success btn-lg btn-block save">Continue</button>
       
     </tr>`;


   
$("#tbody").html(html);      
   }
  var html='';var total=0; var subtotal=0;
    $.each(seatArray,function(i,v){
      var id=v.id;
      console.log(id);

      html +=`${id},`;
    });
 $(".input_seat").val(html);

 var html='';var qty=0; var subtotal=0;
    $.each(seatArray,function(i,v){
      var i = 10;
      qty += v.qty;
    });
      html+=`${qty}`;

 $(".input_qty").val(html);

var html='';var total=0; subtotal=0;
    $.each(seatArray,function(i,v){
      var price = v.price;
      var qty = v.qty;
     var subtotal= price*qty;
       total+=subtotal;
    });
      html+=`${total}`;

 $(".input_price").val(html);

}



// \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

//increase


    });


   localStorage.clear();



</script>
  
<body>

<form  method="post" action="{{route('bookings.store')}}" enctype="multipart/form-data">
  @csrf  
     <div class="container col-6 my-5">
      <div class="form-group row">
    <label class="col-lg-2 text-light"><b>Customer</b></label>
        <div class="col-sm-4">
    <select name="customer" class="form-control">
      @foreach($customers as $row)
      <option value="{{$row->id}}">{{$row->email}}</option>
      @endforeach
    </select>
  </div>
  <label class="col-lg-1 text-light"><b>Movie</b></label>
        <div class="col-sm-5">
    <select name="showings" class="form-control">
      @foreach($showings as $row)
      <option value="{{$row->id}}">{{$row->movie->name}}-{{$row->hall->number}}</option>
      @endforeach
    </select>
  </div>
</div>


    
<div class="form-group row">
    <label class="col-sm-2 text-light"><b>Time</b></label>
        <div class="col-sm-4">
    <select name="timeslots" readonly="readonly" class="form-control">
      @foreach($timeslots as $row)
   <option  value="{{$row->id}}" 
    @if($row->id == $chosenID)
    selected
    
    @endif

    >{{$row->starttime}}</option>
      @endforeach
    </select>
  </div>
    <label for="inpuStdate" class="col-sm-1 col-form-label text-light"><b>Date</b></label>
    <div class="col-sm-5">
      <input type="date"  class="form-control" id="inputStartdate" name="bookingdate">
     </div>
</div>
  
  
  <div class="form-group row" >
    <label for="inputAddress"  class="col-sm-2 col-form-label text-light"><b>Seat Number</b>
   </label>
    <div class="col-sm-4" id="seat" >
      <input type="text" class="form-control input_seat"  name="seatnumber" value="">
    </div>
    <label for="inputAddress" class="col-sm-1 col-form-label text-light"><b>Quantity</b></label>
    <div class="col-sm-5" id="qty">
      <input type="number" class="form-control input_qty" id="inputAddress" name="totalqty" value="">
    </div>
  </div>
    

  <div class="form-group row">
    <label for="inputAddress" class="col-sm-3 col-form-label text-light"><b>Price</b></label>
    <div class="col-sm-6" id="price">
      <input type="number" class="form-control input_price" id="inputAddress" name="price" value="" >
    </div>
  </div>


  <div class="form-group row" id="items">
    <label class="col-sm-4"><b>Seat</b></label>
    <select name="seat" class="form-control">
      @foreach($seats as $row)
      <option value="{{$row->id}}">{{$row->label}}</option>
      @endforeach
    </select>
  </div>
    </div>      
  <div align="center">

</div>
     </div>


  <div id="table1">
  
  <table border="1" cellpadding="10" cellspacing="0" align="center">

    <thead>

      <tr class="table-light">
        <th>No.</th>
        <th>name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub Total</th>
        <th>Action</th>
      

      </tr>
      


    </thead>
    <tbody id="tbody">


     
    </tbody>
    
  </table>
  
  </div>


                 </form>

                
 
  <!-- <table align="center">
  <tr>
    <td>
 <input type="text"name="Qty" id="Qty" onKeyUp="multiply()" >
          

 <input align="center" name="PRICE" id="PRICE" value="{{$row->price}}">

<input type="text" name="TOTAL" id="TOTAL"><br>

<button type="button" class="btn btn-dark btn-lg btn-block">Continue</button>

</td>
</tr>
</table>
 -->


@endsection     



