@extends('backend')
@section('content1')

<h1 class="h3 mb-2 text-gray-800">Edit Customer Form</h1>

  
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-10">
               <h6 class="m-0 font-weight-bold text-primary">List</h6>
                
                </div>
                  <div class="col-2">
                    <a href="{{route('customers.index')}}" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i>Go Back</a>
                  </div>

                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
             <!--  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  -->

<form class="col-lg-11" method="post" action="{{route('customers.update',$customer->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

       <h1>Customer Information</h1>


  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputname">Customer Name</label>
      <input type="text" class="form-control" id="inputname" name="name" placeholder="name" value="{{$customer->name}}">
    </div>
 
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <textarea type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">{{$customer->address}}</textarea>
  </div>
 
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4"name="email" placeholder="Email" value="{{$customer->email}}">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPhone">Phone</label>
      <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="Phone" value="{{$customer->phone}}">
    </div>
     </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
@endsection