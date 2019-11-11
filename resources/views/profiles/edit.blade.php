@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
            @csrf

            @method('PATCH')
            <div class="row">
                {{-- for centering --}}
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit profile</h1>
                    </div>

                    <div class="form-group row pt-4">
                        <label for="title" class="col-md-4 col-form-label">Title</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? optional($user->profile)->title }}" autocomplete="title" autofocus>
    
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row pt-4">
                        <label for="description" class="col-md-4 col-form-label">Description</label>
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? optional($user->profile)->description }}" autocomplete="description" autofocus>
    
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row pt-4">
                        <label for="link" class="col-md-4 col-form-label">Link</label>
                            <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') ?? optional($user->profile)->link }}" autocomplete="link" autofocus>
    
                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-8 offset-2">
    
                <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
    
                @error('image')
                    <strong style="color:#E3342F;font-family:'Nunito';font-size:11.52px;">{{ $message }}</strong>
                @enderror
                </div>
            </div>
    
            <div class="row pt-4">
                <div class="col-8 offset-2">
                    <button id="timeout-btn" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection