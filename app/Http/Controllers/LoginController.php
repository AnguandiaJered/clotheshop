<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'sometimes|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = bcrypt($request->input('password'));
            $user->active = true;
            $user->verified = true;
            $user->save();

        return view('admin.login');
    }

    public function login_set()
    {
        return view('admin.login');
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return view('admin.login');
    }

    public function forgotpassword()
    {
        return view('admin.forgot-password');
    }

    public function registered()
    {
        return view('admin.register');
    }

    public function secure ()
    {
        return view('admin.secure');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect(route('admin.home'))->with([
                'message' => 'Successfully login.!',
                'alert-type' => 'success',
            ]);
        }
        return view('admin.login');
    }
}
