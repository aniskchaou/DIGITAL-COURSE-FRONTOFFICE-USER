<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Course::all();  
  
        return view('admin.pages.course.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.course.create');  
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
            'topicTitle'=>'required',  
        ]);  
  
        $cat = new Course;  
        //$cat->name =  $request->get('course');
         $cat->topicTitle =$request->get('topicTitle');
            $cat->courseRequirements =$request->get('courseRequirements');
            $cat->courseDescription =$request->get('courseDescription');
            //$cat->course =$request->get('course');
            $cat->level =$request->get('level');
            $cat->language =$request->get('language');
            $cat->duration =$request->get('duration');
            $cat->thumbnail =$request->get('thumbnail');
            $cat->isfree =$request->get('isfree');
            $cat->price =$request->get('price');
            $cat->discount =$request->get('discount');
            $cat->featuredCourse =$request->get('featuredCourse');
            $cat->previewVideo =$request->get('previewVideo');
            $cat->coverImage =$request->get('coverImage');
            $cat->capacity =$request->get('capacity');
            $cat->startDate =$request->get('startDate');
            $cat->partnerInstructor =$request->get('partnerInstructor');
            $cat->downloadable =$request->get('downloadable');
            $cat->section =$request->get('section');
            $cat->category =$request->get('category');
        $cat->save(); 
        return redirect('course/index');
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
        $cat= Course::find($id);  
     return view('admin.pages.course.edit', compact('cat'));  
        
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
            'courseRequirements'=>'required',  
             
        ]);  
        
  
        $cat = Course::find($id);  
          $cat->topicTitle =$request->get('topicTitle');
            $cat->courseRequirements =$request->get('courseRequirements');
            $cat->courseDescription =$request->get('courseDescription');
            $cat->category =$request->get('category');
            $cat->level =$request->get('level');
            $cat->language =$request->get('language');
            $cat->duration =$request->get('duration');
            $cat->thumbnail =$request->get('thumbnail');
            $cat->isfree =$request->get('isfree');
            $cat->price =$request->get('price');
            $cat->discount =$request->get('discount');
            $cat->featuredCourse =$request->get('featuredCourse');
            $cat->previewVideo =$request->get('previewVideo');
            $cat->coverImage =$request->get('coverImage');
            $cat->capacity =$request->get('capacity');
            $cat->startDate =$request->get('startDate');
            $cat->partnerInstructor =$request->get('partnerInstructor');
            $cat->downloadable =$request->get('downloadable');
            $cat->section =$request->get('section');

        $cat->save();
        return redirect('course/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Course::find($id);  
        $cat->delete(); 
        return redirect('course/index');
    }
}
