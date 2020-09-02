<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home.home');

    }

    public function management()
    {
        return view('frontend.management');
    }
    
    public function certification()
    {
        return view('frontend.certification');
    }
    
    public function gallery()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('frontend.gallery', compact('galleries'));
    }

    public function singleGallery($id)
    {
        $gallery = Gallery::find($id);
        return view('frontend.single-gallery', compact('gallery'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    

}
