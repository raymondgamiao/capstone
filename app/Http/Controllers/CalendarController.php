<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bookings;
use App\Models\Client;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $events = array();
        $bookings = Bookings::all();

        foreach ($bookings as $booking) {
            $events[] = [
                'id' => $booking->id,
                'title' => $booking->name,
                'start' => $booking->date_start . "T" . $booking->time_start,
                'end' => $booking->date_end . "T" . $booking->time_end,
                'backgroundColor' => 'rgba(58,87,232,0.2)',
                'textColor' => 'rgba(58,87,232,1)',
                'borderColor' => 'rgba(58,87,232,1)',
                'extendedProps' => [
                    'date_start' => $booking->date_start,
                    'date_end' => $booking->date_end,
                    'time_start' => $booking->time_start,
                    'time_end' => $booking->time_end,
                    'venue' => $booking->venue,
                    'clientID' => $booking->client->id,
                    'client' => $booking->client->name
                ]
            ];
        };
        //return $events;
        return view('admin.calendar', [
            'title' => 'Calendar',
            'events' => $events,
            'bookings' => Bookings::all(),
            'clients' => Client::all()
        ]);
    }

    public function store(Request $request)
    {
        //dd($request->end_date);
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

        Bookings::create([
            'name' =>  $formFields['name'],
            'date_start' =>   $formFields['start_date'],
            'date_end' =>   $end_date,
            'time_start' =>   $formFields['start_time'],
            'time_end' => $formFields['end_time'],
            'client_id' => $formFields['client'],
            'venue' => $formFields['venue']
        ]);


        return redirect()->route('admin/calendar')->with('success', 'Event created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $category = Bookings::find($request->iddelete);
        $category->delete();

        return redirect()->route('admin/calendar')->with('success', 'Event deleted succesfully');
    }

    public function update(Request $request)
    {

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

        $category = Bookings::find($request->id);
        $category->name = $formFields['name'];
        $category->date_start = $formFields['start_date'];
        $category->date_end = $end_date;
        $category->time_start = $formFields['start_time'];
        $category->time_end = $formFields['end_time'];
        $category->venue = $formFields['venue'];
        $category->client_id = $formFields['client'];
        $category->save();

        return redirect()->route('admin/calendar')->with('success', 'Event updated succesfully');
    }
}
//return json_encode($eventOutput);