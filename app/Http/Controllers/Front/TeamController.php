<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $page_title = "Our Team";
        return view('front.team',compact('page_title'));
    }
}
