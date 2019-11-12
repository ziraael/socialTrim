@extends('layouts.app')

@section('content')
<div class="container d-flex">
        <div class="row">
            <div class="col-6">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
            <div class="col-6">

                <div class="d-flex pb-3" id="show-post-top">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-50">
                <div class="pl-3"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a>
                    <span id="bullet-point" class="text-dark">•</span>
                        <a href="#">Follow</a>
                </div>

                </div>

                <div id="vija"></div>

                <p class="pt-2 pb-3">
                    <span class="font-weight-bold pr-2">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span>
                    {{$post->caption}}
                </p>
                

                <div class="created"><i>{{strtoupper($post->created_at->diffForHumans())}}</i></div>
            </div>
        </div>
    </div>
@endsection