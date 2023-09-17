<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Section;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Section::all();  
  
        return view('admin.pages.section.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.section.create');  
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
            'title'=>'required',  
        ]);  
  
        $cat = new Section;  
        $cat->title =  $request->get('title');
        $cat->lesson =  $request->get('lesson');
        $cat->save(); 
        return redirect('section/index');
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
        $cat= Section::find($id);  
     return view('admin.pages.section.edit', compact('cat'));  
        
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
            'title'=>'required',  
             
        ]);  
        
  
        $cat = Section::find($id);  
          $cat->title =  $request->get('title');
        $cat->lesson =  $request->get('lesson');    
        $cat->save();
        return redirect('section/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Section::find($id);  
        $cat->delete(); 
        return redirect('section/index');
    }
}
