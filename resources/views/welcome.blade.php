@extends('layouts.app')

@section('content')


<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <img src="svg/socialTrimLogo.png" alt="">
                @auth
                <span id="profili-juaj"><a href='http://127.0.0.1:8000/profile/{{Auth::user()->id}}'>Profili juaj</a></span>
                @endauth
            </div>
        </div>
    </div>
    
@endsection
    