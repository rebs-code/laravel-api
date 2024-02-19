<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        request()->validate([
            'key' => ['string', 'min:3', 'max:255', 'nullable'],
        ]);

        if (request()->key) {
            $projects = Project::where('name', 'LIKE', '%' . request()->key . '%')->orWhere('description', 'LIKE', '%' . request()->key . '%')->paginate(9);
        } else {
            //query to get all projects with pagination 9
            $projects = Project::paginate(9);
        }

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
