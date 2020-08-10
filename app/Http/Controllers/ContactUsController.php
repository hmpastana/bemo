<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

use Mail;
use App\Mail\Contact;


class ContactUsController extends Controller
{
    public function index()
    {
        $index = new ContactUs();
        $list = $index->list();

        return view('contact_us',[
            'list' => $list
        ]);
    }

    public function sendMail(Request $request)
    {
        Mail::to($request->email)
        ->cc(env('MAIL_FROM_ADDRESS'))
        ->send(new Contact([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]));

        return back()->with('message-insert', 'Mail sent');
    }
}
