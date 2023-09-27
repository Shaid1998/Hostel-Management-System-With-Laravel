<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function WorkerDashboard(){
        return view('worker.worker_Dashboard');
    }//End Method 
}
