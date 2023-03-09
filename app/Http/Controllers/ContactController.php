<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Mission;
use Illuminate\Http\Request;
use App\Models\Message;


class ContactController extends Controller
{
    //
    public function showContact()
    {
        $data=Contact::all();

        return view('contact',compact('data'));
    }
    
    // accept message from people
    public function sendMessage(Request $request)
    {
        $message = new message;
        $message->fullname=$request->fullname;
        $message->email=$request->email;
        $message->message=$request->enquiry;
        $message->save();
        return redirect()-back();
    }

}
