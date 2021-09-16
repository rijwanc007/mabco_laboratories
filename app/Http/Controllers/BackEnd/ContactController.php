<?php

namespace App\Http\Controllers\BackEnd;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::orderBy('id','Desc')->paginate(20);
        return view('backend.contact.index',compact('contacts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ]);

        Session::flash('success','বার্তা সফলতার সাথে পাঠানো হয়েছে');
        return redirect()->route('frontend.index');
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
        $delete = Contact::find($id);
        $delete->delete();
        Session::flash('success','Successfully Deleted Message');
        return redirect()->back();
    }

    public function search(Request $request){
        $contacts = Contact::where('name','like','%'.$request->search.'%')
                            ->orWhere('email','like','%'.$request->search.'%')
                            ->orWhere('message','like','%'.$request->search.'%')
                            ->orWhere('id','like','%'.$request->search.'%')
                            ->orderBy('id','Desc')->paginate(20);
        $searched = $request->search;
        return view('backend.contact.index',compact('contacts','searched'));
    }
}
