<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //
    public function contact() {
        return view('contact-us');
    }

    public function sendEMAIL(Request $request){
        $detailes = [
            'name' => $request->name,
            'email' => $request->email
        ];

        Mail::to('leadervps@gmail.com')->send(new ContactMail($detailes));
        return back()->with('message_sent','your message sent perfect');
    }
}
