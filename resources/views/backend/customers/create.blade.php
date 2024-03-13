@extends('backend')
@section('content1')

  
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-10">
               <h6 class="m-0 font-weight-bold text-primary">List</h6>
                
                </div>
                  

                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="col-12" action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
  @csrf
      <h1>Customer Information</h1>


  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputname" class="text-warning"><b>Customer Name</b></label>
      <input type="text" class="form-control" id="inputname" name="name" placeholder="name">
    </div>
 
  
  <div class="form-group">
    <label for="inputAddress" class="text-warning"><b>Address</b></label>
    <textarea type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St"></textarea>
  </div>
 
    <div class="form-group col-md-12">
      <label for="inputEmail4" class="text-warning"><b>Email</b></label>
      <input type="email" class="form-control" id="inputEmail4"name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPhone" class="text-warning"><b>Phone</b></label>
      <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="Phone">
    </div>
     </div>


  <input type="hidden" name="bid" value="4">
    <button type="submit" class="btn btn-primary btn-lg btn-block">Save Register</button>

</form>
@endsection