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
                <h1 class="title">Hall Create</h1>
              </div>
             
              <div class="card-body">
<form class="col-lg-11" method="post" action="{{route('halls.store')}}" >@csrf
                  
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="text-warning"><b>Hall No</b></label>
                        <input type="text" class="form-control"  placeholder="Hall No" name="number">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label class="text-warning"><b>Number Of Seat</b></label>
                        <input type="number" class="form-control" placeholder="NOS" name="numberofseat">
                      </div>
                    </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

@endsection