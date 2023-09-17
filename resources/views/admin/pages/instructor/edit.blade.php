@extends('layouts.admin') 
@section('content')  
			
			
		 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Instructor</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('instructor.update',$cat->id)}}">  
				{{ csrf_field() }}     
				<div class="form-group">      
					<label for="first_name">name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">email</label>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">address</label>  
					<input type="text" class="form-control" name="address" value="{{$cat->address}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">telephone</label>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}">  
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