<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
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
}
