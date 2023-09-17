@extends('layouts.admin') 
@section('content')  
				
				
				
	        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Payment</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('payment.store') }}">  
					{{ csrf_field() }}   
					<div class="form-group">      
						<label for="first_name">course</label>  
						<input type="text" class="form-control" name="course"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">value</label>  
						<input type="text" class="form-control" name="value"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">paymentType</label>  
						<input type="text" class="form-control" name="paymentType"/>  
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