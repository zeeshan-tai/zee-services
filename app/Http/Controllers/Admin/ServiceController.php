<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services = Service::latest()->paginate(15);
        return view('admin.services.index')
            ->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'slug' => 'required',
            'work_done' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            'short_description' => 'required',
            'description' => 'required'
        ]);

        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        Service::create([
        'title' => request()->get('title'),
        'slug' => request()->get('slug'),
        'status' => 1,
        'work_done' => request()->get('work_done'),
        'image' => $fileName,
        'description' => request()->get('description'),
        'short_description' => request()->get('short_description'),
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('/admin/service')->with($notification);
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
        return view('admin.services.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('admin.services.edit',compact('service'));
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
            'title' => 'required',
            'slug' => 'required',
            'work_done' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            'short_description' => 'required',
            'description' => 'required'
        ]);
        $service=Service::find($id);
        $fileName = null;
        if (request()->hasFile('image'))
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $service->update([
        'title' => request()->get('title'),
        'slug' => request()->get('slug'),
        'status' => 1,
        'work_done' => request()->get('work_done'),
        'image' => $fileName,
        'description' => request()->get('description'),
        'short_description' => request()->get('short_description'),
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('/admin/service')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);

        $service->delete();
        return redirect()->to('/admin/service');
    }

}
