<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use DB;

class SubCategoryController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::orderBy('id','desc')->paginate(5);
        return view('admin.pages.subcategorie', compact('subcategories'));
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
            'slug' => 'required',
            'category_id' => 'required'
        ]);

        $subcategories = new SubCategory();
        $subcategories->name=$request->input('name');
        $subcategories->slug=$request->input('slug');
        $subcategories->category_id=$request->input('category_id');
        $subcategories->save();

        return redirect(route('subcategorie.index'))->with([
            'message' => 'Successfully saved.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subcategories = SubCategory::findOrFail($id);
        return view('admin.pages.subcategorie', compact('subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subcategories = SubCategory::findOrFail($id);
        return view('admin.pages.subcategorie', compact('subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'sometimes|string',
            'slug' => 'sometimes|string',
            'category_id' => 'sometimes|string'
        ]);

        DB::update("UPDATE sub_categories set name = ?, slug = ? WHERE id= ? ", [$request->name,$request->slug,$request->category_id,$request->id]);

        return redirect(route('subcategorie.index'))->with([
            'message' => 'Successfully updated.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::find($id)->delete();
        return redirect(route('subcategorie.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
