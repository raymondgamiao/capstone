<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class InventoryController extends Controller
{
    public function index()
    {
        return view('admin.inventory', [
            'inventory' => Inventory::all(),
            'title' => 'Inventory',
            'branches' => Branch::all(),
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required', Rule::unique('inventory', 'name')],
                'description' => 'required',
                'qty' => 'required|numeric',
                'branch_id' => 'required|numeric',
                'category_id' => 'required|numeric'
            ],
            [
                'branch_id.numeric' => 'Select a branch',
                'category_id.numeric' => 'Select a category'
            ]
        );

        Inventory::create([
            'name' =>  $formFields['name'],
            'description' =>  $formFields['description'],
            'qty' =>  $formFields['qty'],
            'branch_id' =>  $formFields['branch_id'],
            'category_id' =>  $formFields['category_id']
        ]);

        return redirect()->route('admin/inventory')->with('success', 'Item created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $inventory = Inventory::find($request->inventoryIDDelete);
        $inventory->delete();

        return redirect()->route('admin/inventory')->with('success', 'item deleted succesfully');
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $formFields = $request->validate([
            'nameEdit' => 'required',
            'descriptionEdit' => 'required',
            'quantityEdit' => ['required', 'numeric'],
            'branch_idEdit' => ['required', 'numeric'],
            'category_idEdit' => ['required', 'numeric']
        ]);

        $inventory = Inventory::find($request->inventoryIDEdit);
        $inventory->name = $formFields['nameEdit'];
        $inventory->description = $formFields['descriptionEdit'];
        $inventory->qty = $formFields['quantityEdit'];
        $inventory->branch_id = $formFields['branch_idEdit'];
        $inventory->category_id = $formFields['category_idEdit'];
        $inventory->save();

        return redirect()->route('admin/inventory')->with('success', 'inventory updated succesfully');
    }
}
