<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                'userid' => 'required|exists:users,id',
            'email1' => 'required|email',
            'name' => 'required|string|max:255',
            'batch1' => 'required|in:morning,evening',

            ]);

             // Create a new booking
        Booking::create([
            'userid' => $request->userid,
            'email' => $request->email,
            'email1' => $request->email1, // Store the email from the form
            'name' => $request->name,
        'batch' => $request->batch1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Optionally return a response
        return redirect()->back()->with('success', 'Booking successful!');
    }
    }

