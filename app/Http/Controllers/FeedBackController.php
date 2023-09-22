<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\FeedbackRequest;
class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $feedback = FeedBack::orderBy('id', 'desc')->get();
        $feedbackCount = FeedBack::count();
         return view('backend.feedback.index',['feedback'=>$feedback,'feedbackCount'=> $feedbackCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackRequest $request)
    {
        //
        $feedback = FeedBack::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $feedback);
        }
        return redirect()->route('feedback.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function show(FeedBack $feedBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $feedBack = Feedback::find($id);
        return view('backend.feedback.edit',[
            'edit' => $feedBack
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function update(FeedbackRequest $request, $id)
    {
        //
        $feedBack = FeedBack::find($id);
        $feedBack->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$feedBack->logo);
            $this->_uploadImage($request, $feedBack);
        }
        return redirect()->route('feedback.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $feedBack = FeedBack::find($id);
        if(!empty($feedBack->logo));
        @unlink('storage/'.$feedBack->logo);
       
        $feedBack->delete();
        return redirect()->route('feedback.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(60, 60)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
