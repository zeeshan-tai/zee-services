<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $page_title = "Testimonials";
        return view('front.testimonials', compact('page_title'));
    }
}