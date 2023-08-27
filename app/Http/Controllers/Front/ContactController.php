<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactQuery;

class ContactController extends Controller
{
    public function index()
    {
        $page_title = "Contact Us";
        return view('front.contact', compact('page_title'));
    }

    public function store()
    {
        $this->validate(request(),[
            'fullname' => "required",
            'email' => "required",
            'subject' => "required",
            'message' => "required",
          ]);
          
       $contact_query=ContactQuery::create([
        'fullname' => request()->get('fullname'),
        'email' => request()->get('email'),
        'subject' => request()->get('subject'),
        'message' => request()->get('message')
          ]);
          if ($contact_query instanceof Model) {
            toastr()->success('Data has been saved successfully!');
          return redirect()->back();   
    }
    toastr()->success('your form has been submited');
    
    return back();
    }
}
