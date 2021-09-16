<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $customers = Review::where('category','like','Customer')->orderBy('id','Desc')->get();
        $categories = Category::orderBy('id','Desc')->get();
        return view('frontend.about',compact('customers','categories'));
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
}
