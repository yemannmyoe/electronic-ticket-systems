@extends('backend')
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

 <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h1 class="title">Up Comming Create</h1>
              </div>
             
              <div class="card-body">
<form class="col-lg-11" method="post" action="{{route('upcommings.store')}}" enctype="multipart/form-data">@csrf
                  
                  <div class="row">
                    <div class="form-group row">
    <label class="col-sm-2 text-warning"><b>Choose Movie</b></label>
    <select name="movie" class="form-control">
      @foreach($movies as $row)
      <option value="{{$row->id}}">{{$row->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group row">
    <label for="inpuStdate" class="col-sm-2 col-form-label text-warning"><b>Start Date</b></label>
    <div class="col-sm-2">
      <input type="date"  class="form-control" id="inputStartdate" name="startdate">
     </div>
  </div>
               <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label text-warning"><b>Status</b></label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="inputAddress" name="status"></textarea>
      
    </div>
     
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

@endsection