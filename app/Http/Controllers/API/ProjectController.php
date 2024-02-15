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
        $projects = Project::all();

        return response()->json([
            //add a status key to the response
            'status' => 'success',
            //add a data key to the response and set it to the projects
            'data' => $projects
        ]);
    }
}
