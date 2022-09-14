<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {

        $formFields = $request->validate(
            [
                'username' => ['required', Rule::unique('users', 'username')],
                'name' => 'required',
                'usertype' => 'required',
                'password' => ['required', 'confirmed', 'min:6']
            ]
        );

        //hash password
        $formFields['password'] = bcrypt(($formFields['password']));



        if ($request->usertype === 'client') {
            $user = User::create([
                'username' =>  $formFields['username'],
                'password' => $formFields['password'],
                'usertype' =>  'client',
                'status' =>  'active'
            ]);

            Client::create([
                'user_id' => $user->id,
                'name' =>  $formFields['name']
            ]);
            auth()->login($user);
            return redirect('/');
        } elseif ($request->usertype === 'employee') {
            $user = User::create([
                'username' =>  $formFields['username'],
                'password' => $formFields['password'],
                'usertype' =>  'employee',
                'status' =>  'pending'
            ]);

            Employee::create([
                'user_id' => $user->id,
                'name' =>  $formFields['name']
            ]);
            // dd($user);
            return redirect('/admin/profile')->with('message', 'you have successfully creadtd an account. inform the admin to change status blabla');
        } elseif ($request->usertype === 'admin') {
            $user = User::create([
                'username' =>  $formFields['username'],
                'password' => $formFields['password'],
                'usertype' =>  'admin',
                'status' =>  'pending'
            ]);

            Employee::create([
                'user_id' => $user->id,
                'name' =>  $formFields['name']
            ]);
            return redirect('/admin/profile')->with('message', 'you have successfully creadtd an account. inform the admin to change status blabla');
        }
    }

    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'logout');
    }

    public function login()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $formFields = $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            $usertype = Auth::user()->usertype;
            // dd($usertype);
            switch ($usertype) {
                case 'admin':
                case 'employee':
                    return redirect()->route('admin');
                    break;
                case 'client':
                    return redirect()->route('home');
                    break;
                default:
                    return redirect()->route('home');
                    break;
            }
        }

        return back()->withErrors(['username' => 'invalid credentials'])->onlyInput('username');
    }
}
