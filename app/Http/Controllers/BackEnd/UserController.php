<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(20);
        return view('backend.user.index',compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'unique:users',
            'password' => 'required|confirmed|',
        ]);
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/backend/images/user/',$document_name);
        User::create([
            'name' => $request->name,
            'image'=>$document_name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'password' => bcrypt($request->password)
        ]);
        Session::flash('success','User Created Successfully');
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = User::find($id);
        return view('backend.user.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'unique:users,email,'.$id,
            'password' => 'confirmed'
        ]);
        $update = User::find($id);
        $d = User::find($id);
        if(!empty($request->file('image'))) {
            $path = public_path('assets/backend/images/user/'.$d->image);
            $isExists = File::exists($path);
            if ($isExists==true){
                if($d->image != null){
                    unlink('assets/backend/images/user/'.$d->image);
                }
            }
            $document = $request->file('image');
            $document_name = rand() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path() . '/assets/backend/images/user/', $document_name);
            $update->update([
                'name' => $request->name,
                'image'=>$document_name,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'email'=>$request->email,
            ]);
        }
        else{
            $update->update([
                'name' => $request->name,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'email'=>$request->email,
            ]);
        }
        if(!empty($request->password)){
            $update->update([
                'password' => bcrypt($request->password),
            ]);
        }
        Session::flash('success','User Updated Successfully');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $delete = User::find($id);
        $path = public_path('assets/backend/images/user/'.$delete->image);
        $isExists = File::exists($path);
        if ($isExists==true){
            if($delete->image != null){
                unlink('assets/backend/images/user/'.$delete->image);
            }
        }
        $delete->delete();
        Session::flash('success','User Deleted Successfully');
        return redirect()->route('user.index');
    }

    public function search(Request $request)
    {
        $users = User::where('name','like','%'.$request->search.'%')
                       ->orWhere('phone','like','%'.$request->search.'%')
                        ->orWhere('address','like','%'.$request->search.'%')
                        ->orWhere('email','like','%'.$request->search.'%')
                        ->orWhere('id','like','%'.$request->search.'%')
                        ->orderBy('id','Desc')->paginate(20);
        $searched = $request->search;
        return view('backend.user.index',compact('users','searched'));
    }
}
