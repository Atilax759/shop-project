<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questioncontroller extends Controller
{
    public function index(Request $request){
        return view('index');
    }
}
