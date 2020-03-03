<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Mail::send(["html" => view('mail', compact('message','name','email'))], ['Name', $name], function ($message) use ($email, $name, $subject) {
            $message->to('harut.chilingarian@gmail.com')->subject($subject);
            $message->from($email, $name.'  &bull;  '.$email);
        });
        return 'success';
    }
}
