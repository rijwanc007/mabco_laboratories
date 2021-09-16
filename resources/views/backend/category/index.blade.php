@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">All Categories<hr style=""/></h2><br/>
                            {!! Form::open(['route' => 'type.search','method' => 'GET']) !!}
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
                                    <th class="text-center"> Type </th>
                                    <th class="text-center"> Created At </th>
                                    <th class="text-center"> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($categories->count() ==! 0)
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="text-center">{{ ($categories->currentpage()-1) * $categories ->perpage() + $loop->index + 1 }}</td>
                                            <td class="text-center">{{$category->name}}</td>
                                            <td class="text-center">{{$category->type}}</td>
                                            <td class="text-center">{{date('d-m-y',strtotime($category->created_at))}}</td>
                                            <td class="text-center">
                                                <div class="modal fade" id="myModal_user_{{$category->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Category Details</h4>
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
                                                                                            <img src="{{asset('/assets/backend/images/category/'. $category->image)}}" class="user_image">
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>Name</td>
                                                                                        <td>{{$category->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Type</td>
                                                                                        <td>{{$category->type}}</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Created At</td>
                                                                                        <td>{{date('d-m-y',strtotime($category->created_at))}}</td>
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
                                                <button type="button" class="btn btn-inverse-success btn-icon" data-toggle="modal" data-target="#myModal_user_{{$category->id}}"><i class="mdi mdi-eye"></i></button>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('type.edit',$category->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$category->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete Category</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Want To Delete This Category.</p>
                                                                    <p>Once You Delete This Category</p>
                                                                <p>You Will Delete This Category Information Permanently</p>
                                                                <p>All Products Under This Category Will Also be Deleted</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['type.destroy',$category->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$category->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center text-info">{{'No Categories Created Yet'}}</td>
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
