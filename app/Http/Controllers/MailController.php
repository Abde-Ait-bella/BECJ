<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Email;

class MailController extends Controller
{
    public function index(Request $request){
        $mailData = [
            'nom' => $request->nom,
            'email' => $request->email  ,
            'tel' => $request->tel,
            'subject' => $request->subject  ,
            'message' => $request->message
        ];

        Mail::to('BECJ@gmail.com')->send(new Email($mailData));
        return redirect('/');
    }
}
