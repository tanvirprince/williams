<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services = Service::get();
        return view('frontend.home.home', compact('services'));

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
        return view('frontend.gallery');
    }

    public function contact()
    {
        return view('frontend.contact');
    }


}
