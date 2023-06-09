<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendMail(Request $request)
    {
        $mail = new \stdClass();
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->message = $request->message;
        $mail->subject = $request->subject;

        Mail::to(env('MAIL_USERNAME'))->send(new \App\Mail\SendEmail($mail));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
