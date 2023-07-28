<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MDController extends Controller
{
    public function index(){
        return view('md.index');
    }
}
