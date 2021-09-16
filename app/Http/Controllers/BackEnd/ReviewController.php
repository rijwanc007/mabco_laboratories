<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::orderBy('id','Desc')->paginate(20);
        return view('backend.review.index',compact('reviews'));
    }

    public function create()
    {
        return view('backend.review.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'image'=>'required|mimes:png,jpg,jpeg|dimensions: min_height=299,min_width=299,max_height=301,max_width=301'
        ]);

        $image = $request->file('image');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/assets/backend/images/review',$image_name);

        Review::create([
           'name'=>$request->name,
           'category'=>$request->category,
           'image'=>$image_name,
           'review'=>$request->review
        ]);

        return redirect('review-index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $edit = Review::find($id);
        return view('backend.review.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Review::find($id);
        if(!empty($request->file('image'))){
            $request->validate([
               'image'=>'mimes:jpg,jpeg,png|dimensions: min_height=299,min_width=299,max_height=301,max_width=301'
            ]);
           $image = $request->file('image');
           $image_name = rand().'.'.$image->getClientOriginalExtension();
           $image->move(public_path().'/assets/backend/images/review',$image_name);
            $path = public_path('assets/backend/images/review/'.$update->image);
            $isExists = File::exists($path);
            if ($isExists==true){
                if($update->image != null){
                    unlink('assets/backend/images/review/'.$update->image);
                }
            }

        }else{
            $image_name = $update->image;
        }
        $update->update([
            'category'=>$request->category,
            'name'=>$request->name,
            'image'=>$image_name,
            'review'=>$request->review
        ]);

        Session::flash('success','Successfully Updated Review');
        return redirect()->route('review.index');

    }

    public function destroy($id)
    {
        $delete = Review::find($id);
        $path = public_path('assets/backend/images/review/'.$delete->image);
        $isExists = File::exists($path);
        if ($isExists==true){
            if($delete->image != null){
                unlink('assets/backend/images/review/'.$delete->image);
            }
        }
        $delete->delete();
        Session::flash('success','Successfully Deleted Review');
        return redirect()->route('review.index');

    }

    public function search(Request $request)
    {
    $reviews = Review::where('category','like','%'.$request->search.'%')
                       ->orWhere('name','like','%'.$request->search.'%')
                       ->orWhere('review','like','%'.$request->search.'%')
                       ->orWhere('id','like','%'.$request->search.'%')
                       ->orderBy('id','Desc')->paginate(20);
    $searched = $request->search;

    return view('backend.review.index',compact('reviews','searched'));

    }
}
