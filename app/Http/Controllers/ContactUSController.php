<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('marketingr.contactUS');
    }

    public function contactUSPost(Request $request)
    {

        $this->validate($request, [
            'email'=> 'required',
            'body' => 'required',
            'message' => 'required'
        ]);


        ContactUs::create($request->all());

        //$data  = $request->all();
        //dd($data);
        Mail::send('emails.welcome', array(
            'email' => $request->get('email'),
            'body'=> $request->get('body'),
            'user_message' =>$request->get('message')
        ), function($message)
        {
            $message->from('hola@salamandramarketing.com.mx');
            $message->to('hola@salamandramarketing.com.mx', 'Admin')->subject('Contacto Salamandra');



        });

        return back()->with('success', 'Gracias por contactarnos');




    }
}
