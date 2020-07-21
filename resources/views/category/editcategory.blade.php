@extends('layouts.master')
@section('title','Edit Category')
@section('content')
    <form method="post">
    @csrf
    <div class="container mt-3">
        <div class="col-md-8 offset-md-2">
            @if (session('status'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> 
            @endif
            
            <legend>Edit Category</legend>
            <div class="form-group">
                <label for="cat">Category</label>
                <input type="text" name="name" class="form-control" id="cat" value="{{$cat->name}}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>          
@endsection