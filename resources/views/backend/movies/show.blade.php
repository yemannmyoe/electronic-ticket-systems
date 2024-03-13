@extends('backend')
@section('content1')




<div class="container-fluid">
	<h2 class="text-warning">Information of {{$movie->name}} </h2>

	<div class="row">
		<div class="col-md-12">
			Name :<b class="text-warning">{{$movie->name}}</b>
			<br><br>
			Duration :<b class="text-warning">{{$movie->duration}}</b>
		<br><br>
			Restinction : <b class="text-warning">{{$movie->restriction}}</b>
			<br><br>
			Rating :<b class="text-warning">{{$movie->rating}}</b>
		    <br><br>
			
			<img src="{{asset($movie->photo)}}" width="500px">
     
		</div>
	</div>
</div>
@endsection