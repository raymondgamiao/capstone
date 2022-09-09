<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{

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

        return redirect()->route('admin/branches')->with('success', 'branch created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $branch = Branch::find($request->branchIDDelete);
        $branch->delete();

        return redirect()->route('admin/branches')->with('success', 'branch deleted succesfully');
    }

    public function update(Request $request)
    {
        //dd($request->branchIDEdit);
        $formFields = $request->validate([
            'branchNameEdit' => 'required',
            'branchLocationEdit' => 'required',
            'branchEmailEdit' => ['required', 'email'],
            'branchContactEdit' => 'required'
        ]);

        $branch = Branch::find($request->branchIDEdit);
        $branch->name = $formFields['branchNameEdit'];
        $branch->location = $formFields['branchLocationEdit'];
        $branch->email = $formFields['branchEmailEdit'];
        $branch->contact = $formFields['branchContactEdit'];
        $branch->save();

        return redirect()->route('admin/branches')->with('success', 'branch updated succesfully');
    }
}
