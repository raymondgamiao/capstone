<?php

namespace App\Http\Controllers;

use App\Models\logs;
use App\Models\User;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class EmployeeContoller extends Controller
{
    public function index()
    {
        return view('admin.employees', [
            'employees' => Employee::all(),
            'branches' => Branch::all(),
            'title' => 'Employees'
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'username' => ['required', Rule::unique('users', 'username')],
                'name' => 'required',
                'role' => 'required',
                'branch_id' => 'required|numeric',
                'contact' => 'required'
            ],
            [
                'branch_id.numeric' => 'Select a branch'
            ]
        );

        $user = User::create([
            'username' =>  $formFields['username'],
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' =>  'employee',
            'remember_token' => Str::random(10)
        ]);

        $employee =  Employee::create([
            'user_id' => $user->id,
            'name' =>  $formFields['name'],
            'role' =>   $formFields['role'],
            'branch_id' => $formFields['branch_id'],
            'contact' => $formFields['contact']
        ]);

        logs::create([
            'log_id' => $employee->id,
            'name' => 'New Employee ' .  $formFields['name'],
            'log_type' => 'Employee'
        ]);

        return redirect('/admin/employees')->with('success', 'employee created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $employee = Employee::find($request->employeeIDDelete);
        $employee->delete();

        logs::create([
            'log_id' => $request->employeeIDDelete,
            'name' => 'Deleted Employee ' . $employee->name,
            'log_type' => 'Employee'
        ]);

        return redirect()->route('admin/employees')->with('success', 'employee deleted succesfully');
    }

    public function update(Request $request)
    {
        //dd($request->branchIDEdit);
        $formFields = $request->validate([
            'roleEdit' => 'required',
            'branch_idEdit' => ['required', 'numeric'],
            'nameEdit' => 'required',
            'contactEdit' => 'required'
        ]);

        $employee = Employee::find($request->employeeIDEdit);
        $employee->role = $formFields['roleEdit'];
        $employee->branch_id = $formFields['branch_idEdit'];
        $employee->name = $formFields['nameEdit'];
        $employee->contact = $formFields['contactEdit'];
        $employee->save();

        logs::create([
            'log_id' => $request->employeeIDEdit,
            'name' => 'Updated Employee ' .  $formFields['nameEdit'],
            'log_type' => 'Employee'
        ]);

        return redirect()->route('admin/employees')->with('success', 'employee updated succesfully');
    }
}
