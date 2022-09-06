<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = DB::table('users')
            ->select(
                'users.username as username',
                'clients.name as name',
                'clients.email as email',
                'clients.contact as contact',
                'clients.address as address'
            )
            ->where('users.usertype', '=', 'client')
            ->join('clients', 'users.id', '=', 'clients.user_id')
            ->get();

        //dd($employees);
        return view('admin.clients', [
            'clients' => $clients,
            'title' => 'Clients'
        ]);
    }
}
