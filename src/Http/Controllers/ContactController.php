<?php

namespace Omenejoseph\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omenejoseph\Contact\Models\Contact;
use Omenejoseph\Contact\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function index(){
        return view('contact::contact');
    }
    public function send(Request $request){
        // dd(config('contact.send_email_to'));
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message, $request->name));
        Contact::create($request->all());
        return view('contact::contact');
    }
}
