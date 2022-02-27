<?php

namespace App\Http\Controllers;

use App\Machine;
use App\Project;
use Illuminate\Http\Request;

class ProjectsPageController extends Controller
{
    //
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects')->with([
            'projects' => $projects
        ]);
    }

    /*public function show(Machine $machine)
    {
        return view('project', compact('machine'));
    }*/
}
