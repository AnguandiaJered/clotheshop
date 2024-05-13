<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function message()
    {
        return view('site.pages.contact');
    }

}
