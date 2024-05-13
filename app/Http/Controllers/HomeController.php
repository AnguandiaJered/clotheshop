<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.pages.about');
    }

    public function dashboard()
    {
        return view('admin.home');
    }
}
