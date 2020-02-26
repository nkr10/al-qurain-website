<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachinesController extends Controller
{
    //
    public function index()
    {
        $machines = \App\Machine::all();
        return view('services', compact('machines'));
    }
}
