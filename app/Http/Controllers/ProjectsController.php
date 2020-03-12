<?php

namespace App\Http\Controllers;

use App\Machine;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects', compact('projects'));
    }

    public function show(Machine $machine)
    {
        return view('project', compact('machine'));
    }
}
