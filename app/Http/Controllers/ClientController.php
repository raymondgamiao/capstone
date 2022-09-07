<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
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


    public function store(Request $request)
    {
        //dd($request->all());

        $user = new User;
        $user->username = $request->username;
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->usertype = 'client';
        $user->remember_token =  Str::random(10);
        $user->save();

        // dd($user->id);
        $client = new Client();
        $client->user_id = $user->id;
        $client->email = $request->email;
        $client->name = $request->name;
        $client->contact =  $request->contact;
        $client->address = $request->address;
        $client->save();

        return redirect('/admin/clients')->with('success', 'client created succesfully');
    }
}
