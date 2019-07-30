@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agent Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                        Update Listed lands
                        
                        <form method="post" action="{{url('/agent/land/update/' . $land->id )}}" enctype="multipart/form-data">
                        	<input name="_token" value="{{csrf_token()}}" type="hidden">
  							<div class="form-group">
    							<label for="title_no">Title no </label>
    							<input type="text" class="form-control" id="title_no" aria-describedby="emailHelp" placeholder="Title No" name="title_no" value="{{ $land->title_no }}">
    							

  							</div>

  							<div class="form-group">
    							<label for="land_size">Land Size</label>
    							<input type="text" class="form-control" id="land_size" aria-describedby="emailHelp" placeholder="Enter Land Size" name="land_size" value="{{ $land->land_size }}">
    							
  							</div>
  							<div class="form-group">
  								<label for="land_location">Land location</label>
    							<input type="text" class="form-control" id="land_location" aria-describedby="emailHelp" placeholder="Enter Land location" name="land_location" value="{{ $land->land_location }}">
    							
  							</div>

  							<div class="form-group">
  								<label for="land_location">Land Price</label>
    							<input type="text" class="form-control" id="land_price" aria-describedby="emailHelp" placeholder="Enter Land price" name="land_price" value="{{ $land->land_price }}">
    							
  							</div>



  							<button type="submit" class="btn btn-primary">Submit</button>
						</form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection