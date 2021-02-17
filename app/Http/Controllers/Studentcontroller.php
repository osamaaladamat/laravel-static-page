<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function services()
    {
        return view('services');
    }
    public function about_us()
    {
        return view('aboutus');
    }
}
