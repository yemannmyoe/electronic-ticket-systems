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
                <h1 class="title">Time Create</h1>
              </div>
             
              <div class="card-body">
<form class="col-lg-11" method="post" action="{{route('timeslots.store')}}" >@csrf
                  
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="text-warning"><b>Start Time</b></label>
                        <input type="text" class="form-control"  placeholder="Start Time" name="starttime">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label class="text-warning"><b>End Time</b></label>
                        <input type="text" class="form-control" placeholder="End Time" name="endtime">
                      </div>
                    </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

@endsection