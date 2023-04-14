<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function contact(){
        return view('contact-us');
    }

    public function sendEmail( Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $datalis=[
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'message'=>$request->message,
        ];
        Mail::to('amina.elkabli1@gmail.com')->send(new ContactMail($datalis));
        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}

