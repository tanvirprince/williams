<?php

namespace App\Http\Controllers\Backend;

use App\About;
use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $about = About::find(1);
        return view('backend.about.create',compact('about'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = '';
        if ($request->hasFile('image')){
            $file = Storage::disk('public')->put('about', $request->file('image'));
        }
        $about = new About();
        if ($request->hasFile('image')){
            $about->title = $request->title;
            $about->body = $request->body;
            $about->image = $file;
            $about->save();

        }else{
            $about->title = $request->title;
            $about->body = $request->body;
            $about->save();
        }
        return redirect()->back()
            ->with('success', 'about has been Added successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request)
    {
        $file = '';
        $about = About::find(1);
        if ($request->hasFile('image')) {
            if ($request->hasFile('image')) {
                Storage::disk('public')->delete('about', $about->image);
                $file = Storage::disk('public')->put('about', $request->file('image'));
            }
            $about->title = $request->title;
            $about->body = $request->body;
            $about->image = $file;

            $about->save();
        } else {
            $about->title = $request->title;
            $about->body = $request->body;
            $about->save();
        }
        return redirect(route('about.create'))
            ->with('success', 'About Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
