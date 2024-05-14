<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::latest()->get();
        return view('admin.pages.testimonial', compact('testimonial'));
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
            'fonction' => 'required',
            'description' => 'required',
        ]);

        if(!is_null($request->avatar)){

            $new_name = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('/storage/images'), $new_name);

            $testimonial = new Testimonial;
            $testimonial->name = $request->input('name');
            $testimonial->fonction = $request->input('fonction');
            $testimonial->avatar = $new_name;
            $testimonial->description = $request->input('description');
            $testimonial->save();
        }
        return redirect(route('testimonial.index'))->with([
            'message' => 'Successfully saved.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.pages.testimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.pages.testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'sometimes|string',
            'fonction' => 'sometimes|string',
            'description' => 'sometimes|string',
        ]);

        $payload = [];
        if($request->hasFile('avatar')){
            $avatar = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('/storage/images'),$avatar);

            $payload = array_merge($payload, [
                'avatar'=> $avatar
            ]);
        }

        $testimonial = Testimonial::find($id);
        if($testimonial){
            $payload = array_merge($payload, $request->except(['avatar']));

            $testimonial->update($payload);

            return redirect(route('testimonial.index'))->with([
                'message' => 'Successfully updated.!',
                'alert-type' => 'success',
            ]);

        }else{
            return redirect(route('testimonial.index'))->with([
                'message' => 'Successfully updated.!',
                'alert-type' => 'success',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::find($id)->delete();
        return redirect(route('testimonial.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
