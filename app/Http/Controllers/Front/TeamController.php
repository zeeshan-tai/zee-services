<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\team;

class TeamController extends Controller
{
    public function index()
    {
        $teams= team::latest()->get();
        $page_title = "Our Team";
        return view('front.team',compact('page_title','teams'));
    }
}
