<?php

namespace App\Http\Controllers\Frontend;
use App\Gallery;
use App\Service;
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
        $services = Service::get();
        return view('frontend.home.home', compact('services'));

    }
    public function mail(Request $request){

        return $request;
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

    public function singleGallery($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();
        return view('frontend.single-gallery', compact('gallery'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }


}
