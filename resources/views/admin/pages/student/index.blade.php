  @extends('layouts.admin') 
@section('content')  

<!--   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Students</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="#">Students</a></li>
                            <li><a href="#">List</a></li> 
                            <li class="active"><a type="button" href="{{asset('/student/create')}}" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> </a></li>  
                        </ol>
                    </div>
                </div>
            </div> -
</div>   -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                               <div class="card-header">
                                 <h3 class="card-title">Students</h3> 
                            </div  
                            <div class="card-body">
                                <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
               Name
            </th>
            <th></th>
          </tr></thead>
          <tbody>
            @foreach($cats as $size)  
            <tr >  
              <td>{{$size->name}}</td>  
              <td >  
                
                <a class="btn btn-warning" href="{{ route('student.edit', $size->id)}}" >
                  Edit
                </a>  
                <a class="btn btn-danger" href="{{ route('student.destroy', $size->id)}}" >Delete</a>
              </td>  
            </tr>  
            @endforeach
        </tbody>
      </table>
                            </div>
                        </div> 
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



















@endsection 