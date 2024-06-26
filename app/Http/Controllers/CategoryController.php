<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::latest()->get();
        return view('admin.categorie', compact('categories'));
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
        $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $categories = new Categorie();
        $categories->name=$request->input('name');
        $categories->slug=$request->input('slug');
        $categories->save();

        return redirect(route('categorie.index'))->with([
            'message' => 'Successfully saved.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categorie::findOrFail($id);
        return view('admin.categorie', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Categorie::findOrFail($id);
        return view('admin.categorie', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'sometimes|string',
            'slug' => 'sometimes|string'
        ]);

        DB::update("UPDATE categories set name = ?, slug = ? WHERE id= ? ", [$request->name,$request->slug,$request->id]);

        return redirect(route('categorie.index'))->with([
            'message' => 'Successfully updated.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie::find($id)->delete();
        return redirect(route('categorie.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
