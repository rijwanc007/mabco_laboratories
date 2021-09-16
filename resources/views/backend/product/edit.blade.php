
@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['product-back.update',$edit->id],'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-package"></i></span> Edit Product</h3></div>
            <div class="card">
                <div class="card-body">
                    <h6 class="warn-h pb-3 pt-3 text-center">*** Please Provide Inputs Only In Bangla ***</h6>
                    <div class="form-group">
                        <label for="category_id">Product Category Name :</label>
                        <select class="form-select" id="category_id" name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($edit->category_id==$category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name"> Product Name :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$edit->name}}" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="ingredients"> Product Ingredients :</label>
                        <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{$edit->ingredients}}" placeholder="Enter Product Ingredients" required>
                    </div>
                    <div class="form-group">
                        <label for="instructions"> Product Intake Instructions :</label>
                        <textarea type="text" class="form-control" id="instructions" name="instructions" placeholder="Enter Product Intake Instructions" rows="3" style="resize: none;" required>{{$edit->instructions}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="usage"> Product Usage :</label>
                        <textarea type="text" class="form-control" id="usage" name="usage" placeholder="Enter Product Common Usage" rows="3" style="resize: none;" required>{{$edit->usage}}</textarea>
                    </div>
                    <div class="form-group">
                          <label for="effect"> Product Side-Effects :</label>
                          <input type="text" class="form-control" id="effect" name="effect" value="{{$edit->effect}}" placeholder="Enter Product Side-Effects" required>
                    </div>
                    <div class="form-group">
                          <label for="interaction"> Drug Interaction :</label>
                          <input type="text" class="form-control" id="interaction" name="interaction" value="{{$edit->interaction}}" placeholder="Enter Drug Interactions" required>
                    </div>
                    <div class="form-group">
                          <label for="indication"> Contra Indication :</label>
                          <input type="text" class="form-control" id="indication" name="indication" value="{{$edit->indication}}" placeholder="Enter Contra Indication" required>
                    </div>
                    <div class="form-group">
                          <label for="precaution"> Product Precaution :</label>
                          <input type="text" class="form-control" id="precaution" name="precaution" value="{{$edit->precaution}}" placeholder="Enter Precautions" required>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Photo :</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                        <p class="warn-p pt-3">*** The Image Width*Height Must Be 185*185 ***</p>
                    </div>
                    <div class="form-group">
                        <label for="manufactured"> Product Manufacturing Country :</label>
                        <input type="text" class="form-control" id="manufactured" name="manufactured" placeholder="Enter Product Manufacturing Country" value="{{$edit->manufactured}}" required>
                    </div>
                    <div class="form-group">
                        <label for="description"> Product Description :</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Product Description" rows="4" style="resize: none;" required>{{$edit->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Product Type :</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="Popular" @if($edit->type=='Popular') selected @endif>Popular</option>
                            <option value="Regular" @if($edit->type=='Regular') selected @endif>Regular</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Product Status :</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="প্রাপ্য" @if($edit->status=='প্রাপ্য') selected @endif>Available</option>
                            <option value="অপ্রাপ্য" @if($edit->status=='অপ্রাপ্য') selected @endif>Unavailable</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-package"></i> Update Product</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
