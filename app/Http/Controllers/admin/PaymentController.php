<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Payment;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Payment::all();  
  
        return view('admin.pages.payment.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.payment.create');  
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
  
        $cat = new Payment;  
         $cat->course =$request->get('course');
          $cat->date =  $request->get('date');
          $cat->name =  $request->get('name');
          $cat->value =  $request->get('value');
          $cat->paymentType =  $request->get('paymentType'); 

       // $cat->name =  $request->get('payment');
        $cat->save(); 
        return redirect('payment/index');
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
        $cat= Payment::find($id);  
     return view('admin.pages.payment.edit', compact('cat'));  
        
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
            'payment'=>'required',  
             
        ]);  
  
        $cat = Payment::find($id);  
        $cat->name =  $request->get('name');   
        $cat->course =$request->get('course');
          $cat->date =  $request->get('date');
          $cat->name =  $request->get('name');
          $cat->value =  $request->get('value');
          $cat->paymentType =  $request->get('paymentType'); 
        $cat->save();
        return redirect('payment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Payment::find($id);  
        $cat->delete(); 
        return redirect('payment/index');
    }
}
