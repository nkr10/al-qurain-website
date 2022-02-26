<?php

namespace App\Http\Controllers;

use App\Http\Resources\MachineResource;
use App\Machine;
use Illuminate\Http\Request;

class MachinesPageController extends Controller
{
    //
    public function index()
    {
        $machines = \App\Machine::all();
        return view('machines')->with([
            'machines' => $machines
        ]);

        //return view('machines', compact('machines'));
        //return MachineResource::collection(Machine::all());
    }
}
