<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\ContactUs;


class ContactController extends Controller
{
    public function index() {
        $event = Event::limit(1)->orderBy('id', 'DESC')->first();
        return view('website.contact.contact',[
            'event' => $event
        ]);
    }

    public function storeForm(Request $request) {
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required|max:255',
          'phone' => 'required|min:10|max:10',
          'message' => 'required',
       ]);

       ContactUs::create($request->all());

       try {
        $details = [
        'name' => $request->name,
        'email' => $request->email,
        'bodyMessage' => $request->message,
        'subject' => $request->subject,
        'phone' => $request->phone,
    ];
    
    \Mail::to('abdullah.ahadi78@gmail.com')->send(new \App\Mail\MyMail($details));

      return back()->with('success', 'Thanks for contacting us, We received your message.');
    } catch (\Exception $e) {
        return back()->with('success', $e->getMessage());
       
    }
    }
}
