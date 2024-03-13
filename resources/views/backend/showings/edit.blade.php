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
                <h1 class="title">Showing Create</h1>
              </div>
             
              <div class="card-body">
<form class="col-lg-11" method="post" action="{{route('showings.update',$showings->id)}}" enctype="multipart/form-data">
  @csrf    @method('PUT')

                  
                  <div class="row">
                    <div class="form-group row">
    <label class="col-sm-2">Choose Movie</label>
    <select name="movie" class="form-control">
      @foreach($movies as $row)
      <option value="{{$row->id}}"@if($showings->movie_id == $row->id){{'selected'}}@endif>{{$row->name}}</option>
      @endforeach
    </select>
  </div>


 <div class="form-group row">
    <label class="col-sm-2">Choose Hall</label>
    <select name="hall" class="form-control">
      @foreach($halls as $row)
      <option value="{{$row->id}}" 
        @if($showings->hall_id == $row->id){{'selected'}}@endif>{{$row->number}}
      </option>
      @endforeach
    </select>
  </div>
 
  <div class="form-group row">
    <label for="inpuStdate" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-2">
      <input type="date"  class="form-control" id="inputStartdate" name="startdate" value="{{($showings->startdate)}}">
     </div>
  </div>
  <div class="form-group row">
    <label for="inputEnddate" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-2">
      <input type="date"  class="form-control" id="inputEnddate" name="enddate" value="{{($showings->startdate)}}">
      </div>
  </div>
               <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="inputAddress" name="status" value="{{($showings->status)}}"></textarea>
      
    </div>
     
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

@endsection