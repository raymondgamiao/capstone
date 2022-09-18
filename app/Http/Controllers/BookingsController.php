<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Models\BookingEmployees;

class BookingsController extends Controller
{
    public function index()
    {
        return view('admin.bookings', [
            'bookings' => Bookings::all(),
            'bookingEmployees' => BookingEmployees::all(),
            'title' => 'Bookings'
        ]);
    }
}
