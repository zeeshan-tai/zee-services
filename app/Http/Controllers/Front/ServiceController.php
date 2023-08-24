<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $page_title = "Our Services";
        return view('front.service', compact('page_title', 'services'));
    }
}
