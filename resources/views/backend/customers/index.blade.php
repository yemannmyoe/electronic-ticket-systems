@extends('backend')
@section('content1')
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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
  	@foreach($customers as $row)
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
    


      <td><a href="{{route('customers.show', $row->id)}}" class="btn btn-info">Detail</a>   
        <a href="{{route('customers.edit',$row->id)}}" class="btn btn-warning">Edit</a>
            <form method="post" action="{{route('customers.destroy',$row->id)}}" class="d-inline-flex" onsubmit="return confirm('Are You Sure To Want To Delete?')">
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

              
          

@endsection