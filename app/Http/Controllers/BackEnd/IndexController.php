<?php

namespace App\Http\Controllers\BackEnd;

use App\Category;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Product;
use App\Review;
use App\Subscriber;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('id','Desc')->count();
        $categories = Category::orderBy('id','Desc')->count();
        $available = Product::where('status','like','প্রাপ্য')->count();
        $messages = Contact::orderBy('id','Desc')->count();
        $subscribers = Subscriber::orderBy('id','Desc')->count();
        $reviews = Review::orderBy('id','Desc')->count();
        return view('backend.index',compact('products','categories','available','messages','subscribers','reviews'));
    }
}
