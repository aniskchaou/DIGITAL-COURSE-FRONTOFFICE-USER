<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Quiz;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Quiz::all();  
  
        return view('admin.pages.quiz.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.quiz.create');  
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
            'quiz'=>'required',  
        ]);  
  
        $cat = new Quiz;  
        $cat->name =  $request->get('quiz');
        $cat->save(); 
        return redirect('quiz/index');
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
        $cat= Quiz::find($id);  
     return view('admin.pages.quiz.edit', compact('cat'));  
        
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
            'quiz'=>'required',  
             
        ]);  
  
        $cat = Quiz::find($id);  
        $cat->name =  $request->get('quiz');    
         $table->string('quizTitle');
            $table->string('quiz');
            $table->string('minimumPercentage');
            $table->string('instruction');
        $cat->save();
        return redirect('quiz/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Quiz::find($id);  
        $cat->delete(); 
        return redirect('quiz/index');
    }
}
