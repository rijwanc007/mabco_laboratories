<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $check = Subscriber::where('email','=',$request->email)->first();
        if(!empty($check)){
            Session::flash('error','ইমেইলটি পত্রগ্রহনের জন্য দেয়া আছে !');
            return redirect()->back();
        }else{
            Subscriber::create([
               'email' => $request->email,
            ]);
            Session::flash('success','সফলতার সাথে আমাদের পত্রগ্রাহক হয়েছেন');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
