<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Instructor;
use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Instructor::all();  
  
        return view('admin.pages.instructor.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.instructor.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([  
            'name'=>'required',  
        ]);  
  
        $cat = new Instructor;  
        //$cat->name =  $request->get('instructor');
       $cat->name = $request->get('name');
        $cat->email =    $request->get('email');
        $cat->address =    $request->get('address');
        $cat->telephone =    $request->get('telephone');
       $cat->address =    $request->get('address');
        $cat->save(); 
        return redirect('instructor/index');
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
        $cat= Instructor::find($id);  
     return view('admin.pages.instructor.edit', compact('cat'));  
        
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
         $request->validate([  
            'name'=>'required',  
             
        ]);  
  
        $cat = Instructor::find($id);  
         $cat->name = $request->get('name');
        $cat->email =    $request->get('email');
        $cat->address =    $request->get('address');
        $cat->telephone =    $request->get('telephone');
       $cat->address =    $request->get('address');
        $cat->save();
        return redirect('instructor/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Instructor::find($id);  
        $cat->delete(); 
        return redirect('instructor/index');
    }
}
