@extends('frontend.master')
@section('title','উৎপাদিত । ম্যাবকো')
@section('content')
  <div class="pa-product pt-100">
        <div class="container">
            <div class="row justify-content-center pb-40">
                @forelse($categories as $category)
                <div class="col-1 text-center produce-nav-list"><a href="#{{$category->name}}" class="text-center">{{$category->name}}</a></div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">{{"No Categories Created Yet"}}</div>
                @endforelse
            </div>
            @forelse($categories as $category)
            <div class="pa-heading pt-60" id="{{$category->name}}">
                <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1 class="pt-10">{{$category->name}}</h1>
                <h5>Category</h5>
            </div>
            <div class="row">
                @php
                    $products = \App\Product::where('category_id','like',$category->id)->orderBy('id','Desc')->get();
                @endphp
                @forelse($products as $product)
                <div class="col-lg-3 col-sm-6  pt-20 pb-20">
                    <a href="{{route('frontend.product',[$product->id,$product->category_id])}}">
                        <div class="pa-product-box">
                            <div class="pa-product-img pt-10 pb-10">
                                <img src="{{asset('assets/backend/images/product/'.$product->image)}}" alt="image" class="img-fluid"/>
                            </div>
                            <div class="pa-product-content pb-5">
                                <p class="title pb-1">{{$product->name}}</p>
                                <p class="text-center"> উপাদানসমূহ :</p>
                                <p class="desc">{{$product->ingredients}} </p>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">{{"No Products Available In This Category Yet"}}</div>
                @endforelse
            </div>
            @empty
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">{{"No Categories Created Yet"}}</div>
            @endforelse
        </div>
    </div>
@endsection
