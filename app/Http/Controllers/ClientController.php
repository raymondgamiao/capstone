<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        /*         $clients = DB::table('users')
            ->select(
                'users.username as username',
                'clients.name as name',
                'clients.email as email',
                'clients.contact as contact',
                'clients.address as address'
            )
            ->where('users.usertype', '=', 'client')
            ->join('clients', 'users.id', '=', 'clients.user_id')
            ->get(); */

        //dd($employees);
        /*         return view('admin.clients', [
            'clients' => $clients,
            'title' => 'Clients'
        ]); */

        return view('admin.clients', [
            'clients' => Client::all(),
            'title' => 'Clients'
        ]);
    }


    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'username' => ['required', Rule::unique('users', 'username')],
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'address' => 'required'
            ]
        );

        $user = User::create([
            'username' =>  $formFields['username'],
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' =>  'client',
            'remember_token' => Str::random(10)
        ]);

        Client::create([
            'user_id' => $user->id,
            'name' =>  $formFields['name'],
            'email' =>   $formFields['email'],
            'address' => $formFields['address'],
            'contact' => $formFields['contact']
        ]);

        return redirect('/admin/clients')->with('success', 'client created succesfully');
    }
}
