<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials =Testimonial::latest()->get();
        $page_title = "testimonial";
        return view('front.testimonial', compact('page_title','testimonials'));
    }
}
