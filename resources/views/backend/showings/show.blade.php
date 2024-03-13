@extends('backend')
@section('content1')
<table class="table">
	<thead>
		<th>Movie Name</th>
		<th>StartDate</th>
		<th>End Date</th>
		<th>Status</th>
	</thead>
<tr class="table-warning">
	
	<td><b class="text-warning">{{$showing->movie->name}}<br><img src="{{asset($showing->movie->photo)}}" width="200px"></b>
			<br></td>
	<td><b class="text-warning">{{$showing->startdate}}</b>
			<br></td>
	<td><b class="text-warning">{{$showing->enddate}}</b>
			<br></td>
	<td><b class="text-warning">{{$showing->status}}</b>
			<br></td>

</tr>

</table>


@endsection