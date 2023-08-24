<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->paginate(15);
        return view('admin.teams.index')
            ->with(compact('teams')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
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
            'fullname' => 'required',
            'designation' => 'required',
            'status' => 'required',
            // 'team_img' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            'facebook_id' => 'required',
            'twitter_id' => 'required',
            'instagram_id' => 'required',
            'linkedin_id' => 'required',
        ]);

        $fileName = null;
        if (request()->hasFile('team_img')) 
        {
            $file = request()->file('team_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        Team::create([
            'fullname' => request()->get('fullname'),
            'designation' => request()->get('designation'), 
            'status' => 1,
            'team_img' => $fileName,
            'facebook_id' => request()->get('facebook_id'),
            'twitter_id' => request()->get('twitter_id'),
            'instagram_id' => request()->get('instagram_id'),
            'linkedin_id' => request()->get('linkedin_id'),
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->to('/admin/team')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.teams.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=Team::find($id);   
        return view('admin.teams.edit',compact('team'));
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
            'fullname' => 'required',
            'designation' => 'required',
            'team_img' => 'required|mimes:png,jpg,jpeg,gif|max:2048',
            'facebook_id' => 'required',
            'twitter_id' => 'required',
            'instagram_id' => 'required',
            'linkedin_id' => 'required',
        ]);
        $team=Team::find($id);
        $fileName = null;
        if (request()->hasFile('team_img')) 
        {
            $file = request()->file('team_img');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/', $fileName);
        }

        $team->update([
            'fullname' => request()->get('fullname'),
            'designation' => request()->get('designation'), 
            'status' => 1,
            'team_img' => $fileName,
            'facebook_id' => request()->get('facebook_id'),
            'twitter_id' => request()->get('twitter_id'),
            'instagram_id' => request()->get('instagram_id'),
            'linkedin_id' => request()->get('linkedin_id'),
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->to('/admin/team')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=Team::find($id);

        $team->delete();
        return redirect()->to('/admin/team');
    }
}
