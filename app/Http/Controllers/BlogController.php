<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

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
        return view('site.pages.blog_detail');
    }

    public function comments(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'sometimes|string',
            'message' => 'required|min:3|max:1000',
        ]);

        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->subject = $request->input('subject');
        $comment->message = $request->input('message');

        $comment->save();

        return redirect(route('blog_detail'))->with([
            'message' => 'Votre commentaire a bien été envoyé !',
            'alert-type' => 'success',
        ]);
    }
}
