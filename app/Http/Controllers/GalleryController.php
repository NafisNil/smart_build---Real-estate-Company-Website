<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\GalleryRequest;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = Gallery::orderBy('id', 'desc')->get();
        $galleryCount = Gallery::count();
         return view('backend.gallery.index',['gallery'=>$gallery,'galleryCount'=> $galleryCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        //
        $gallery = Gallery::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $gallery);
        }


        $videoId = substr(parse_url($request->link, PHP_URL_QUERY), 2);
        $gallery->update([
            'link' => $videoId
        ]);
        return redirect()->route('gallery.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
        return view('backend.gallery.edit',[
            'edit' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        //
        $gallery->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$gallery->logo);
            $this->_uploadImage($request, $gallery);
        }

        $videoId = substr(parse_url($request->link, PHP_URL_QUERY), 2);
        $gallery->update([
            'link' => $videoId
        ]);
        return redirect()->route('gallery.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        if(!empty($gallery->logo));
        @unlink('storage/'.$gallery->logo);
       
        $gallery->delete();
        return redirect()->route('gallery.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1430, 515)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
