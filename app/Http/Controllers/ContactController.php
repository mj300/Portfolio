<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\MessageRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'message' => 'required',
            'phone' => 'nullable|regex:/^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$/',
        ]);
                
  $contact= Contact::create([
       'name'=>$request->input('name'),
       'email'=>$request->input('email'),
       'phone'=>$request->input('phone'),
       'website'=>$request->input('website'),
       'message'=>$request->input('message'),
    ]);
   // Notification::route('mail', 'mahdi.joveyni@gmail.com')->notify(new MessageRecieved($contact));
      return redirect('/');
    }
}
