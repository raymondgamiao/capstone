<?php

namespace App\Http\Controllers;

use App\Models\logs;
use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Models\BookingReservation;
use Illuminate\Support\Facades\Auth;

class BookingReservationController extends Controller
{
    public function index()
    {
        return view('admin.reservations', [
            'reservations' => BookingReservation::all(),
            'title' => 'Reservations'
        ]);
    }

    public function store(Request $request)
    {
        //dd(Auth::user()->client->first()->id);
        $formFields = $request->validate([
            'name' => 'required',
            'start_date' => ['required', 'date'],
            'start_time' => 'required',
            'end_time' => 'required',
            'venue' => 'required'
        ]);

        if ($request->end_date === null) {
            $end_date = $request->start_date;
        } else {
            $end_date = $request->end_date;
        }
        $booking = BookingReservation::create([
            'name' =>  $formFields['name'],
            'date_start' =>   $formFields['start_date'],
            'date_end' =>   $end_date,
            'time_start' =>   $formFields['start_time'],
            'time_end' => $formFields['end_time'],
            'client_id' => Auth::user()->client->first()->id,
            'venue' => $formFields['venue'],
            'message' => $request->message
        ]);

        logs::create([
            'log_id' => $booking->id,
            'name' => 'New Booking Reservation ' .  $formFields['name'],
            'log_type' => 'Booking Reservation'
        ]);

        return redirect()->route('contact')->with('success', 'Booking Reservation recorded succesfully. Please wait for a confirmation call from our staff');
    }
}
