<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Question::all();  
  
        return view('admin.pages.question.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.question.create');  
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
            'question'=>'required',  
        ]);  
  
        $cat = new Question;  
        $cat->name =  $request->get('question');
        $cat->save(); 
        return redirect('question/index');
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
        $cat= Question::find($id);  
     return view('admin.pages.question.edit', compact('cat'));  
        
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
            'question'=>'required',  
             
        ]);  
  
        $cat = Question::find($id);  
        $cat->name =  $request->get('question');    
        $cat->save();
        return redirect('question/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Question::find($id);  
        $cat->delete(); 
        return redirect('question/index');
    }
}
