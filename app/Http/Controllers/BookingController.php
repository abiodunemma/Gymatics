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

    public function store(Request  $request){

             // Validate the request data
             $request->validate([
                'session' => 'required|string|max:255',
                // Add validation rules for other fields if necessary
            ]);

            $session = $request->input('session');

            
    // Save the booking to the database
    Booking::create(['session' => $session]);

        // Booking::create([
        //     'morning' => $request-> morning,
        //     'evening' => $request-> evening,

        // ]);
        return response()->json(['message' => "You have successfully booked the {$session} session!"]);
    }
}
