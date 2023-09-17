<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Coupon;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Coupon::all();  
  
        return view('admin.pages.coupon.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.coupon.create');  
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
  
        $cat = new Coupon;  
        $cat->name =  $request->get('name');
        $cat->discount =  $request->get('discount');
        $cat->limitdate =  $request->get('limitdate');
        $cat->code =  $request->get('code');
        $cat->save(); 
        return redirect('coupon/index');
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
        $cat= Coupon::find($id);  
     return view('admin.pages.coupon.edit', compact('cat'));  
        
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
  
        $cat = Coupon::find($id);  
        $cat->name =  $request->get('name');
        $cat->discount =  $request->get('discount');
        $cat->limitdate =  $request->get('limitdate');
        $cat->code =  $request->get('code');   
        $cat->save();
        return redirect('coupon/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Coupon::find($id);  
        $cat->delete(); 
        return redirect('coupon/index');
    }
}
