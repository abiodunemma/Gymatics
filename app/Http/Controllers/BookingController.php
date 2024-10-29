<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view  ('/booking');
    }

    public function apply(){
        return view  ('/members');
    }

    public function get(){
        return view  ('/traniner');
    }
}
