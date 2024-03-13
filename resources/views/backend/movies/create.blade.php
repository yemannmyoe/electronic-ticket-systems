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
                <h1 class="title">Movie Create</h1>
              </div>
              <div class="col-2">
                    <a href="" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>Go Back</a>
                  </div>

              <div class="card-body">
<form class="col-lg-11" method="post" action="{{route('movies.store')}}" enctype="multipart/form-data">@csrf
                  
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="text-warning"><b>Movie Name</b></label>
                        <input type="text" class="form-control"  placeholder="Movie Name" name="name">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label class="text-warning"><b>Language</b></label>
                        <input type="text" class="form-control" placeholder="Language" name="language">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label  class="text-warning" for="exampleInputEmail1"><b>Duration</b></label>
                        <input type="text" class="form-control" placeholder="Duration" name="duration">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label class="text-warning"><b>Photo</b></label>
                        <input type="file" class="form-control-file" name="photo">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label class="text-warning"><b>Restriction</b></label>
                        <input type="text" class="form-control" placeholder="Restriction" name="restriction">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="text-warning"><b>Rating</b></label>
                        <input type="text" class="form-control" placeholder="Rating" name="rating">
                      </div>
                    </div>
                  </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

@endsection