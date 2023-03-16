<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Mission;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    //
    public function showContact()
    {
        $data=Contact::all();

        return view('contact',compact('data'));
    }

    public function showContact2()
    {
        $data=Contact::all();

        return view('contact2',compact('data'));
    }
    
    // accept message from people
    public function sendMessage(Request $request)
    {
        $message = new message;  //message as table message
        // this is a validation data
        $validated = $request->validate([
            'fullname' => ['required', 'string'],
            'enquiry' => ['required' , 'string' , 'min:10' ],
            // 'enquiry' => 'required|unique:departments',
        ]);

        $message->fullname=$request->fullname; 
        $message->email=$request->email;
        $message->message=$request->enquiry;
        $message->save();

        return redirect()->back()->withErrors([
            'message' => 'Message Sent Successfully',
        ])->onlyInput('email');
    }

    public function sendMessage2(Request $request)
    {
        $message = new message;  //message as table message
        // this is a validation data
        $validated = $request->validate([
            'fullname' => ['required', 'string'],
            'enquiry' => ['required' , 'string' , 'min:10' ],
            // 'enquiry' => 'required|unique:departments',
        ]);

        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);


        // $message->fullname=$request->fullname; 
        // $message->email=$request->email;
        // $message->message=$request->enquiry;
        // $message->save();

        // return redirect()->back()->withErrors([
        //     'message' => 'Message Sent Successfully',
        // ])->onlyInput('email');
    }

    public function index()
    {
        $data1=Contact::all();
        return view('contact2');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // dd($request);
        Message::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }


}
