<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

    public function category($id)
    {
        $categories = Category::orderBy('id','Desc')->get();
        $title = Category::find($id);
        $products = Product::where('category_id','like',$id)->orderBy('id','Desc')->get();
        return view('frontend.category',compact('categories','products','title'));
    }
}
