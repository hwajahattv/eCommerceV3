<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index()
    {
        return view('admin.home');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function logout()
    {
        // Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
