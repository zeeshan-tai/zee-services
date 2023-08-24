<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $page_title = "Testimonial";
        return view('front.testimonial', compact('page_title'));
    }
}