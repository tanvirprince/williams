<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Sustainability;
use Illuminate\Http\Request;

class SustainabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sustainabilities = Sustainability::latest()->get();
        return view('backend.sustainability.index', compact('sustainabilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sustainability.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sustainability = new Sustainability();
        $sustainability->title = $request->title;
        $sustainability->editor1 = $request->editor1;
        $sustainability->save();
        return redirect(route('sustainabilities.index'))
                ->with('success', 'Sustainability Added successfully');
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
        $sustainability = Sustainability::find($id);
        return view('backend.sustainability.edit', compact('sustainability'));
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
        $sustainability = Sustainability::find($id);
        $sustainability->title = $request->title;
        $sustainability->editor1 = $request->editor1;
        $sustainability->save();
        return redirect(route('sustainabilities.index'))
                ->with('success', 'Sustainability Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $sustainability = Sustainability::find($id);
        $sustainability->delete();

        return redirect(route('sustainabilities.index'))
                ->with('success', 'Sustainability Deleted successfully');
    }
}
