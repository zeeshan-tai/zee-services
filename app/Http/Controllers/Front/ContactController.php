<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $page_title = "Contact Us";
        return view('front.contact', compact('page_title'));
    }
}
