<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::latest()->get();
        $subcategorie = SubCategory::latest()->get();
        $product = Product::latest()->get();
        return view('admin.product', compact('product','categorie','subcategorie'));
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
            'name' => 'required',
            'sale_price' => 'required',
            'old_price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'size' => 'required',
        ]);

        if(!is_null($request->image)){

            $new_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/storage/images'), $new_name);

            $product = new Product();
            $product->name = $request->input('name');
            $product->sale_price = $request->input('sale_price');
            $product->old_price = $request->input('old_price');
            $product->quantity = $request->input('quantity');
            $product->category_id = $request->input('category_id');
            $product->subcategory_id = $request->input('subcategory_id');
            $product->description = $request->input('description');
            $product->image = $new_name;
            $product->slug = $request->input('slug');
            $product->size = $request->input('size');
            $product->save();
        }
        return redirect(route('product.index'))->with([
            'message' => 'Successfully saved.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product', compact('product'));
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
        Product::find($id)->delete();
        return redirect(route('product.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
