<?php

namespace App\Http\Controllers;

use App\models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('projects', compact('projects'));
    }
}
