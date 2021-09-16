@extends('frontend.master')
@section('title','শ্রেণী | ম্যাবকো')
@section('category','active')
@section('content')
    <div class="pa-product spacer-top">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1 class="pt-10">{{$title->name}}</h1>
                <h5>medicine</h5>
            </div>
            <div class="row">
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
        </div>
    </div>
@endsection
