@extends('backend')
@section('content1')

<div class="container-fluid">
	<h2>Information of {{$customer->name}} </h2>

	<div class="row">
		<div class="col-md-12">
			Name : <h4>{{$customer->name}}</h4>
			<br>
			Phone : <h4>{{$customer->phone}}</h4>
			<br>
			Address : <h4>{{$customer->address}}</h4>
			<br>
			Email : <h4>{{$customer->email}}</h4>
			<br>

		
     
		</div>
	</div>
</div>
@endsection