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
<form class="col-lg-11" method="post" action="{{route('showings.store')}}" enctype="multipart/form-data">@csrf
                  
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
    <label class="col-sm-2 text-warning"><b>Choose Hall</b></label>
    <select name="hall" class="form-control">
      @foreach($halls as $row)
      <option value="{{$row->id}}">{{$row->number}}</option>
      @endforeach
    </select>
  </div>
					
                 <div class="form-row">
    <!-- <div class="form-check">
              @foreach($timeslots as $row)
  <input class="form-check-input " type="checkbox" value="{{$row->id}}" id="inlineCheckbox1" name="time[]">
  
    <label class="form-check-label text-warning" for="gridCheck" ><b>{{$row->starttime}}</b></label>
      @endforeach
          </div>
   </div>
 -->

                          <div class="form-check">
                          	 @foreach($timeslots as $row)
                            <label class="form-check-label" ><b>{{$row->starttime}}</b>
                              <input class="form-check-sign" type="checkbox"  id="inlineCheckbox1" name="timeslots[]" value="{{$row->id}}">
                               <span class="form-check-sign" value="{{$row->id}}"></span>

                            </label>
                                  @endforeach

                          </div>
                      </div>	
                        


  <div class="form-group row">
    <label for="inpuStdate" class="col-sm-2 col-form-label text-warning"><b>Start Date</b></label>
    <div class="col-sm-2">
      <input type="date"  class="form-control" id="inputStartdate" name="startdate">
     </div>
  </div>
  <div class="form-group row">
    <label for="inputEnddate" class="col-sm-2 col-form-label text-warning"><b>End Date</b></label>
    <div class="col-sm-2">
      <input type="date"  class="form-control" id="inputEnddate" name="enddate">
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