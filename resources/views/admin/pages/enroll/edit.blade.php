@extends('layouts.admin') 
@section('content') 
			
			 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Enroll</h3>
                            </div>
                            <div class="card-body">
                                 <form method="post" action="{{route('enroll.update',$cat->id)}}">  
				{{ csrf_field() }}   
				<div class="form-group">      
					<label for="first_name">student</label>  
					<input type="text" class="form-control" name="student" value="{{$cat->student}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">course</label>  
					<input type="text" class="form-control" name="course" value="{{$cat->course}}">  
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