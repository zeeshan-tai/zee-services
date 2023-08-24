<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('front.index', compact('services'));
    }
}
