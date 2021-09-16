@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">All Products<hr style=""/></h2><br/>
                            {!! Form::open(['route' => 'product-back.search','method' => 'GET']) !!}
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
                                    <th class="text-center"> Ingredients </th>
                                    <th class="text-center"> Category </th>
                                    <th class="text-center"> Description </th>
                                    <th class="text-center"> Type </th>
                                    <th class="text-center"> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($products->count() ==! 0)
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="text-center">{{ ($products->currentpage()-1) * $products ->perpage() + $loop->index + 1 }}</td>
                                            <td class="text-center">{{$product->name}}</td>
                                            <td class="text-center">{{mb_substr($product->ingredients,0,30,'utf-8')}}...</td>
                                            <td class="text-center">{{$product->category->name}}</td>
                                            <td class="text-center">{{mb_substr($product->description,0,20,'utf-8')}} ....</td>
                                            <td class="text-center">{{$product->type}}</td>
                                            <td class="text-center">
                                                <div class="modal fade" id="myModal_user_{{$product->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Product Details</h4>
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
                                                                                            <img src="{{asset('/assets/backend/images/product/'. $product->image)}}" class="user_image">
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>Name</td>
                                                                                        <td>{{$product->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Category</td>
                                                                                        <td>{{$product->category->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Ingredients</td>
                                                                                        <td>{{mb_substr($product->ingredients,0,30,'utf-8')}}...</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Common Usage</td>
                                                                                        <td>{{mb_substr($product->usage,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Side Effect</td>
                                                                                        <td>{{mb_substr($product->effect,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Drug Interaction</td>
                                                                                        <td>{{mb_substr($product->interaction,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Contra Indication</td>
                                                                                        <td>{{mb_substr($product->indication,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Precaution</td>
                                                                                        <td>{{mb_substr($product->precaution,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Instructions</td>
                                                                                        <td>{{mb_substr($product->instructions,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Manufactured In</td>
                                                                                        <td>{{$product->manufactured}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Description</td>
                                                                                        <td>{{mb_substr($product->description,0,20,'utf-8')}} ....</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Type</td>
                                                                                        <td>{{$product->type}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Status</td>
                                                                                        <td>{{$product->status}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Created At</td>
                                                                                        <td>{{date('d-m-y',strtotime($product->created_at))}}</td>
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
                                                <button type="button" class="btn btn-inverse-success btn-icon" data-toggle="modal" data-target="#myModal_user_{{$product->id}}"><i class="mdi mdi-eye"></i></button>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('product-back.edit',$product->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$product->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete Product</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Want To Delete This Product. Once You Delete This Product</p>
                                                                <p>You Will Delete This Product Information Permanently</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['product-back.destroy',$product->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$product->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center text-info">{{'No Products Created Yet'}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            {{ $products->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
