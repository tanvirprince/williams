<?php

namespace App\Http\Controllers\Frontend;
use App\Brand;
use App\Slider;
use App\Gallery;
use App\Service;
use App\Certificate;
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
        $sliders = Slider::latest()->get();
        $brands = Brand::latest()->get();
        return view('frontend.home.home', compact('services', 'sliders','brands'));

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
        $certificates = Certificate::latest()->get();
        return view('frontend.certification', compact('certificates'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->paginate(6);
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
