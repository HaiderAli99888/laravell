<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return redirect()->route('login');
    }
    public function home()
    {
        if(auth()->user()->role=='admin'){
            return redirect()->route('blogs.index');
        }
        return redirect()->route('blogs.listing');
    }
}
