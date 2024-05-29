<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

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

    public function index()
    {
        $product = Product::latest()->limit(3)->get();

        $testimonials = Testimonial::latest()->limit(10)->get();

        $slide = Slide::latest()->whereActive(true)->first();

        return view('site.home', compact('product','testimonials','slide'));
    }
}
