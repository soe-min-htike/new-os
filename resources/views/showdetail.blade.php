@extends('layouts.app')
@section('title','Product Detail')
@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            {{$product->images}}
        </div>
    </div>
@endsection