@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            {{-- for centering --}}
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add new post</h1>
                </div>
                <div class="form-group row pt-4">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">

            <label for="image" class="col-md-4 col-form-label">Post Image</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
                <strong style="color:#E3342F;font-family:'Nunito';font-size:11.52px;">{{ $message }}</strong>
            @enderror
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-8 offset-2">
                <button id="timeout-btn" class="btn btn-primary">Add post</button>
            </div>
        </div>
    </form>
</div>
@endsection
