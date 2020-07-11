@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<div class="container mt-3">   
    <ul class="">
        <li class="media">
        <img src="{{asset(url('img/b3.jpg'))}}" class="mr-3" alt="..." style="width: 200px">
            <div class="media-body">
                <h5>Title</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </li>
    </ul>
</div>

@endsection