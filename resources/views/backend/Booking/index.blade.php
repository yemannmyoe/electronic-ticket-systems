@extends('backend')
@section('content1')
  <div style="padding: 10px;">
          <h1 class="h3 mb-2 text-gray-800"></h1>

      
              
                
                  <div class="row">
                    <div class="col-10">
                   <h6 class="m-0 font-weight-bold text-primary">List</h6>
                    
                    </div>
                      <div class="col-2">
                        <a href="{{route('customers.create')}}" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>Add New</a>
                      </div>

                    </div>
                
                

    <table class="table table-bordered col-lg-10 mx-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Customer</th>
          <th scope="col">Date</th>
          <th scope="col">Seat Number</th>
          <th scope="col">Quantity</th>
          <th scope="col">Action</th>


        </tr>
      </thead>
      <tbody>
        @php $i=1; @endphp
        @foreach($bookings as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->customer->name}}</td>
          <td>{{$row->bookingdate}}</td>
          <td>{{$row->seatnumber}}</td>
          <td>{{$row->totalqty}}</td>



          <td><a href="" class="btn btn-info p-2">Detail</a>   
            <a href="" class="btn btn-warning">Edit</a>
                <form method="post" action="" class="d-inline-flex" onsubmit="return confirm('Are You Sure To Want To Delete?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit"class="btn btn-danger">Delete</button>
               </form>
          </td>
          
        </tr>
        @endforeach
        
      </tbody>
    </table>
    </tbody>
    </table>
  </div>

              
          

@endsection