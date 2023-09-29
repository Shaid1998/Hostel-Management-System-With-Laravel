<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function HostelInformation(){
        return view('visitor.hostel_information');
    }
}
