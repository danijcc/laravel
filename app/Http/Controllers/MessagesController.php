<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
           

        ],[
            'name.required' => __('I need your name')
        ]); 

        Mail::to('danicolmenares7@gmail.com')->send(new MessageReceived($message)) ;
           
         return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
