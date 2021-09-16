<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{
    public function index()
    {
        $subs = Subscriber::orderBy('id','Desc')->paginate(20);
        return view('backend.subscriber.index',compact('subs'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

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
        $delete = Subscriber::find($id);
        $delete -> delete();
        Session::flash('success','Successfully Deleted Subscriber');
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $subs = Subscriber::where('email','like','%'.$request->search.'%')
                            ->orWhere('id','like','%'.$request->search.'%')
                            ->orderBy('id','Desc')
                            ->paginate(20);
        $searched = $request->search;
        return view('backend.subscriber.index',compact('subs','searched'));
    }
}
