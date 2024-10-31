<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $redirectTo = '/login';
    public function index(){

        return view  ('/booking');
    }

    public function apply(){
        return view  ('/members');
    }

    public function get(){
        return view  ('/traniner');
    }

    public function input(Request  $request){

        Booking::create([
            'userid' => $request->userid,
            'email' => $request-> email,
            'morning' => $request-> morning,
            'evening' => $request-> evening,

        ]);
    }
}
