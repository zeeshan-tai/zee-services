<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact-queriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactQuriesController extends Controller
{
    public function index()
    {
        return view('admin.contact-queries.index');
    }

    public function show()
    {
        return view('admin.contact-queries.show');
    }
}
