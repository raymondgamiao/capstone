<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\logs;
use App\Models\Branch;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Bookings;
use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $newclients = Client::select('*')
            ->whereMonth('created_at', Carbon::now()->month)
            ->get()
            ->count();
        // dd($newclients);
        DB::statement("SET SQL_MODE=''");
        $topclients = DB::table('bookings')
            ->select(DB::raw('count(bookings.id) as total'), 'client_id', 'clients.name', 'clients.contact')
            ->groupBy('client_id')
            ->join('clients', 'bookings.client_id', '=', 'clients.id')
            ->get();
        //dd($topclients);

        // dd(logs::orderBy('id', 'desc')->take(10)->get());
        return view('admin.index', [
            'employees' => Employee::all(),
            'branches' => Branch::all(),
            'bookings' => Bookings::all(),
            'clients' => Client::all(),
            'inventory' => Inventory::all(),
            'albums' => Gallery::all(),
            'logs' => logs::orderBy('id', 'desc')->take(10)->get(),
            'newclients' => $newclients,
            'topclients' => $topclients,
            'title' => 'Dashboard'
        ]);
    }
}
