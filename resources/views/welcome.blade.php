@extends('layouts.app')

@section('content')


<section id="seksioni">
        <div id="particles-js"></div>
{{-- <div class="flex-center position-ref full-height"> --}}
    {{-- <div class="content"> --}}
    <div class="container">
        <div class="row" id="rreshti-main">
            <h1 id="main-text" class="col-xl-6"><a href="/register">Behu pjese e jona!</a></h1>
            <img id="fotoja" class="col-xl-6" src="svg/tvcouple.png" width="500px" height="550px" alt="">
        </div>
    </div>
    <svg id="thewave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,192L60,176C120,160,240,128,360,128C480,128,600,160,720,176C840,192,960,192,1080,165.3C1200,139,1320,85,1380,58.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>            <div class="title m-b-md">
        @auth
        {{-- <span id="profili-juaj"><a href='/profile/{{Auth::user()->id}}'>Profili</a></span> --}}
        @endauth
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
    </section>
<section id="seksioni2">
    
</section>
@endsection
    
    