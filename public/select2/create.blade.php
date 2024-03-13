@extends ('backendtemplate')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	Create New Batches 
			            </h4>
					</div>

					<div class="col-2">
						<a href="{{route('batches.index')}}" class="btn btn-outline-primary btn-block float-right"> 
		            		<i class="fa fa-backward pr-2"></i>	Go Back 
		            	</a>
					</div>
				</div>

	        </div>
	        <div class="card-body">

	        	@if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

	        	<!-- @if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif -->

	        	<!-- TrainerController->Store -->
	            <form action="{{route('batches.store')}}" method="post">
	            	@csrf <!--token for controller -->

					<div class="form-group row">
						<div class="col">
							<label class=" col-form-label">Select Course</label>
							<select name="course" class="form-control">
								@foreach ($courses as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="col">
							<label class="col-form-label">Select Batch</label>
							<select name="batch" class="form-control" disabled="">
								@foreach ($batches as $row)
								<option value="{{$row->id}}" >{{$row->title}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col">
					    	<label for="groupname">Group Name</label>
					      		<input type="text" class="form-control" id="groupname" name="groupname">
					    </div>

					    <div class="col">
							<label class="col-form-label">Select Students</label>
							<select name="students[]" class="form-control students" multiple="multiple">
								@foreach ($students as $row)
								<option value="{{$row->id}}" >{{$row->namee}}</option>
								@endforeach
							</select>
						</div>

					   
					</div>

					<div class="form-group row">
						
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">
					      	<i class="fa fa-save"></i> Save
					      </button>
					    </div>
					</div>
				</form>
	        </div>
		</div>

		@section('script')
		<script type="text/javascript">
			$(document).ready(function () {

				$('.students').select2();
				
			})
		</script>

@endsection

@endsection