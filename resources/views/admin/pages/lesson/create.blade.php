@extends('layouts.admin') 
@section('content')  
				
	        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Lesson</h3>
                            </div>
                            <div class="card-body">
                                       <form method="post" action="{{ route('lesson.store') }}">  
					{{ csrf_field() }}   
					<div class="form-group">      
						<label for="first_name">title</label>  
						<input type="text" class="form-control" name="title"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">video</label>  
						<input type="text" class="form-control" name="video"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">duration</label>  
						<input type="text" class="form-control" name="duration"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">summary</label>  
						<input type="text" class="form-control" name="summary"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">isFree</label>  
						<input type="text" class="form-control" name="isFree"/>  
					</div>  


					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form> 
      
                            </div>
                        </div> 
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->					
				
				
				
				
				
				
				
				
				
				
				@endsection 