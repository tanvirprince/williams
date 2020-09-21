<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management2Request;
use App\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Management2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $management = Management::find(2);
        return view('backend.management2.create', compact('management'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Management2Request $request)
    {
        $file = '';
        if ($request->hasFile('image')){
            $file = Storage::disk('public')->put('management', $request->file('image'));
        }
        $management = new Management();
        $management->name = $request->name;
        $management->image = $file;
        $management->designation = $request->designation;
        $management->editor1 = $request->editor1;
        $management->save();

        return redirect(route('management2.create'))
            ->with('success', 'management Added successfully');
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
    public function update(Management2Request $request)
    {
        $file = '';
        $management = Management::find(2);
        if ($request->hasFile('image')) {
            if ($request->hasFile('image')) {
                Storage::disk('public')->delete('management', $management->image);
                $file = Storage::disk('public')->put('management', $request->file('image'));
            }
            $management->name = $request->name;
            $management->image = $file;
            $management->designation = $request->designation;
            $management->editor1 = $request->editor1;
            $management->save();
        } else {
            $management->name = $request->name;
            $management->designation = $request->designation;
            $management->editor1 = $request->editor1;
            $management->save();
        }
        return redirect(route('management2.create'))
            ->with('success', 'Management Updated successfully');
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
