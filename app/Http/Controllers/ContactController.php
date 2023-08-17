<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show() {
        return view('contact.show');
        
    }

    function submit(ContactRequest $request) {

        Mail::to("admin@ehb.be")->send(new ContactMail($request->name,$request->email,$request->message));
    }
}
