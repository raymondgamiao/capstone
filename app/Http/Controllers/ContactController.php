<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view(
            'contact',
            [
                'branches' => Branch::all(),
                'title' => 'Categories'
            ]
        );
    }
    
}


