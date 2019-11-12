@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="top-row">
        <div id="profile-pic" class="col-6 col-md-4">
            <img src="https://instagram.fprx1-1.fna.fbcdn.net/vp/d89d271bece1a5174da360cd7baa09c9/5E3F720C/t51.2885-19/s150x150/49426792_277499259608136_1149052224404455424_n.jpg?_nc_ht=instagram.fprx1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div id="details" class="col-7 col-md-8 pt-5 pb-4">
            <div class="d-flex" id="top-headline">
                <h1>{{$user -> username}}</h1>
                {{-- @auth
                <a id="add-post" href="/post/create">Add new post</a>
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                @endauth --}}
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
