<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /*   public function index()
    {
        return view(
            'admin.branches',
            [
                'branches' => Branch::all()
            ]
        );
    }
 */

    public function index()
    {
        /*   $branches = DB::table('branch')
            ->orderBy('name', 'desc')
            ->get(); */
        //dd($branches);
        return view('admin.branches', [
            'branches' => Branch::all(),
            'title' => 'Branches'
        ]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $formFields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'contact' => 'required'
        ]);

        Branch::create($formFields);

        return redirect('/admin/branches')->with('success', 'branch created succesfully');
    }
}
