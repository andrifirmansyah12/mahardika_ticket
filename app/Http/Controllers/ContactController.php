<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Mail;

class ContactController extends Controller
{
    public function sendmail(Request $request)
    {
        $contacts = [
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'message' => $request->message
        ];

        // dd($contact);

        Mail::to('andrihau@gmail.com')->send(new MyTestMail($contacts));
        return back()->with('message_sent', 'Pesan telah berhasil dikirim!');
    }
}
