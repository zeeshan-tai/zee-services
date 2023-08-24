<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(15);
        return view('admin.testimonials.index')
            ->with(compact('testimonials'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        
        $this->validate(request(), [
            'fullname' => 'required',
            'designation' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            'description' => 'required',
            'status' => 'required',
            ]);

            $fileName = null;
            if (request()->hasFile('image')) 
            {
                $file = request()->file('image');
                $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
                $file->move('./uploads/', $fileName);
            }

        Testimonial::create([
            'fullname' => request()->get('fullname'),
            'designation' => request()->get('designation'), 
            'status' => 1,
            'description' => request()->get('description'),
            'image' => $fileName,  
            ]);
            $notification = [
                'message' => 'Record Inserted Successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->to('/admin/testimonials')->with($notification);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.testimonial.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::find($id);   
        return view('admin.testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'fullname' => 'required',
            'designation' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            'description' => 'required',
            'status' => 'required',
            ]);
            $testimonial=Testimonial::find($id);
            $fileName = null;
            if (request()->hasFile('image')) 
            {
                $file = request()->file('image');
                $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
                $file->move('./uploads/', $fileName);
            }

        $testimonial->update([
            'fullname' => request()->get('fullname'),
            'designation' => request()->get('designation'),
            'image' => $fileName,  
            'description' => request()->get('description'), 
            'status' => 1,    
        ]);
            $notification = [
                'message' => 'Record Inserted Successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->to('/admin/testimonials')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);

        $testimonial->delete();
        return redirect()->to('/admin/testimonials');
    }
}
