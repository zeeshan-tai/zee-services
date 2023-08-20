<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('admin.newsletter.index');
    }



    public function show()
    {
        return view('admin.newsletter.show');
    }
}

