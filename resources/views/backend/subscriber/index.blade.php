@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">All Subscribers<hr style=""/></h2><br/>
                            {!! Form::open(['route' => 'subscriber.search','method' => 'GET']) !!}
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
                                    <th class="text-center"> Email </th>
                                    <th class="text-center"> Created At </th>
                                    <th class="text-center"> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($subs->count() ==! 0)
                                    @foreach($subs as $sub)
                                        <tr>
                                            <td class="text-center">{{ ($subs->currentpage()-1) * $subs ->perpage() + $loop->index + 1 }}</td>
                                            <td class="text-center">{{$sub->email}}</td>
                                            <td class="text-center">{{date('d-m-y',strtotime($sub->created_at))}}</td>
                                            <td class="text-center">
                                                <div class="modal fade" id="delete_modal_{{$sub->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete Subscriber</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Want To Delete This Subscriber.</p><p>Once You Delete This Subscriber</p>
                                                                <p>You Will Delete His/Her Information Permanently</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['subscriber.destroy',$sub->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$sub->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No One Subscribed Yet'}}</td>
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
