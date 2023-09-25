<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\TeamRequest;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $team = Team::orderBy('id', 'desc')->get();
        $teamCount = Team::count();
         return view('backend.team.index',['team'=>$team,'teamCount'=> $teamCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        //
        $team = Team::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $team);
        }
        return redirect()->route('team.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
        return view('backend.team.edit',[
            'edit' => $team
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        //
        $team->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$team->logo);
            $this->_uploadImage($request, $team);
        }
        return redirect()->route('team.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
        if(!empty($team->logo));
        @unlink('storage/'.$team->logo);
       
        $team->delete();
        return redirect()->route('team.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(410, 440)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
