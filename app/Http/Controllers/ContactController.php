<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{

    public function index()
    {
        return view('frontEnd.contact');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'uname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'mgs' => 'required|string'
        ]);

        $data = array(
            'uname' => $request->uname,
            'email' => $request->email,
            'phone' => $request->phone,
            'mgs' => $request->mgs,
        );
        Mail::to('fartoderashmi1@gmail.com')->send(new SendMail($data));
        return redirect()->route('contact')->with('success', 'Thank you for contacting us.');
    }
}
