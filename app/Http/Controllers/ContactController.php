<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function message()
    {
        return view('site.pages.contact');
    }

    public function messages()
    {
        $message = Message::latest()->get();
        return view('admin.message', compact('message'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'sometimes|string',
            'message' => 'required|min:3|max:1000',
        ]);

        $message = new Message();
        $message->name = $request->input('name');
        $message->phone = $request->input('phone');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');

        $message->save();

        return redirect(route('contact'))->with([
            'message' => 'Votre message a bien été envoyé !',
            'alert-type' => 'success',
        ]);
    }
}
