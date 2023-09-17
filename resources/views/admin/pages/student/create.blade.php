@extends('layouts.admin') 
@section('content')    
				
				
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Student</h3>
                            </div>
                            <div class="card-body">
                               <form method="post" action="{{ route('student.store') }}">  
					{{ csrf_field() }}  
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div> 
               
               	<div class="form-group">      
						<label for="first_name">about</label>  
						<input type="text" class="form-control" name="about"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">dateOfBirth</label>  
						<input type="text" class="form-control" name="dateOfBirth"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">phone</label>  
						<input type="text" class="form-control" name="phone"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">email</label>  
						<input type="text" class="form-control" name="email"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">image</label>  
						<input type="text" class="form-control" name="image"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">password</label>  
						<input type="text" class="form-control" name="password"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">facebook</label>  
						<input type="text" class="form-control" name="facebook"/>  
					</div>

               	<div class="form-group">      
						<label for="first_name">linkedin</label>  
						<input type="text" class="form-control" name="linkedin"/>  
					</div>

                 	<div class="form-group">      
						<label for="first_name">instagram</label>  
						<input type="text" class="form-control" name="instagram"/>  
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