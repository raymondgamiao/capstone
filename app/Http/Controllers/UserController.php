<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\logs;
use App\Models\User;
use App\Models\Client;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

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
                'name' =>  $formFields['name'],
                'pfp' =>  'images/pfp/01.png'
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
                'name' =>  $formFields['name'],
                'pfp' => 'images/pfp/01.png'
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
                'name' =>  $formFields['name'],
                'pfp' =>  'images/pfp/01.png'
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

    public function passwordChange(Request $request)
    {

        // dd(request()->all());
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {

            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = User::find(Auth::id());
        $user->password = bcrypt($validatedData['new_password']);
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function employeeupdate(Request $request)
    {
        //dd($request->all());

        //dd(Auth::user()->employee->first()->id);
        $employee = Employee::find(Auth::user()->employee->first()->id);
        $employee->name = $request->name;
        $employee->fb = $request->fb;
        $employee->twitter = $request->twitter;
        $employee->insta = $request->insta;
        $employee->name = $request->name;
        $employee->sss = $request->sss;
        $employee->philhealth = $request->philhealth;
        $employee->pagibig = $request->pagibig;
        $employee->bankacct = $request->bankacct;
        $employee->contact = $request->contact;
        $employee->email = $request->email;
        $employee->address = $request->address;
        if ($request->pfp !== null) {
            $employee->pfp = $request->file('pfp')->store('images/pfp', 'public');
        }
        $employee->save();


        return redirect()->route('admin/profile')->with('success', 'profile updated succesfully');
    }

    public function clientupdate(Request $request)
    {
        //dd($request->all());

        //dd(Auth::user()->employee->first()->id);
        $client = Client::find(Auth::user()->client->first()->id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->contact = $request->contact;
        $client->address = $request->address;
        $client->fb = $request->fb;
        $client->twitter = $request->twitter;
        $client->insta = $request->insta;
        if ($request->pfp !== null) {
            $client->pfp = $request->file('pfp')->store('images/pfp', 'public');
        }
        $client->save();


        return redirect()->route('clientprofile')->with('success', 'profile updated succesfully');
    }
}
