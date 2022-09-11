<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Branch;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\Inventory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'employees' => Employee::all(),
            'branches' => Branch::all(),
            'bookings' => Bookings::all(),
            'clients' => Client::all(),
            'inventory' => Inventory::all(),
            'albums' => Gallery::all(),
            'title' => 'Dashboard'
        ]);
    }
}
