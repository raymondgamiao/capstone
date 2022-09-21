<?php

namespace App\Http\Controllers;

use App\Models\logs;
use App\Models\Client;
use App\Models\Bookings;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\BookingEmployees;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Bookings::all();
        foreach ($bookings as $booking) {
            $events[] = [
                'id' => $booking->id,
                'employees' => DB::table('bookings')
                    ->select('employees.id', 'employees.name')
                    ->join('booking_employees', 'bookings.id', '=', 'booking_employees.booking_id')
                    ->join('employees', 'booking_employees.employee_id', '=', 'employees.id')
                    ->where('bookings.id', '=', $booking->id)
                    ->get()

            ];
        };

        return view('admin.bookings', [
            'bookings' => Bookings::all(),
            'bookingEmployees' => BookingEmployees::all(),
            'title' => 'Bookings',
            'employees' => Employee::all(),
            'clients' => Client::all(),
            'bookingEmployees' => BookingEmployees::all(),
            'events' => $events
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => 'required',
            'start_date' => ['required', 'date'],
            'start_time' => 'required',
            'end_time' => 'required',
            'client' => ['required', 'numeric'],
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
            'client_id' => $formFields['client'],
            'venue' => $formFields['venue']
        ]);

        foreach ($request->employees as $employee) {
            //     dd($employee);
            BookingEmployees::create([
                'booking_id' =>  $booking->id,
                'employee_id' => $employee
            ]);
        }

        logs::create([
            'log_id' => $booking->id,
            'name' => 'New Booking ' .  $formFields['name'],
            'log_type' => 'Booking'
        ]);


        return redirect()->route('admin/bookings')->with('success', 'Event created succesfully');
    }

    public function update(Request $request)
    {
        //dd($request->all());
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

        $booking = Bookings::find($request->id);
        $booking->name = $formFields['name'];
        $booking->date_start = $formFields['start_date'];
        $booking->date_end = $end_date;
        $booking->time_start = $formFields['start_time'];
        $booking->time_end = $formFields['end_time'];
        $booking->venue = $formFields['venue'];
        $booking->client_id = $formFields['clientid'];
        $booking->save();

        BookingEmployees::where('booking_id', '=', $request->id)->delete();

        foreach ($request->employees as $employee) {
            BookingEmployees::create([
                'booking_id' =>  $booking->id,
                'employee_id' => $employee
            ]);
        }
        logs::create([
            'log_id' => $request->id,
            'name' => 'Updated Booking ' .  $formFields['name'],
            'log_type' => 'Booking'
        ]);

        return redirect()->route('admin/bookings')->with('success', 'Event updated succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $booking = Bookings::find($request->bookingIDDelete);
        $booking->delete();

        logs::create([
            'log_id' => $request->bookingIDDelete,
            'name' => 'Deleted Booking ' . $booking->name,
            'log_type' => 'Booking'
        ]);

        return redirect()->route('admin/bookings')->with('success', 'Event deleted succesfully');
    }
}
