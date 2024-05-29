<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Post;
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
        $posts = Post::with('authorId', 'category')
        ->where('status', 'PUBLISHED')
        // ->orderByRaw("RAND()")
        ->latest()
        ->paginate(4);

        $categories = Categorie::orderByRaw("RAND()")->limit(5)->get();

        // $post = Post::latest()->limit(3)->get();

        return view('site.pages.blog.index', compact('posts', 'categories'));
    }
    /**
      *
      * @param Request $request
      * @return \Illuminate\Http\Response
      */

      public function sortByCategory(Request $request, string $slug)
      {
          $cat = Categorie::findBySlug($slug);

          $categories = Categorie::orderByRaw("RAND()")->limit(5)->get();

          if ($cat) {

              $posts = Post::where('category_id', $cat->id)->with('authorId', 'category')->orderByRaw("RAND()")->latest()->paginate(config('app.perPages.front.posts'));
          } else {

              $posts = Post::with('authorId', 'category')->orderByRaw("RAND()")->latest()->paginate(config('app.perPages.front.posts'));
          }
          return view('site.pages.blog.index', compact('posts', 'categories'));
      }


      public function show($y, $m, $d, $slug)
      {
          $categories = Categorie::orderByRaw("RAND()")->limit(5)->get();

          $post = Post::with('authorId', 'category')->whereSlug($slug)->firstOrFail();

          return view('site.pages.blog.show', compact('post','categories'));
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

          $posts = DB::select(DB::Raw('select * from posts where ' . $where));

          $posts = Post::hydrate($posts);

          $posts = $this->paginateCollection($posts, config('app.perPages.front.posts') ?? 5);

          $searchInfo = str_plural('Result', $posts->count()) . ' for:' . '<strong> << ' . $rech . ' >> </strong>';

          $categories = Categorie::orderByRaw("RAND()")->limit(5)->get();

          return view('site.pages.blog.search', compact(
              'posts',
              'searchInfo',
              'categories'
          ));
      }
}
