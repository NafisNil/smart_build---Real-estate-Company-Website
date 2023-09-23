<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use App\Http\Requests\GeneralRequest;
class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $general = General::orderBy('id', 'desc')->get();
        $generalCount = General::count();
         return view('backend.general.index',['general'=>$general,'generalCount'=> $generalCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.general.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralRequest $request)
    {
        //
        $general = General::create($request->all());
       
       
        return redirect()->route('general.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
        return view('backend.general.edit',[
            'edit' => $general
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(GeneralRequest $request, General $general)
    {
        //
        $general->update($request->all());
       
       
        return redirect()->route('general.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
        $general->delete();
        return redirect()->route('general.index')->with('status','Data deleted successfully!');
    }
}
