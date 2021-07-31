<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
       $p=new Project([
            "name"=>"Portfolio",
            "clientName"=>"MySelf",
            "dateCreate"=>"2020/04/10",
            "time_taken"=>"2 days",
            "Description"=>"A website for showing my portfolio",
            "demo_clientside"=>"https://2mj.uk/	",
            "github"=>"https://github.com/mj300/Portfolio",

        ]);

        $p->save();
    }
}
