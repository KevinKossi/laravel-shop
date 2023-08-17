<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackSend;
use App\Models\User;
use App\Mail\SendFeedbackToAdmins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  public function home()
  {
      return view('pages.home');
   }

   public function about(){
     return view('pages.about');
   }

   public function contact(){
     return view('pages.contact');
   }

   public function articles(){
    return view('articles.index');
  }

  public function products(){
    return view('product.index');
  }


   public function FAQ(){
     return view('pages.FAQ');
   }

  //  public function sendContactFormToAdmins(Request $request){
  //     $validatedData = request()->validate([
  //       'name' => 'required',
  //       'email' => 'required',
  //       'message' => 'required',
  //     ]);

  //     $name = $validatedData['name'];
  //     $email = $validatedData['email'];
  //     $message = $validatedData['message'];
  //     $emails = [];
  //     $users = User::where("isAdmin",true)->get();

  //     foreach($users as $user){
  //         array_push($emails, $user->email);
  //     }

  //     Mail::to($emails)->send(new SendContactMailToAdmins($name,$email,$message));
  //     Mail::to($email)->send(new ContactMail());
  //     return redirect(route('contactFormSent'));
  // }
  
  public function contactFormSent(){
    return view('pages.contactFormSent');
  }
}
 