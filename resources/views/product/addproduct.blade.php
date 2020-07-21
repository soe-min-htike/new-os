@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<form method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <div class="container mt-3">
        <div class="col-md-8 offset-md-2">
            <legend>Add Product</legend>
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" name="title" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="cont">Description</label>
                <textarea class="form-control" name="content" rows="3" id="cont"></textarea>
            </div>
            <div class="form-group">
                <label for="pric">Price:</label>
                <input type="number" name="price" class="form-control" id="pric">
            </div>
            <div class="form-group">
                <label for="col">Color</label>
                <input type="text" name="color" class="form-control" id="col">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" name="size" class="form-control" id="size">
            </div>
            <div class="form-group">
                <label for="category">Choose Category:</label>
                    <select class="form-control" name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                    </select>                
            </div>
            <div class="form-group">
                <label for="img">Set Feature Image</label>
                <input type="file" class="form-control-file border" id="img" name="image">
            </div>
            <div class="form-group">
                <label for="imgs">Iamge Upload</label>
                <input type="file" class="form-control-file border" id="imgs" name="images[]" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </div>
</form>
@endsection