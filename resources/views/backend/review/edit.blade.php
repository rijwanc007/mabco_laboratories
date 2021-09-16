@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['review.update',$edit->id],'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-pencil"></i></span> Edit Review</h3></div>
            <div class="card">
                <div class="card-body">
                    <h6 class="warn-h pb-3 pt-3 text-center">*** Please Provide Inputs Only In Bangla ***</h6>
                    <div class="form-group">
                        <label for="type">Reviewer Category :</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="Doctor" @if($edit->category=='Doctor') selected @endif>Doctor</option>
                            <option value="Customer" @if($edit->category=='Customer') selected @endif>Customer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Name :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$edit->name}}" placeholder="Enter Reviewer Name" required>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Photo :</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                        <p class="warn-p pt-3">*** The Image Width*Height Must Be 300*300 ***</p>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Provide Review:</label>
                        <textarea rows="4" class="form-control" name="review" id="review" style="resize: none;" placeholder="Type In Review In Bangla ">{{$edit->review}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-pencil"></i> Update Review</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
