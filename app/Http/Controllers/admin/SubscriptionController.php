<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Subscription;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Subscription::all();  
  
        return view('admin.pages.subscription.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.subscription.create');  
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
            'subscription'=>'required',  
        ]);  
  
        $cat = new Subscription;  
        $cat->name =  $request->get('subscription');
        $cat->save(); 
        return redirect('subscription/index');
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
        $cat= Subscription::find($id);  
     return view('admin.pages.subscription.edit', compact('cat'));  
        
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
            'subscription'=>'required',  
             
        ]);  
  
        $cat = Subscription::find($id);  
        $cat->name =  $request->get('subscription');    
        $cat->save();
        return redirect('subscription/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Subscription::find($id);  
        $cat->delete(); 
        return redirect('subscription/index');
    }
}
