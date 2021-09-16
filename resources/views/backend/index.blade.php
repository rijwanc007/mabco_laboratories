@extends('backend.master')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <a  class="index-link" href="{{route('product-back.index')}}">
                    <div class="card-body">
                        <img src="{{'assets/backend/images/dashboard/circle.svg'}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Products <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$products}}</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <a  class="index-link" href="{{route('type.index')}}">
                    <div class="card-body">
                        <img src="{{'assets/backend/images/dashboard/circle.svg'}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Categories <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$categories}}</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <a  class="index-link" href="{{route('product-back.index')}}">
                    <div class="card-body">
                        <img src="{{'assets/backend/images/dashboard/circle.svg'}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Available Products <i class="mdi mdi-human-male mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$available}}</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">

            <div class="card bg-gradient-dark card-img-holder text-white">
                <a  class="index-link" href="{{route('contact.index')}}">
                    <div class="card-body">
                        <img src="{{'assets/backend/images/dashboard/circle.svg'}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Messages <i class="mdi mdi-receipt mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$messages}}</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-primary card-img-holder text-white">
                <a  class="index-link" href="{{route('subscriber.index')}}">
                    <div class="card-body">
                        <img src="{{'assets/backend/images/dashboard/circle.svg'}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Subscription <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$subscribers}}</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <a  class="index-link" href="{{route('review.index')}}">
                    <div class="card-body">
                        <img src="{{'assets/backend/images/dashboard/circle.svg'}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Reviews <i class="mdi mdi-keyboard-return mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$reviews}}</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
