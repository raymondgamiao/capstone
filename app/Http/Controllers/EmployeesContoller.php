<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesContoller extends Controller
{
    public function index()
    {
        $employees = DB::table('users')
            ->select(
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
            'title' => 'Employees'
        ]);
    }
}
