@extends('backend')
@section('content1')
 <style type="text/css">
	.column {
  float: left;
  width: 30%;
  padding:30px;
}
 </style>
<h1 class="h3 mb-2 text-gray-800"></h1> 
 <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h1 class="title">upcomming Table</h1>
              </div>
              <div class="col-2">
     <a href="{{route('upcommings.create')}}" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>Add New</a>
                  </div>

          </div>

              
                
             <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Movie</th>
      <th scope="col">Start Date</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
  	@foreach($upcommings as $row)
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->movie->name}}</td>
      <td>{{$row->startdate}}</td>

      <td>  <form method="post" action="{{route('upcommings.destroy',$row->id)}}" class="column" onsubmit="return confirm('Are You Sure To Want To Delete?')">
            	@csrf
            	@method('DELETE')
            	<button type="submit"class="btn btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button>
           </form>
      </td>
      
    </tr>
        @endforeach

  </tbody>
</table>


      </div>
  </div></div>

@endsection