<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        //query to get all projects
        // $projects = Project::all();

        //query to get all projects with pagination 10
        $projects = Project::paginate(9);

        return response()->json([
            //add a status key to the response
            'status' => 'success',
            //add a data key to the response and set it to the projects
            'results' => $projects
        ]);
    }

    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->first();

        return response()->json($project);
    }
}
