<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
    public function product($id,$category_id){
        $categories = Category::orderBy('id','Desc')->get();
        $product = Product::find($id);
        $similars = Product::where('category_id','like',$category_id)->where('id','!=',$id)->orderBy('id','Desc')->get();
        return view('frontend.product',compact('categories','product','similars'));
    }
}
