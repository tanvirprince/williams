<?php

namespace App\Http\Controllers\Backend;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $file = '';
        if ($request->hasFile('image')){
            $file = Storage::disk('public')->put('gallery', $request->file('image'));
        }
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->image = $file;
        $gallery->category = $request->category;
        $gallery->editor1 = $request->editor1;
        $gallery->date = $request->date;
        $gallery->save();

        return redirect(route('galleries.index'))
                ->with('success', 'Gallery Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        // return $gallery->date;
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = '';
        $gallery = Gallery::find($id);
        if ($request->hasFile('image')) {
            if ($request->hasFile('image')) {
                Storage::disk('public')->delete('gallery', $gallery->image);
                $file = Storage::disk('public')->put('gallery', $request->file('image'));
            }
            $gallery->title = $request->title;
            $gallery->image = $file;
            $gallery->category = $request->category;
            $gallery->editor1 = $request->editor1;
            $gallery->date = $request->date;
            $gallery->save();
        } else {
            $gallery->title = $request->title;
            $gallery->category = $request->category;
            $gallery->editor1 = $request->editor1;
            $gallery->date = $request->date;
            $gallery->save();
        } 
        return redirect(route('galleries.index'))
                ->with('success', 'Gallery Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $gallery = Gallery::find($id);
            Storage::disk('public')->delete('gallery', $gallery->image);
            $gallery->delete();

            return redirect(route('galleries.index'))
                ->with('success', 'Gallery Deleted successfully');

    }
}
