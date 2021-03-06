<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }
    public function sendEmail(Request $request)
    {
        /*$details = [
            'title' => 'Mail from Surfside Media',
            'body' => 'This is for testing mail using gmail'
        ];

        Mail::to('mkbalrog34@gmail.com')->send(new TestMail($details));
        return "E-mail send";*/
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to('mkbalrog34@gmail.com')->send(new TestMail($details));
        return back()->with('message_send', 'Email enviado com sucesso');
    }
}
