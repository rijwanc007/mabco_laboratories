@extends('frontend.master')
@section('title','পণ্য তালিকা | ম্যাবকো')
@section('content')

    <!-- product start -->
    <div class="pa-product spacer-top" id="top-product">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>আমাদের পণ্যসমূহ</h1>
                <h5>ঔষধ</h5>
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
                                    <p class="text-center">কার্যকারিতা :</p>
                                    <p class="desc">{{$product->usage}} </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">{{"No Products Available"}}</div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- product end -->

@endsection
