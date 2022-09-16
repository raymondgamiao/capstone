<?php

namespace App\Http\Controllers;

use App\Models\logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {
        return view('admin.logs', [
            'logs' => logs::all(),
            'title' => 'Activity Logs'
        ]);
    }
}
