<?php

namespace Iha\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Iha\Contact\Models\Contact;

use Iha\Contact\Mail\ContactEmail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }


    public function send(Request $request)
    {
       Mail::to(config('contact.send_mail_to'))->send(new ContactEmail(
           $request->message,
           $request->name
       ));
       Contact::create($request->all());
       return back();
    }
}
