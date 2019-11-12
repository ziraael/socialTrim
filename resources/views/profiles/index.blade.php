@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="top-row">
        <div id="profile-pic" class="col-6 col-md-4">
            <img src='{{$user->profile->profileImage()}}' class="rounded-circle">
        </div>
        <div id="details" class="col-7 col-md-8 pt-3 pb-4">
            <div id="top-headline">

                <div class="d-flex align-items-center">
                    <h1>{{$user -> username}}</h1>
                    <button class="btn btn-primary ml-4">Follow</button>
                </div>
            </div>

            <div id="counters" class="d-flex">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-4"><strong>0</strong> followers </div>
                <div class="pr-4"><strong>0</strong> following </div>
            </div>

            <div id="title" class="pt-3">{{optional($user->profile)->title}}</div>
            <i><div id="description" class="pt-4 pb-4">{{optional($user->profile)->description}}</div></i>
            <div><strong><a href="https://www.lorem.com">{{optional($user->profile)->link}}</a></strong></div>
            
        </div>

    </div>

    <div id="vija"></div>

    <div id="postimet" class="row pt-4">
        {{-- $user pe merr prej ProfilesController --}}
        @foreach ($user->posts as $post)
            <div class="col-12 col-sm-4 pt-4">
                <a href="/post/{{$post->id}}">
                    <div class="img-wrap">
                        <img id="posti" src="/storage/{{$post->image}}" class="w-100">
                        <div class="overlay">
                            <span class="icon" title="Like">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="icon2" title="Comment">
                                <i class="fas fa-comment"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
