<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class EmployeeContoller extends Controller
{
    public function index()
    {
        $employees = DB::table('users')
            ->select(
                'users.id as userid',
                'employees.id as employeeid',
                'users.username as username',
                'employees.name as name',
                'employees.role as role',
                'employees.contact as contact',
                'branch.name as branch'
            )
            ->where('users.usertype', '=', 'employee')
            ->orWhere('users.usertype', '=', 'admin')
            ->join('employees', 'users.id', '=', 'employees.user_id')
            ->join('branch', 'branch.id', '=', 'employees.branch_id')
            ->get();


        //dd($employees);
        return view('admin.employees', [
            'employees' => $employees,
            'branches' => Branch::all(),
            'title' => 'Employees'
        ]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        /*        $user = User::create([
            'username' =>  $request->username,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' =>  'employee',
            'remember_token' => Str::random(10)
        ]); */



        $formFields = $request->validate(
            [
                'username' => ['required', Rule::unique('users', 'username')],
                'name' => 'required',
                'role' => 'required',
                'branch_id' => 'required|numeric',
                'contact' => 'required'
            ],
            [
                'branch_id.numeric' => 'Select a branch',
            ]
        );
        // dd($request->all());
        $user = User::create([
            'username' =>  $formFields['username'],
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' =>  'employee',
            'remember_token' => Str::random(10)
        ]);
        /*   
        $user = new User; 
        $user->username = $formFields['username'];
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->usertype = 'employee';
        $user->remember_token =  Str::random(10);
        $user->save(); 
        */
        $employee = Employee::create([
            'user_id' => $user->id,
            'name' =>  $formFields['name'],
            'role' =>   $formFields['role'],
            'branch_id' => $formFields['branch_id'],
            'contact' => $formFields['contact']
        ]);

        /* 
        $employee = new Employee;
        $employee->user_id = $user->id;
        $employee->name = $formFields['name'];
        $employee->role = $formFields['role'];
        $employee->branch_id = $formFields['branch_id'];
        $employee->contact =  $formFields['contact']; 
        $employee->save();
        */

        return redirect('/admin/employees')->with('success', 'employee created succesfully');
        /*  $users = User::where('username', '=', $request->username)->first();
        if ($users === null) {
            return redirect('/admin/employees')->with('success', 'employee created succesfully');
        } else {
            // echo 'meron na';
            return redirect('/admin/employees')->with('error', 'username already exists');
        } */
    }
}
