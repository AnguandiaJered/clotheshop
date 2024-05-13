<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('site.pages.blog');
    }

    public function detail()
    {
        return view('site.pages.blog_detail');
    }

    public function comment()
    {
        return view('site.pages.contact');
    }
}
