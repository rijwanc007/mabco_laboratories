<?php

namespace App\Http\Controllers\BackEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {

        $categories = Category::orderBy('id','Desc')->paginate(20);
        return view('backend.category.index',compact('categories'));
    }

    public function create()
    {

        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'image'=>'required|mimes:jpeg,jpg,png|dimensions:min_height=184,min_width=184,max_height=186,max_width=186'
        ]);

        $image = $request->file('image');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/assets/backend/images/category',$image_name);

        Category::create([
           'name'=>$request->name,
           'image'=>$image_name,
           'type'=>$request->type
        ]);
        Session::flash('success','Successfully Created Category');
        return redirect()->route('type.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit= Category::find($id);
        return view('backend.category.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Category::find($id);
        if(!empty($request->file('image'))){

            $request->validate([
                'image'=>'required|mimes:jpeg,jpg,png|dimensions:min_height=184,min_width=184,max_height=186,max_width=186'
            ]);
            $image = $request->file('image');
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/backend/images/category',$image_name);
            $path = public_path('assets/backend/images/category/'.$update->image);
            $isExists = File::exists($path);
            if ($isExists==true){
                if($update->image != null){
                    unlink('assets/backend/images/category/'.$update->image);
                }
            }
        }else{
            $image_name = $update->image;
        }
        $update->update([
            'name'=>$request->name,
            'image'=>$image_name,
            'type'=>$request->type
        ]);

        Session::flash('success','Successfully Updated Category');
        return redirect()->route('type.index');
    }

    public function destroy($id)
    {
        $delete = Category::find($id);
        $path = public_path('assets/backend/images/category/'.$delete->image);
        $isExists = File::exists($path);
        if ($isExists==true){
            if($delete->image != null){
                unlink('assets/backend/images/category/'.$delete->image);
            }
        }
        $delete_products =  Product::where('category_id','like',$id)->get();
        foreach ($delete_products as $delete_product){
            if($delete_product->image!=null){
                unlink('assets/backend/images/product/'.$delete_product->image);
            }
            $delete_product->delete();
        }
        $delete->delete();
        Session::flash('success','Successfully Deleted Category');
        return redirect()->route('type.index');
    }

    public function search(Request $request)
    {
        $categories = Category::where('name','like','%'.$request->search.'%')
                                ->orWhere('type','like','%'.$request->search.'%')
                                ->orWhere('id','like','%'.$request->search.'%')
                                ->orderBy('id','Desc')->paginate(20);
        $searched = $request->search;
        return view('backend.category.index',compact('categories','searched'));
    }
}
