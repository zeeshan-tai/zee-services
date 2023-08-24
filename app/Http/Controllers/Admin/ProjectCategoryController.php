<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectCategory;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_categories = ProjectCategory::latest()->paginate(15);
        return view('admin.project_categories.index')
            ->with(compact('project_categories'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        Projectcategory::create([
        'name' => request()->get('name'),
        'slug' => request()->get('slug'), 
        'status' => 1,
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('/admin/project_category')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.project_categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project_category=Project_category::find($id);   
        return view('admin.project_categories.edit',compact('project_category'));
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
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);
        $projct_category=Projct_category::find($id);
        
        $service->update([
        'name' => request()->get('name'),
        'slug' => request()->get('slug'), 
        'status' => 1,
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];
   
        return redirect()->to('/admin/project_category')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project_category=Project_category::find($id);

        $project_category->delete();
        return redirect()->to('/admin/project_category');
    }
}
