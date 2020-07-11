@extends('layouts.master')
@section('title','All Categories')
@section('content')
    <div class="container mt-5">
        <div class="col-md-8 offset-md-2">
            @if (session('status'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> 
            @endif
            <legend>All Categories</legend>
            <table class="table table-striped">
                @foreach ($categories as $category)
                <tr>
                    <td><strong>{{$category->name}}</strong></td>
                    <td><a href="{{url("admin/category/$category->id/edit/")}}" class="btn btn-info">Edit</a> 
                        <a href="{{url("admin/category/$category->id/delete")}}" class="btn btn-danger" 
                            onclick="return confirm('Are you sure to delete this Category?')">Delete</a></td>
                </tr>
                @endforeach            
            </table>


        </div>
    </div>
@endsection