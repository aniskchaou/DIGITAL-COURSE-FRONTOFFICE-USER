<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Lesson;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Lesson::all();  
  
        return view('admin.pages.lesson.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.lesson.create');  
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
  
        $cat = new Lesson;  
        $cat->title = $request->get('title');
         $cat->video =   $request->get('video');
          $cat->duration =   $request->get('duration');
          $cat->summary =   $request->get('summary');
          $cat->isFree =   $request->get('isFree');
        $cat->save(); 
        return redirect('lesson/index');
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
        $cat= Lesson::find($id);  
     return view('admin.pages.lesson.edit', compact('cat'));  
        
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
  
        $cat = Lesson::find($id);  
        //$cat->name =  $request->get('lesson');    
         $cat->title = $request->get('title');
         $cat->video =   $request->get('video');
          $cat->duration =   $request->get('duration');
          $cat->summary =   $request->get('summary');
          $cat->isFree =   $request->get('isFree');
        $cat->save();
        return redirect('lesson/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Lesson::find($id);  
        $cat->delete(); 
        return redirect('lesson/index');
    }
}
