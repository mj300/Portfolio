<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PortfolioController extends Controller
{

    public function show($projectId)
    {
        $project=Project::find($projectId);
        if($project== null)
         return redirect('/');

         return view('portfolio.show')->with('project',$project);
    }
}
