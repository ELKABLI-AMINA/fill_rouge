<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index(){
        return view('contact-us');
    }


    public function store( Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'subject'=>$request->subject,
            
        ]);
        $user = User::where('role',0)->first();
        Mail::to($user->email)->send(new ContactMail($request->name, $request->email, $request->phone, $request->subject));
        return redirect()->route('contact-us');
    }

    public function show()
    {
       $messages= Contact::all();
        return view('message')->with([
            'messages'=>$messages
        ]);
    }



    
}

