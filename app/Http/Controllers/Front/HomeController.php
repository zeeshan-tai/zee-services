<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use App\Service;
use App\Team;

class HomeController extends Controller
{
    public function index()
    {
        $teams= Team::latest()->get();
        $projects= Project::latest()->get();
        $services = Service::latest()->get();
        return view('front.index', compact('services', 'projects', 'teams'));
    }
}
