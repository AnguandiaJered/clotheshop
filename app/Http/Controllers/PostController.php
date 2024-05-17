<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blog = Blog::with('authorId', 'category')
        ->where('status', 'PUBLISHED')
        // ->orderByRaw("RAND()")
        ->latest()
        ->paginate(4);

        $categories = Category::orderByRaw("RAND()")->limit(5)->get();

        // $post = Post::latest()->limit(3)->get();

        return view('site.pages.blog', compact('blog', 'categories'));
    }
    /**
      *
      * @param Request $request
      * @return \Illuminate\Http\Response
      */

      public function sortByCategory(Request $request, string $slug)
      {
          $cat = Category::findBySlug($slug);

          $categories = Category::orderByRaw("RAND()")->limit(5)->get();

          if ($cat) {

              $blog = Blog::where('category_id', $cat->id)->with('authorId', 'category')->orderByRaw("RAND()")->latest()->paginate(config('app.perPages.front.blogs'));
          } else {

              $blog = Blog::with('authorId', 'category')->orderByRaw("RAND()")->latest()->paginate(config('app.perPages.front.blogs'));
          }
          return view('site.pages.blog', compact('blog', 'categories'));
      }


      public function show($y, $m, $d, $slug)
      {
          $categories = Category::orderByRaw("RAND()")->limit(5)->get();

          $blog = Blog::with('authorId', 'category')->whereSlug($slug)->firstOrFail();

          return view('site.pages.blog_detail', compact('blog','categories'));
      }

      public function search(Request $request)
      {
          $where = "";

          $rech = "";

          $search = preg_split('/[\s\-]/', $request->input('q'));

          $count_keywords = count($search);

          foreach ($search as $key => $searches) {
              $rech .= " $searches";

              $where .= "title LIKE '%?%' OR slug LIKE '%?%' OR created_at LIKE '%?%'";

              if ($key != ($count_keywords - 1)) {
                  $where .= " AND ";
              }
          }

          $this->validate($request, [
              'q' => 'bail|required|max:100',
          ]);

          $blog = DB::select(DB::Raw('select * from blogs where ' . $where));

          $blog = Blog::hydrate($blog);

          $blog = $this->paginateCollection($blog, config('app.perPages.front.blogs') ?? 5);

          $searchInfo = str_plural('Result', $blog->count()) . ' for:' . '<strong> << ' . $rech . ' >> </strong>';

          $categories = Category::orderByRaw("RAND()")->limit(5)->get();

          return view('client.front.pages.blog.search', compact(
              'posts',
              'searchInfo',
              'categories'
          ));
      }
}
