@extends('layouts.admin') 
@section('content')  
			
			
			
			
			 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Payment</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('payment.update',$cat->id)}}">  
				{{ csrf_field() }}     
				<div class="form-group">      
					<label for="first_name">course</label>  
					<input type="text" class="form-control" name="course" value="{{$cat->course}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">date</label>  
					<input type="text" class="form-control" name="date" value="{{$cat->date}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">value</label>  
					<input type="text" class="form-control" name="value" value="{{$cat->value}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">paymentType</label>  
					<input type="text" class="form-control" name="paymentType" value="{{$cat->paymentType}}">  
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