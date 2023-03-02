<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects=project::with('type','technologies')->paginate();   //use ::paginate('n') to paginate
        return response()->json([
            'success'=> true,
            'results'=> $projects,
        ]);
    }

    public function show(project $project ){
        $projects=project::with('type','technologies')->paginate();   //use ::paginate('n') to paginate
        return response()->json([
            'success'=> true,
            'results'=> $project,
        ]);
    }
}
