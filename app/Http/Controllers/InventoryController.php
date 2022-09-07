<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    /*  public function index()
    {
        // ddd(Inventory::all());
        return view(
            'admin.inventory',
            [
                'inventory' => Inventory::all(),
                'title' => 'Inventory',
                'active' => 'Inventory'
            ]
        );
    }
 */

    /*     public function index()
    {
        $inventory = DB::table('inventory')
            ->join('branch', 'branch.id', '=', 'inventory.branch_id')
            ->join('category', 'category.id', '=', 'inventory.category_id')
            ->get();
        return view('admin.inventory', [
            'inventory' => $inventory,
            'title' => 'Inventory',
            'active' => 'Inventory'
        ]);
    } */
    public function index()
    {
        $inventory = DB::table('inventory')
            ->select('inventory.name', 'inventory.description', 'inventory.qty', 'branch.name as branch_name', 'category.name as category_name')
            ->join('branch', 'branch.id', '=', 'inventory.branch_id')
            ->join('category', 'category.id', '=', 'inventory.category_id')
            ->get();
        // dd($inventory);
        return view('admin.inventory', [
            'inventory' => $inventory,
            'title' => 'Inventory',
            'branches' => Branch::all(),
            'categories' => Category::all()
        ]);
    }
}
