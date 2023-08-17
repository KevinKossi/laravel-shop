<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

use App\Mail\FeedbackSend;
use App\Models\User;
use App\Mail\SendFeedbackToAdmins;


class ContactController extends Controller
{
    function show() {
        return view('contact.show');
        
    }

    public function sendToAdmins(Request $request){
        $validatedData = request()->validate([
          'name' => 'required',
          'email' => 'required',
          'message' => 'required',
        ]);
  
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $message = $validatedData['message'];
        $emails = [];
        $users = User::where("role_as",'1')->get();
  
        foreach($users as $user){
            array_push($emails, $user->email);
        }
  
        Mail::to($emails)->send(new SendFeedbackToAdmins($name,$email,$message));
        Mail::to($email)->send(new FeedbackSend($name,$email,$message));
        return redirect(route('emailSent'));
    }

    public function emailSent(){
        return view('contact.contactSent');
      }
    
}
