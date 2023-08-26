<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\gallery;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $galleries = Gallery::latest()->paginate(15);
        return view('admin.galleries.index')
            ->with(compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    { 
        
        $this->validate(request(), [
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            // 'status' => 'required',
        ]);

        $fileName = null;
        if (request()->hasFile('image')) 
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }
        Gallery::create([
            'image' => $fileName,
            'status' => 1,
        ]);
        return redirect()->to('/admin/gallery');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.galleries.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleries=Gallery::find($id);   
        return view('admin.galleries.edit',compact('galleries'));
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
            // 'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
        ]);
        $gallery=Gallery::find($id);
        $fileName = null;
        if (request()->hasFile('image')) 
        {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }
        
        $gallery->update([ 
        // 'status' => 1,
        'image' => $fileName,
        ]);
   
        return redirect()->to('/admin/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=Gallery::find($id);

        $gallery->delete();
        return redirect()->to('/admin/gallery');
    }
}
