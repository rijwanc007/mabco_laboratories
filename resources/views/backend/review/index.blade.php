@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">All Reviews<hr style=""/></h2><br/>
                            {!! Form::open(['route' => 'review.search','method' => 'GET']) !!}
                            <div class="row text-center">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" name="search" value="{{!empty($searched) ? $searched : "" }}" placeholder="Search in table.....">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button class="btn btn-gradient-info btn-lg btn-block" id="search_balance">Search</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center"> S/L </th>
                                    <th class="text-center"> Name </th>
                                    <th class="text-center"> Category </th>
                                    <th class="text-center"> Review </th>
                                    <th class="text-center"> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($reviews->count() ==! 0)
                                    @foreach($reviews as $review)
                                        <tr>
                                            <td class="text-center">{{ ($reviews->currentpage()-1) * $reviews ->perpage() + $loop->index + 1 }}</td>
                                            <td class="text-center">{{$review->name}}</td>
                                            <td class="text-center">{{$review->category}}</td>
                                            <td class="text-center">{{mb_substr($review->review,0,30,'utf-8')}} ....</td>
                                            <td class="text-center">
                                                <div class="modal fade" id="myModal_user_{{$review->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Review Details</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row table-responsive justify-content-center">
                                                                            <div class="col-lg-12 index-modal-table">
                                                                                <table class="table table-striped">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th colspan="2">
                                                                                            <img src="{{asset('/assets/backend/images/review/'. $review->image)}}" class="user_image">
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>Name</td>
                                                                                        <td>{{$review->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Category</td>
                                                                                        <td>{{$review->category}}</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Review</td>
                                                                                        <td>{{mb_substr($review->review,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-success btn-icon" data-toggle="modal" data-target="#myModal_user_{{$review->id}}"><i class="mdi mdi-eye"></i></button>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('review.edit',$review->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$review->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete Review</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Want To Delete This Review.Once You Delete This Review</p>
                                                                <p>You Will Delete His/Her Information Permanently</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['review.destroy',$review->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$review->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center text-info">{{'No Reviews Created Yet'}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
