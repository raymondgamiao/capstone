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


        $bookingsArr = array();
        $monthsArr = array();

        /*     $monthss = Bookings::get()->groupBy(function ($d) {
            return Carbon::parse($d->created_at)->format('m');
        }); */
        DB::statement("SET SQL_MODE=''");
        $bookings = DB::table('bookings')
            ->select(
                DB::raw('DATE_FORMAT(date_start, "%M") as month'),
                DB::raw('count(bookings.id) as total'),
                'date_start'
            )
            ->groupBy('month')
            ->orderBy('date_start')
            ->whereYear('date_start', date('Y'))
            ->get();

        foreach ($bookings as $booking) {
            $bookingsArr[] = $booking->total;
            $monthsArr[] = $booking->month;
        }
        //dd($bookingsArr);


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
            ->orderBy('total', 'desc')
            ->get()->take(5);
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
            'bookingsArr' => $bookingsArr,
            'monthsArr' => $monthsArr,
            'title' => 'Dashboard'
        ]);
    }
}
