<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $page_title = "Our Projects";
        return view('front.project', compact('page_title'));
    }
}
