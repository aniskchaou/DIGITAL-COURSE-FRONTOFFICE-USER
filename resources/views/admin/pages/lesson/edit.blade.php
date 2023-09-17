@extends('layouts.admin') 
@section('content')  
			
			
			
			
			
			 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Lesson</h3>
                            </div>
                            <div class="card-body">
                              <form method="post" action="{{route('lesson.update',$cat->id)}}">  
				{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">title</label>  
					<input type="text" class="form-control" name="title" value="{{$cat->title}}">  
				</div> 
				
				<div class="form-group">      
					<label for="first_name">video</label>  
					<input type="text" class="form-control" name="video" value="{{$cat->video}}">  
				</div> 

				<div class="form-group">      
					<label for="first_name">duration</label>  
					<input type="text" class="form-control" name="duration" value="{{$cat->duration}}">  
				</div> 

				<div class="form-group">      
					<label for="first_name">summary</label>  
					<input type="text" class="form-control" name="summary" value="{{$cat->summary}}">  
				</div> 

				<div class="form-group">      
					<label for="first_name">isFree</label>  
					<input type="text" class="form-control" name="isFree" value="{{$cat->isFree}}">  
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