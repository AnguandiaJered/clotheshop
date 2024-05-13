<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('site.pages.products.products');
    }

    public function detail()
    {
        return view('site.pages.products.product_detail');
    }
}
