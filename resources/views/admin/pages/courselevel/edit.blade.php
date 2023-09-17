@extends('layouts.admin') 
@section('content')  
			
			
		 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Course Level</h3>
                            </div>
                            <div class="card-body">
                                  <form method="post" action="{{route('courselevel.update',$cat->id)}}">  
				{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">Size</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form> 
      
                            </div>
                        </div> 
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->			
				
			
			
			
			
			
			
			
			
			
			
			
			
			@endsection 