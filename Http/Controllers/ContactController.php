<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

use Mail;

use App\Mail\NewContactRequest;

class ContactController extends Controller
{
    public function show()
    {
    	return view('contact');
    }

    public function mail(ContactRequest $request)
    {

    	Mail::to('info@onalpatent.com')->send(new NewContactRequest($request));

    	return back()->with('status','Your Message has been received');
    }
}
