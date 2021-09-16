<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class IndexController extends Controller
{
    public function index(){

        $numto = new NumberToBangla();

        $products = Product::where('type','like','popular')->orderBy('id','Desc')->get();
        $doctors = Review::where('category','like','Doctor')->orderBy('id','Desc')->get();
        $populars = Category::where('type','like','Featured')->orderBy('id','Desc')->get()->take(4);
        $categories = Category::orderBy('id','Desc')->get();
        $recents = Product::orderBy('id','Desc')->get()->take(5);
        $all_count = Product::orderBy('id','Desc')->count();
        $bangla_count = $numto->bnNum($all_count);
        return view('frontend.index',compact('doctors','populars','categories','products','recents','bangla_count'));
    }
}
