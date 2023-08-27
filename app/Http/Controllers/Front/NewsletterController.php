<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function store()
    {
        $this->validate(request(),[
            'email' => "required",
          ]);

       $newsletter=Newsletter::create([
        'email' => request()->get('email')
          ]);

          if ($newsletter instanceof Model) {
            toastr()->success('Data has been saved successfully!');
          return redirect()->back();   
    }
    toastr()->success('Email added successfully.');

        return back();
    }
}