<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $page_title = "Our Projects";
        return view('front.project', compact('page_title', 'projects'));
    }
}
