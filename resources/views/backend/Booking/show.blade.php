@extends('frontend')
@section('content1')


<div class="container-fluid">
	<h2>Information of {{$booking->id}} </h2>

	<div class="row">
		<div class="col-md-12">
			 <h4>{{$booking->id}}</h4>
			<br>
			 <h4>{{$booking->timeslot->starttime}}</h4>
			<br>
			<h4>{{$booking->showings->halls->number}}</h4>
			<br>
		 <h4>{{$booking->customers->name}}</h4>
			<br>
		 <h4>{{$booking->bookingdate}}</h4>
			<br>
		 <h4>{{$booking->seatnumber}}</h4>
			<br>

			<h4>{{$booking->totalqty}}</h4>
			<br>
            


			<h4>{{$booking->price}}</h4>
			<br>
		
		</div>
	</div>
</div>
@endsection     
