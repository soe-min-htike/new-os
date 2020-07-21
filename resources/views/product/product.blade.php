@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<div class="container mt-3">
    <legend>All Products</legend> 
    {{-- Success alert --}}
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div> 
    @endif  
    @foreach ($products as $product)
    <ul>
        <li class="media">
        <img class="mr-3" src="{{asset('Upload/'. $product->feature_image)}}" alt="No Image" style="width: 150px">
            <div class="media-body">
            <h5>{{$product->title}}</h5>
            <p>{{Str::limit($product->content, 300)}}</p><p>({{$product->created_at->diffForHumans()}})</p>
                <p><a class="btn btn-info" href="{{url("admin/product/$product->id/edit")}}">Edit</a> 
                <a class="btn btn-danger" href="#">Delete</a></p>                
            </div>
        </li>
    </ul>
    @endforeach
    {{ $products->links() }}
</div>


@endsection