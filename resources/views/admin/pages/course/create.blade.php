@extends('layouts.admin') 
@section('content')  


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Course</h3>
                            </div>
                            <div class="card-body">
                               <form method="post" action="{{ route('course.store') }}">  
					{{ csrf_field() }}  
					<div class="form-group">      
						<label for="first_name">topicTitle</label>  
						<input type="text" class="form-control" name="topicTitle"/>  
					</div>  
					  

                              <div class="form-group">      
						<label for="first_name">courseRequirements</label>  
						<input type="text" class="form-control" name="courseRequirements"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">courseDescription</label>  
						<input type="text" class="form-control" name="courseDescription"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">category</label>  
						<input type="text" class="form-control" name="category"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">level</label>  
						<input type="text" class="form-control" name="level"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">language</label>  
						<input type="text" class="form-control" name="language"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">duration</label>  
						<input type="text" class="form-control" name="duration"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">thumbnail</label>  
						<input type="text" class="form-control" name="thumbnail"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">isfree</label>  
						<input type="text" class="form-control" name="isfree"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">price</label>  
						<input type="text" class="form-control" name="price"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">discount</label>  
						<input type="text" class="form-control" name="discount"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">featuredCourse</label>  
						<input type="text" class="form-control" name="featuredCourse"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">previewVideo</label>  
						<input type="text" class="form-control" name="previewVideo"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">coverImage</label>  
						<input type="text" class="form-control" name="coverImage"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">capacity</label>  
						<input type="text" class="form-control" name="capacity"/>  
					</div>  

                              <div class="form-group">      
						<label for="first_name">startDate</label>  
						<input type="text" class="form-control" name="startDate"/>  
					</div>  



                              <div class="form-group">      
						<label for="first_name">partnerInstructor</label>  
						<input type="text" class="form-control" name="partnerInstructor"/>  
					</div>  

                                <div class="form-group">      
						<label for="first_name">downloadable</label>  
						<input type="text" class="form-control" name="downloadable"/>  
					</div>  

                                <div class="form-group">      
						<label for="first_name">section</label>  
						<input type="text" class="form-control" name="section"/>  
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