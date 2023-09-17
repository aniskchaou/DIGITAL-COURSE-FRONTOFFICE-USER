<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Student::all();  
  
        return view('admin.pages.student.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.student.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*  $request->validate([  
            'name'=>'required',  
        ]);   */
  
        $cat = new Student;  
       // $cat->name =  $request->get('student');
        $cat->name = $request->get('name');
           $cat->about =  $request->get('about');
           $cat->dateOfBirth =  $request->get('dateOfBirth');
           $cat->phone =  $request->get('phone');
           $cat->email =  $request->get('email');
           $cat->image =  $request->get('image');
           $cat->password =  $request->get('password');
           $cat->facebook =  $request->get('facebook');
          $cat->linkedin =   $request->get('linkedin');
         $cat->instagram =    $request->get('instagram'); 
        $cat->save(); 
        return redirect('student/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Student::find($id);  
     return view('admin.pages.student.edit', compact('cat'));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*  $request->validate([  
            'student'=>'required',  
             
        ]);  
   */
        $cat = Student::find($id);  
        $cat->name =  $request->get('name'); 
         $cat->about =  $request->get('about'); 
          $cat->dateOfBirth =  $request->get('dateOfBirth');  
           $cat->phone =  $request->get('phone'); 
            $cat->email =  $request->get('email'); 
             $cat->image =  $request->get('image'); 
              $cat->password =  $request->get('password'); 
               $cat->facebook =  $request->get('facebook'); 
                $cat->linkedin =  $request->get('linkedin'); 
                $cat->instagram =  $request->get('instagram'); 
             
        $cat->save();
        return redirect('student/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Student::find($id);  
        $cat->delete(); 
        return redirect('student/index');
    }
}
