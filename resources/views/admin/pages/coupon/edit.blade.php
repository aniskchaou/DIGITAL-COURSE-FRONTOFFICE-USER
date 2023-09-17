@extends('layouts.admin') 
@section('content') 
			
			
			
			 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Coupon</h3>
                            </div>
                            <div class="card-body">
                                   <form method="post" action="{{route('coupon.update',$cat->id)}}">  
				{{ csrf_field() }}    
				<div class="form-group">      
					<label for="first_name">name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">discount</label>  
					<input type="text" class="form-control" name="discount" value="{{$cat->discount}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">limitdate</label>  
					<input type="text" class="form-control" name="limitdate" value="{{$cat->limitdate}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">code</label>  
					<input type="text" class="form-control" name="code" value="{{$cat->code}}">  
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