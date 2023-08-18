<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewslatterController extends Controller
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

