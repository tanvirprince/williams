<?php

namespace App\Http\Controllers\Backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $file = '';
        if ($request->hasFile('image')){
            $file = Storage::disk('public')->put('slider', $request->file('image'));
            $slider = new Slider();
            $slider->image = $file;
            $slider->save();

            return redirect(route('sliders.index'))
                    ->with('success', 'Slider Added successfully');
        }
        return redirect(route('sliders.index'))
        ->with('danger', 'Something went wrong!');
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
        $slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider'));
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
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('slider', $slider->image);
            $file = Storage::disk('public')->put('slider', $request->file('image'));
            $slider->image = $file;
            $slider->save();
            return redirect(route('galleries.index'))
                    ->with('success', 'Slider Updated successfully');
        }

        return redirect(route('sliders.index'))
                ->with('danger', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $slider = Slider::find($id);
        Storage::disk('public')->delete('slider', $slider->image);
        $slider->delete();

        return redirect(route('sliders.index'))
                ->with('success', 'Slider Deleted successfully');
    }
}
