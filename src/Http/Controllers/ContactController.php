<?php

namespace Minhquang\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Minhquang\Contact\Mail\ContactMailable;
use Minhquang\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        $validateData = $request->validate([
            'email'=>['required','email'],
            'name'=>['required','min:5','max:50'],
            'mess'=>['required'],
        ]);
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->mess,$request->name,$request->email));
        $rs = Contact::create($validateData);
        return redirect()->back();
    }

}
