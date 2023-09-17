<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Enroll;
use App\Http\Controllers\Controller;

class EnrollController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Enroll::all();  
  
        return view('admin.pages.enroll.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.enroll.create');  
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
            'course'=>'required',  
        ]);  
  
        $cat = new Enroll;  
        $cat->student =  $request->get('student'); 
        $cat->course =  $request->get('course');
        $cat->save(); 
        return redirect('enroll/index');
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
        $cat= Enroll::find($id);  
     return view('admin.pages.enroll.edit', compact('cat'));  
        
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
            'enroll'=>'required',  
             
        ]);  
  
        $cat = Enroll::find($id);  
        $cat->student =  $request->get('student'); 
        $cat->course =  $request->get('course');
        $cat->save();
        return redirect('enroll/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Enroll::find($id);  
        $cat->delete(); 
        return redirect('enroll/index');
    }
}
