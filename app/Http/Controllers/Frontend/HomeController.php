<?php

namespace App\Http\Controllers\Frontend;
use App\About;
use App\Brand;
use App\Slider;
use App\Gallery;
use App\Service;
use App\Management;
use App\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sustainability;

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
        $about = About::latest()->first();
        return view('frontend.home.home', compact('services', 'sliders','brands','about'));

    }

    public function ourstory(){
        $about = About::latest()->first();
        return view('frontend.ourstory', compact('about'));


    }

    public function mail(Request $request){

        return $request;
    }

    public function management()
    {
        $management = Management::find(1);
        $management_two = Management::find(2);
        $management_three = Management::find(3);

        return view('frontend.management', compact('management','management_two','management_three'));
    }

    public function certification()
    {
        $certificates = Certificate::latest()->get();
        return view('frontend.certification', compact('certificates'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->paginate(18);
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

    public function sustainability()
    {
        $sustainabilities = Sustainability::latest()->get();
        return view('frontend.sustainability', compact('sustainabilities'));
    }


}
