<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function comment(Request $request)
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

        return redirect(route('blog.show'))->with([
            'message' => 'Votre commentaire a bien été envoyé !',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::latest()->get();
        $categorie = Category::latest()->get();
        $blog = Blog::orderBy('id','desc')->paginate(5);
        return view('admin.blog', compact('blog','user','categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'author_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'slug' => 'required',
        ]);

        if(!is_null($request->image)){

            $new_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/storage/images'), $new_name);

            $blog = new Blog();
            $blog->author_id = Auth::user()->id;
            $blog->category_id = $request->input('category_id');
            $blog->title = $request->input('title');
            $blog->excerpt = $request->input('excerpt');
            $blog->body = $request->input('body');
            $blog->image = $new_name;
            $blog->slug = $request->input('slug');
            $blog->status = $request->input('status');
            $blog->featured = true;
            $blog->save();
        }
        return redirect(route('blog.index'))->with([
            'message' => 'Successfully saved.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)->delete();
        return redirect(route('blog.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
