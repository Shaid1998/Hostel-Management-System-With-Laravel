<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ContactForGuest;
use App\Models\Message;

class GuestController extends Controller
{
    public function HostelInformation(){
        $serviceall = Service::all();
        return view('visitor.hostel_information',compact('serviceall'));
    }//End Method

    public function HostelHome(){
        return view('welcome');
    }//End Method

    public function HostelContact(){
        $serviceall = ContactForGuest::all();
        return view('visitor.hostel_contact',compact('serviceall'));
    }//End Method

    public function VisitorMessageContact(){
        return view('visitor.visitor_send_contact');
    }//End Method

    public function VisitorMessageContactStore(Request $request){
        Message::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'designation' => $request->designation,
            'message' => $request->message
        ]);

        $notification = array(
            'message' => 'Send Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method

}
