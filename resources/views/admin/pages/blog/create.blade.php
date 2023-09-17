@extends('layouts.admin') 
@section('content')    



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Blog </h3>
                            </div>
                            <div class="card-body">
                                   <form method="post" action="{{ route('blog.store') }}">  
					{{ csrf_field() }}   
					<div class="form-group">      
						<label for="first_name">Title</label>  
						<input type="text" class="form-control" name="title"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">Body</label>  
						<input type="text" class="form-control" name="details"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">Image</label>  
						<input type="text" class="form-control" name="image"/>  
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