<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects=project::with('type','technologies')->paginate(100);   //use ::paginate('n') to paginate
        return response()->json([
            'success'=> true,
            'results'=> $projects,
        ]);
    }

    public function show(project $project){
         $project=project::with('type','technologies')->findOrFail($project->id);  //use ::paginate('n') to paginate
         return response()->json([
             'success'=> true,
             'results'=> $project,
         ]);
     }
}
