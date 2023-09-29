<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ContactForGuest;

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

}
