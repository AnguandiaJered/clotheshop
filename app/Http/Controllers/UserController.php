<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::with(['role'])->orderBy('id','desc')->paginate(5);
        $user = User::orderBy('id','desc')->paginate(5);
        // $user = User::latest()->get();
        $role = Role::latest()->get();
        return view('admin.users', compact('user','role'));
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
            'email' => 'sometimes|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
            'role_id' => 'required'
        ]);

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = bcrypt($request->input('password'));
            $user->role_id = $request->input('role_id');
            $user->active = true;
            $user->verified = true;
            $user->save();

            return redirect(route('users.index'))->with([
                'message' => 'Successfully saved.!',
                'alert-type' => 'success',
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // \DB::update("UPDATE users set name = ?, email = ?, phone = ?, password = ? WHERE id= ? ", [$request->name,$request->email,$request->phone,\bcrypt($request->password),$request->id]);
        $request->validate([
            'name' => 'sometimes|string',
            'email' => 'sometimes|email|unique:users',
            'phone' => 'sometimes|string',
            'password' => 'sometimes|string|min:6',
            'role_id' => 'sometimes|integer'
        ]);

            $user = User::findOrFail($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = bcrypt($request->input('password'));
            $user->role_id = $request->input('role_id');
            $user->active = true;
            $user->verified = true;
            $user->save();

        return redirect(route('users.index'))->with([
            'message' => 'Successfully updated.!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect(route('users.index'))->with([
            'message' => 'Successfully deleted.!',
            'alert-type' => 'success',
        ]);
    }
}
