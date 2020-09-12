<?php

namespace App\Http\Controllers\Backend;

use App\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CertificateRequest;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('backend.certificate.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CertificateRequest $request)
    {
        $pdf = '';
        $image = '';
        if ($request->hasFile('pdf')){
            $pdf = Storage::disk('public')->put('certificate', $request->file('pdf'));
            $image = Storage::disk('public')->put('certificate', $request->file('image'));
            $certificate = new Certificate();
            $certificate->title = $request->title;
            $certificate->pdf = $pdf;
            $certificate->image = $image;
            $certificate->by = $request->by;
            $certificate->save();
    
            return redirect(route('certificates.index'))
                    ->with('success', 'certificate Added successfully');
        }
        return redirect(route('certificates.index'))
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
        $certificate = Certificate::find($id);
        return view('backend.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CertificateRequest $request, $id)
    {
        $file = '';
        $certificate = Certificate::find($id);
        if ($request->hasFile('pdf')) {
            if ($request->hasFile('pdf')) {
                Storage::disk('public')->delete('certificate', $certificate->pdf);
                $file = Storage::disk('public')->put('certificate', $request->file('pdf'));
            }
            $certificate->title = $request->title;
            $certificate->pdf = $file;
            $certificate->by = $request->by;
            $certificate->save();
        } else {
            $certificate->title = $request->title;
            $certificate->pdf = $file;
            $certificate->by = $request->by;
            $certificate->save();
        } 
        return redirect(route('certificates.index'))
                ->with('success', 'Certificate Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $certificate = Certificate::find($id);
        Storage::disk('public')->delete('certificate', $certificate->image);
        Storage::disk('public')->delete('certificate', $certificate->pdf);
        $certificate->delete();

        return redirect(route('certificates.index'))
                ->with('success', 'Certificate Deleted successfully');
    }
}
