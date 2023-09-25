<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Partner;
use App\Models\Logo;
use App\Models\About;
use App\Models\Choose;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\General;
use App\Models\FeedBack;
use App\Models\Address;
use App\Models\Project;
use App\Models\Social;
use App\Models\Blog;
use Carbon\Carbon;
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

    public function Team(){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['team'] = Team::orderBy('id','asc')->get();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.team', $data);
    }

    public function SingleService($id){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['service'] = Service::where('id', $id)->first();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.single_service', $data);
    }

    public function Project(){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['project'] = Project::orderBy('id','desc')->get();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.project_all', $data);
    }


    public function Blog(){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['blog'] = Blog::orderBy('id','desc')->get();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.blog_all', $data);
    }

    public function single_project($id){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['project'] = Project::where('id', $id)->first();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.single_project', $data);
    }

    public function single_blog($id){
        $data['logo'] = Logo::orderBy('id','desc')->first();
        $data['blog'] = Blog::where('id', $id)->first();
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.single_blog', $data);
    }

    public function Contact(){
        $data['logo'] = Logo::orderBy('id','desc')->first();
      
        $data['contact'] = Address::orderBy('id','desc')->first();
        $data['social'] = Social::orderBy('id','desc')->first();
        return view('frontend.contact_us', $data);
    }
}
