<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('frontend.gallery', compact('galleries'));
    }
}
