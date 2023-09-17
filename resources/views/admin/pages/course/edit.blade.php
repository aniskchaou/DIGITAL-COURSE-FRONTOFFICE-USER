@extends('layouts.admin') 
@section('content')   

           
			 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Course</h3>
                            </div>
                            <div class="card-body">
                               <form method="post" action="{{route('course.update',$cat->id)}}">  
				{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">topicTitle</label>  
					<input type="text" class="form-control" name="topicTitle" value="{{$cat->topicTitle}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">courseRequirements</label>  
					<input type="text" class="form-control" name="courseRequirements" value="{{$cat->courseRequirements}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">courseDescription</label>  
					<input type="text" class="form-control" name="courseDescription" value="{{$cat->courseDescription}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">category</label>  
					<input type="text" class="form-control" name="category" value="{{$cat->category}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">level</label>  
					<input type="text" class="form-control" name="level" value="{{$cat->level}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">language</label>  
					<input type="text" class="form-control" name="language" value="{{$cat->language}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">language</label>  
					<input type="text" class="form-control" name="duration" value="{{$cat->duration}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">thumbnail</label>  
					<input type="text" class="form-control" name="thumbnail" value="{{$cat->thumbnail}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">isfree</label>  
					<input type="text" class="form-control" name="isfree" value="{{$cat->isfree}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">price</label>  
					<input type="text" class="form-control" name="price" value="{{$cat->price}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">discount</label>  
					<input type="text" class="form-control" name="discount" value="{{$cat->discount}}">  
				</div>  

        	<div class="form-group">      
					<label for="first_name">featuredCourse</label>  
					<input type="text" class="form-control" name="featuredCourse" value="{{$cat->featuredCourse}}">  
				</div>  

          	<div class="form-group">      
					<label for="first_name">previewVideo</label>  
					<input type="text" class="form-control" name="previewVideo" value="{{$cat->previewVideo}}">  
				</div>  

          	<div class="form-group">      
					<label for="first_name">coverImage</label>  
					<input type="text" class="form-control" name="coverImage" value="{{$cat->coverImage}}">  
				</div>  

          	<div class="form-group">      
					<label for="first_name">capacity</label>  
					<input type="text" class="form-control" name="capacity" value="{{$cat->capacity}}">  
				</div>  

          	<div class="form-group">      
					<label for="first_name">startDate</label>  
					<input type="text" class="form-control" name="startDate" value="{{$cat->startDate}}">  
				</div>  


          	<div class="form-group">      
					<label for="first_name">partnerInstructor</label>  
					<input type="text" class="form-control" name="partnerInstructor" value="{{$cat->partnerInstructor}}">  
				</div>  

          	<div class="form-group">      
					<label for="first_name">downloadable</label>  
					<input type="text" class="form-control" name="downloadable" value="{{$cat->downloadable}}">  
				</div>  

          	<div class="form-group">      
					<label for="first_name">section</label>  
					<input type="text" class="form-control" name="section" value="{{$cat->section}}">  
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