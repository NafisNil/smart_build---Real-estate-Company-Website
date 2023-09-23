<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Partner;
use App\Models\Logo;
use App\Models\About;
use App\Models\Choose;
use App\Models\Gallery;
use App\Models\General;
use App\Models\FeedBack;
use App\Models\Address;
use App\Models\Social;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['service'] = Service::orderBy('id','desc')->get();
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['about'] = About::orderBy('id','desc')->first();
        $data['choose'] = Choose::orderBy('id','desc')->first();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        $data['partner'] = Partner::orderBy('id','desc')->get();
        $data['gallery'] = Gallery::where('type', 'Image')->orderBy('id','desc')->get();
        $data['general'] = General::orderBy('id','desc')->get();
        $data['feedback'] = FeedBack::orderBy('id','desc')->get();
        return view('frontend.index', $data);
    }

    public function About(){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['about'] = About::orderBy('id','desc')->first();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.about', $data);
    }
}
