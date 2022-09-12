<?php

namespace App\Http\Controllers;

use App\Models\logs;
use App\Models\User;
use App\Models\Branch;
use App\Models\Client;
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
            'title' => 'Employees'

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

        $client =  Client::create([
            'user_id' => $user->id,
            'name' =>  $formFields['name'],
            'email' =>   $formFields['email'],
            'address' => $formFields['address'],
            'contact' => $formFields['contact']
        ]);


        logs::create([
            'log_id' => $client->id,
            'name' => 'New Client ' .  $formFields['name'],
            'log_type' => 'Client'
        ]);

        return redirect('/admin/clients')->with('success', 'client created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $client = Client::find($request->clientIDDelete);
        $client->delete();

        logs::create([
            'log_id' => $request->clientIDDelete,
            'name' => 'Deleted Client ' . $client->name,
            'log_type' => 'Client'
        ]);

        return redirect()->route('admin/clients')->with('success', 'client deleted succesfully');
    }

    public function update(Request $request)
    {
        //dd($request->branchIDEdit);
        $formFields = $request->validate([
            'nameEdit' => 'required',
            'emailEdit' => ['required', 'email'],
            'contactEdit' => 'required',
            'addressEdit' => 'required'
        ]);

        $client = Client::find($request->clientIDEdit);
        $client->name = $formFields['nameEdit'];
        $client->email = $formFields['emailEdit'];
        $client->contact = $formFields['contactEdit'];
        $client->address = $formFields['addressEdit'];
        $client->save();

        logs::create([
            'log_id' => $request->clientIDEdit,
            'name' => 'Updated Client ' .  $formFields['nameEdit'],
            'log_type' => 'Client'
        ]);

        return redirect()->route('admin/clients')->with('success', 'client updated succesfully');
    }
}
