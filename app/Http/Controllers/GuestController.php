<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class GuestController extends Controller
{
    public function HostelInformation(){
        $serviceall = Service::all();
        return view('visitor.hostel_information',compact('serviceall'));
    }

}
