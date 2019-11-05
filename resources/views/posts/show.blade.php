@extends('layouts.app')

@section('content')
<div class="container d-flex">
        <div class="row">
            <div class="col-6">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
            <div class="col-6">
                <img src="/storage/{{$post->user->image}}" alt="">
                <h3>{{'@'}}{{$post->user->username}}</h3>
                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
@endsection