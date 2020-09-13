<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function mail(Request $request){

        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message,

        );

        Mail::to('admin@williamsbd.email')->send(new SendMail($data));
        return back()->with('success', 'thanks for contacting us');

    }
}
