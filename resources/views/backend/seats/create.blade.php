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
                <h1 class="title">Seat Create</h1>
              </div>
              <div class="col-2">
                    <a href="" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>Go Back</a>
                  </div>

              <div class="card-body">
<form class="col-lg-11" method="post" action="{{route('seats.store')}}" >@csrf
                  
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="text-warning"><b>Seat Label</b></label>
                        <input type="text" class="form-control"  placeholder="Label" name="label">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label class="text-warning"><b>Seat Price </b></label>
                        <input type="number" class="form-control" placeholder="Price" name="price">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label  class="text-warning" for="exampleInputEmail1"><b>Seat Type</b></label>
                        <select class="form-control" id="exampleFormControlSelect1" placeholder="Type" name="type">
                      <option>Single</option>
                      <option>Couple</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

@endsection