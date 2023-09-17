<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = SubCategory::all();  
  
        return view('admin.pages.category.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.category.create');  
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
            'category'=>'required',  
        ]);  
  
        $cat = new SubCategory;  
        $cat->name =  $request->get('category');
        $cat->save(); 
        return redirect('category/index');
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
        $cat= SubCategory::find($id);  
     return view('admin.pages.category.edit', compact('cat'));  
        
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
            'category'=>'required',  
             
        ]);  
  
        $cat = SubCategory::find($id);  
        $cat->name =  $request->get('category');    
        $cat->save();
        return redirect('category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=SubCategory::find($id);  
        $cat->delete(); 
        return redirect('category/index');
    }
}
