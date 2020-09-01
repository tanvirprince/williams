<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view('frontend.gallery');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    

}
