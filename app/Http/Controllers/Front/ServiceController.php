<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $page_title = "Our Services";
        return view('front.service', compact('page_title'));
    }
}
