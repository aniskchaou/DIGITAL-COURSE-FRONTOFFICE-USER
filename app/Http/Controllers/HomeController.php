<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
    	 
      return view('home.home');
    }

      function dashboard()
    {
    	 
      return view('admin.pages.dashboard.dashboard');
    }

     function login()
    {
    	 
      return view('admin.pages.auth.login');
    }

     function about()
    {
    	 
      return view('home.about');
    }

     function blog()
    {
    	 
      return view('home.blog');
    }

     function contact()
    {
    	 
      return view('home.contact');
    }

     function service()
    {
    	 
      return view('home.service');
    }
}
