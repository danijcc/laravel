<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
           

        ],[
            'name.required' => __('I need your name')
        ]); 

        Mail::to('jorge@aprendible.com')->send(new MessageReceived) ;
           
         return 'Mensaje Enviado';
    }
}
