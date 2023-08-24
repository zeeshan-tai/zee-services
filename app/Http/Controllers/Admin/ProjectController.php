<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(15);
        return view('admin.projects.index')
            ->with(compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),[
        'title' => "required",
        'slug' => "required",
        'project_category_id' => "required",
        'status' => "required",
        'image' => 'required|mimes:png,jpg, jpeg,gif|max:2048',
        'description' => "required"
      ]);

      $fileName = null;
      if (request()->hasFile('image'))
      {
          $file = request()->file('image');
          $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
          $file->move('./uploads/', $fileName);
      }


      project::create([
        'title' => request()->get('title'),
        'slug' =>request()->get('slug'),
        'project_category_id' =>request()->get('project_category_id'),
        'status' => 1,
        'image' => $fileName,
        'description'=>request()->get('description'),]);


        return redirect()->to('/admin/project');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.projects.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::find($id);
        return view('admin.projects.edit',compact('project'));
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
        $this->validate(request(),[
            'title' => 'required',
            'slug' => 'required',
            'project_category_id' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg, jpeg,gif|max:2048',
            'description' => 'required'
          ]);
          $project=Project::find($id);
          $fileName = null;
          if (request()->hasFile('image'))
          {
              $file = request()->file('image');
              $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
              $file->move('./uploads/', $fileName);
          }
    
    
          $project->update([
            'title' => request()->get('title'),
            'slug' =>request()->get('slug'),
            'project_category_id' =>request()->get('project_category_id'),
            'status' => 1,
            'image' => $fileName,
            'description'=>request()->get('description'),]);
    
    
            return redirect()->to('/admin/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);

        $project->delete();
        return redirect()->to('/admin/project');
    }
}

