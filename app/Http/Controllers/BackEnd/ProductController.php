<?php

namespace App\Http\Controllers\BackEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {   $categories = Category::orderBy('id','Desc')->paginate(20);
        $products = Product::orderBy('id','Desc')->paginate(20);
        return view('backend.product.index',compact('categories','products'));
    }


    public function create()
    {   $categories = Category::orderBy('id','Desc')->get();
        return view('backend.product.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
           'image'=>'required|mimes:png,jpg,jpeg|dimensions:min_height=184,min_width=184,max_height=186,max_width=186'
        ]);

        $image = $request->file('image');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/assets/backend/images/product',$image_name);

        Product::create([
           'category_id'=>$request->category_id,
           'name'=>$request->name,
           'ingredients'=>$request->ingredients,
           'instructions'=>$request-> instructions,
           'usage'=>$request->usage,
           'effect'=>$request->effect,
           'interaction'=>$request->interaction,
           'indication'=>$request->indication,
           'precaution'=>$request->precaution,
           'image'=>$image_name,
           'manufactured'=>$request->manufactured,
           'description'=>$request->description,
           'type'=>$request->type,
           'status'=>$request->status
        ]);

        Session::flash('success','Successfully Created Product');
        return redirect()->route('product-back.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = Product::find($id);
        $categories = Category::orderBy('id','Desc')->paginate('20');
        return view('backend.product.edit',compact('edit','categories'));
    }

    public function update(Request $request, $id)
    {
        $update = Product::find($id);
        if(!empty($request->file('image'))){
            $request->validate([
                'image'=>'required|mimes:png,jpg,jpeg|dimensions:min_height=184,min_width=184,max_height=186,max_width=186'
            ]);
            $image = $request->file('image');
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/backend/images/product',$image_name);
            $path = public_path('assets/backend/images/category/'.$update->image);
            $isExists = File::exists($path);
            if ($isExists==true){
                if($update->image != null){
                    unlink('assets/backend/images/category/'.$update->image);
                }
            }

        }else
        {
            $image_name = $update->image;
        }

        $update->update([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'ingredients'=>$request->ingredients,
            'instructions'=>$request-> instructions,
            'usage'=>$request->usage,
            'effect'=>$request->effect,
            'interaction'=>$request->interaction,
            'indication'=>$request->indication,
            'precaution'=>$request->precaution,
            'image'=>$image_name,
            'manufactured'=>$request->manufactured,
            'description'=>$request->description,
            'type'=>$request->type,
            'status'=>$request->status
        ]);

        Session::flash('success','Successfully Updated Product');
        return redirect()->route('product-back.index');

    }

    public function destroy($id)
    {
        $delete = Product::find($id);
        $path = public_path('assets/backend/images/product/'.$delete->image);
        $isExists = File::exists($path);
        if ($isExists==true){
            if($delete->image != null){
                unlink('assets/backend/images/product/'.$delete->image);
            }
        }
        $delete->delete();
        Session::flash('success','Successfully Deleted Product');
        return redirect()->route('product-back.index');

    }

    public function search(Request $request){
        $products = Product::where('name','like','%'.$request->search.'%')
            ->orWhere('ingredients','like','%'.$request->search.'%')
            ->orWhere('instructions','like','%'.$request->search.'%')
            ->orWhere('manufactured','like','%'.$request->search.'%')
            ->orWhere('type','like','%'.$request->search.'%')
            ->orWhere('description','like','%'.$request->search.'%')
            ->orWhere('usage','like','%'.$request->search.'%')
            ->orWhere('status','like','%'.$request->search.'%')
            ->orWhere('id','like','%'.$request->search.'%')
            ->orderBy('id','Desc')->paginate(20);
        $searched = $request->search;
        return view('backend.product.index',compact('products','searched'));
    }

}
