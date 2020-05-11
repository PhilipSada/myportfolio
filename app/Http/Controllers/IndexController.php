<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function show(){
        return view('index');
    }
    public function viewMail(){
        return view('mail/contact-mail');
    }
    public function mailReceived(){
        return view('mail-received');
    }
    public function sendMail(Request $request){

        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phonenumber'=>['required'],
            'message'=>['required'],
            
        ]);

        $content = [
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'message'=>$request->message,
        ];

        $recipients =[
            'sadaphillip@gmail.com',
            'sada_phillip@yahoo.com'

        ];
     
        Mail::to($recipients)->send(new Contact($content));

        $request->session()->put('enquiry', 'enquiry-sent');

        return redirect('/mail-received');
    }
}
