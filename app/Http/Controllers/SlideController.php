<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide = Slide::latest()->get();
        return view('admin.slide', compact('slide'));
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
            'title' => 'required',
            'content' => 'required',
        ]);

        if(!is_null($request->image)){

            $new_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/storage/images'), $new_name);

            $slide = new Slide();
            $slide->title = $request->input('title');
            $slide->content = $request->input('content');
            $slide->image = $new_name;
            $slide->active = true;
            $slide->save();
        }
        return redirect(route('slide.index'))->with([
            'message' => 'Successfully saved.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.slide', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.slide', compact('slide'));
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
        Slide::find($id)->delete();
        return redirect(route('slide.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
