@extends('frontend.master')
@section('title','পন্য | ম্যাবকো')
@section('category','active')
@section('content')
    <div class="product-details-wrapper pt-120 pb-120">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid">
                <h1>পণ্য সম্পর্কে জানুন</h1>
                <h5>পণ্যর খুঁটিনাটি</h5>
            </div>
            <div class="row pt-20">
                <div class="col-lg-1"></div>
                <div class="col-lg-4 col-md-6 product-img">
                    <img src="{{asset('assets/backend/images/product/'.$product->image)}}" alt="image" class="center">
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="">
                        <div class="feature">
                                <h3>{{$product->name}}</h3>
                                <p> উৎপাদনে-ম্যাবকো ল্যাবরেটারিজ ইউনানী </p>
                            <p class="pt-15">
                                @php
                               $product_description = nl2br(stripcslashes($product->description));
                                @endphp
                                {!! $product_description !!}
                            </p>
                        </div>
                        <div class="feature mb-10 mt-10">
                            <div class="feature-heading">
                                <h5>কার্যকারিতা :</h5>
                            </div>
                            <p class="desc">{{$product->usage}}</p>
                        </div>
                            <div class="feature mb-10 mt-10">
                                <div class="feature-heading">
                                <h5>উপাদানসমূহ :</h5>
                                </div>
                                <p class="desc">{{$product->ingredients}}</p>
                            </div>
                        <div class="feature mb-10 mt-10 ">
                            <div class="feature-heading">
                                <h5>পার্শ্বপ্রতিক্রিয়া :</h5>
                            </div>
                            <p class="desc">{{$product->effect}}</p>
                        </div>
                        <div class="feature mb-10 mt-10 ">
                            <div class="feature-heading">
                                <h5>ভেষজ মিথস্ক্রিয়া :</h5>
                            </div>
                            <p class="desc">{{$product->interaction}}</p>
                        </div>
                        <div class="feature mb-10 mt-10 ">
                            <div class="feature-heading">
                                <h5>প্রতিনির্দেশনা :</h5>
                            </div>
                            <p class="desc">{{$product->indication}}</p>
                        </div>
                        <div class="feature mb-10 mt-10 ">
                            <div class="feature-heading">
                                <h5>সতর্কতা :</h5>
                            </div>
                            <p class="desc">{{$product->precaution}}</p>
                        </div>
                        <div class="feature mb-10 mt-10 ">
                            <div class="feature-heading">
                                <h5>সেবনবিধি :</h5>
                            </div>
                            <p class="desc">{{$product->instructions}}</p>
                        </div>
                        <div class="feature mb-10 mt-10 ">
                            <div class="feature-heading">
                                <h5>ঔষধ শ্রেণী :</h5>
                            </div>
                            <p class="desc">{{$product->category->name}}</p>
                        </div>
                            <div class="feature mb-10 mt-10">
                                <div class="feature-heading">
                                <h5>উৎপাদনস্থান :</h5>
                                </div>
                                <p class="desc">{{$product->manufactured}}</p>
                            </div>
                        <div class="feature mt-10">
                            <div class="feature-heading">
                            <h5>প্রাপ্যতা :</h5>
                            </div>
                            <p class="desc">{{$product->status}}</p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
    </div>
    <!-- page main wrapper end -->

    <!-- related product area start -->
    <section class="related-product pb-30 pt-30">
        <div class="container">
            <div class="row">
                <div class="pa-heading">
                    <img src="{{asset('assets/frontend/images/herbal.svg')}}" alt="image" class="img-fluid">
                    <h1>এই শ্রেণীর অন্যান্য পণ্য</h1>
                    <h5>পণ্য প্রকরণ</h5>
                </div>
            </div>
            <div class="row">
                @forelse($similars as $similar)
                <div class="col-lg-3 col-sm-6  pt-20 pb-20">
                    <a href="{{route('frontend.product',[$similar->id,$similar->category_id])}}">
                        <div class="pa-product-box">
                            <div class="pa-product-img pt-10 pb-10">
                                <img src="{{asset('assets/backend/images/product/'.$similar->image)}}" alt="image" class="img-fluid"/>
                            </div>
                            <div class="pa-product-content pb-5">
                                <p class="title pb-1">{{$similar->name}}</p>
                                <p class="text-center"> উপাদানসমূহ :</p>
                                <p class="desc">{{$similar->ingredients}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">{{"No Similar Products Available"}}</div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
