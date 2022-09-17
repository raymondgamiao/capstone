<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientProfileController extends Controller
{
    public function index()
    {

        //dd(Auth::user()->employee->first()->id);
        /*         $upcomingevents = DB::table('employees')
            ->select('employees.name as employee', 'bookings.name as booking', 'bookings.date_start as when', 'bookings.time_start as time_start', 'bookings.venue as venue')
            ->join('booking_employees', 'booking_employees.employee_id', '=', 'employees.id')
            ->join('bookings', 'booking_employees.booking_id', '=', 'bookings.id')
            ->where('booking_employees.employee_id', '=', Auth::user()->employee->first()->id)
            ->where('date_start', '>=',  Carbon::now())
            ->paginate(10);

        $pastevents = DB::table('employees')
            ->select('employees.name as employee', 'bookings.name as booking', 'bookings.date_start as when', 'bookings.time_start as time_start', 'bookings.venue as venue')
            ->join('booking_employees', 'booking_employees.employee_id', '=', 'employees.id')
            ->join('bookings', 'booking_employees.booking_id', '=', 'bookings.id')
            ->where('booking_employees.employee_id', '=', Auth::user()->employee->first()->id)
            ->where('date_start', '<=',  Carbon::now())
            ->paginate(10); */

        $upcomingevents = Bookings::all()
            ->where('client_id', '=', Auth::user()->client->first()->id)
            ->where('date_start', '>=',  Carbon::now());
        $pastevents = Bookings::all()
            ->where('client_id', '=', Auth::user()->client->first()->id)
            ->where('date_start', '<=',  Carbon::now());

        // dd($upcomingevents);

        //dd($upcomingevents);
        return view('clientprofile', [
            'upcomingevents' => $upcomingevents,
            'pastevents' => $pastevents,
            'title' => 'Profile'
        ]);
    }
}
