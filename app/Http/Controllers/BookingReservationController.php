<?php

namespace App\Http\Controllers;

use App\Models\logs;
use App\Models\Bookings;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\BookingEmployees;
use App\Models\BookingReservation;
use Illuminate\Support\Facades\Auth;

class BookingReservationController extends Controller
{
    public function index()
    {
        return view('admin.reservations', [
            'reservations' => BookingReservation::all(),
            'title' => 'Reservations',
            'employees' => Employee::all()
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


    public function approve(Request $request)
    {
        //dd($request->all());

        //delete reservation
        $reservation = BookingReservation::find($request->id);
        $reservation->delete();

        //create booking
        $formFields = $request->validate([
            'name' => 'required',
            'start_date' => ['required', 'date'],
            'start_time' => 'required',
            'end_time' => 'required',
            'clientid' => ['required', 'numeric'],
            'venue' => 'required'
        ]);

        if ($request->end_date === null) {
            $end_date = $request->start_date;
        } else {
            $end_date = $request->end_date;
        }
        $booking = Bookings::create([
            'name' =>  $formFields['name'],
            'date_start' =>   $formFields['start_date'],
            'date_end' =>   $end_date,
            'time_start' =>   $formFields['start_time'],
            'time_end' => $formFields['end_time'],
            'client_id' => $formFields['clientid'],
            'venue' => $formFields['venue']
        ]);

        //assign employees
        foreach ($request->employees as $employee) {
            //     dd($employee);
            BookingEmployees::create([
                'booking_id' =>  $booking->id,
                'employee_id' => $employee
            ]);
        }

        //add logs
        logs::create([
            'log_id' => $booking->id,
            'name' => 'New Booking ' .  $formFields['name'],
            'log_type' => 'Booking'
        ]);


        return redirect()->route('admin/reservations')->with('success', 'Event created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $reservation = BookingReservation::find($request->reservationIDDelete);
        $reservation->delete();

        logs::create([
            'log_id' => $request->reservationIDDelete,
            'name' => 'Declined Reservation ' . $reservation->name,
            'log_type' => 'Reservation'
        ]);

        return redirect()->route('admin/reservations')->with('success', 'reservations declined succesfully');
    }
}
