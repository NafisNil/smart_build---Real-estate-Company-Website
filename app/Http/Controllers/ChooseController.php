<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Illuminate\Http\Request;
use App\Http\Requests\ChooseRequest;
class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $choose = Choose::orderBy('id', 'desc')->first();
        $chooseCount = Choose::count();
         return view('backend.choose.index',['choose'=>$choose,'chooseCount'=> $chooseCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.choose.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChooseRequest $request)
    {
        //
        $choose = Choose::create($request->all());
       
       
        return redirect()->route('choose.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function show(Choose $choose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function edit(Choose $choose)
    {
        //
        return view('backend.choose.edit',[
            'edit' => $choose
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function update(ChooseRequest $request, Choose $choose)
    {
        //
        $choose->update($request->all());
       
       
        return redirect()->route('choose.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choose $choose)
    {
        //
        $choose->delete();
        return redirect()->route('choose.index')->with('status','Data deleted successfully!');
    }
}
