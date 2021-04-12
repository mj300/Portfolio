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
            "name"=>"Osnack - Online Shop",
            "clientName"=>"Osnack.co.uk",
            "dateCreate"=>"2020/12/01",
            "time_taken"=>"3 months",
            "Description"=>"An E-commerce website for a small company selling Mediterranean food products.",
            "demo_clientside"=>"https://shop.osnack.p8b.uk/	",
            "demo_managerside"=>"https://admin.osnack.p8b.uk/Login",
            "demo_username"=>"m@j.com",
            "demo_password"=>"As!23456789",
            "image_path"=>"OSnack.png",
            "github"=>"https://github.com/p8b/OSnack",

        ]);

        $p->save();
    }
}
