<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function contact_us()
    {
        return view('contactus');
    }
}
