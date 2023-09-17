@extends('layouts.admin') 
@section('content')    
			
	        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Coupon</h3>
                            </div>
                            <div class="card-body">
                               <form method="post" action="{{ route('coupon.store') }}">  
					{{ csrf_field() }}   
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div> 
					
					<div class="form-group">      
						<label for="first_name">discount</label>  
						<input type="text" class="form-control" name="discount"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">limitdate</label>  
						<input type="text" class="form-control" name="limitdate"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">code</label>  
						<input type="text" class="form-control" name="code"/>  
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