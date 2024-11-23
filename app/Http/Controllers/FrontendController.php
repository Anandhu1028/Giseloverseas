<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Service;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function service(){
        $service = Service::all();
        return view('frontend.service', compact('service'));
    }
    public function news(){
        $news = News::all();
        return view('frontend.news',compact('news'));
    }
    public function gallery(){
        $gallery = Gallery::all();
        return view('frontend.gallery', compact('gallery'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function tracking(){
        return view('frontend.tracking');
    }
   
}
