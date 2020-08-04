@extends('layouts.app')

@section('content')
<div class="container" style="overflow: auto;">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')


        <div class="row offset-3">
            <div class="col-8">

                <div class="row">
                    <h3 class="ml-3 mt-4 h3" style="font-weight: bold;">Edit Profile</h3>
                </div>

                <!-- title -->
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>

                    <input id="title" type="text"
                     class="ml-3 form-control @error('title') is-invalid @enderror" 
                     name="title" title="title" value="{{ old('title')?? $user->profile->title }}" 
                     autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <!-- description -->
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>

                    <input id="description" type="text" class="ml-3 form-control @error('description')
                     is-invalid @enderror" name="description" 
                     description="description" value="{{ old('description')?? $user->profile->description }}" 
                     autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- url -->
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label ">Url</label>

                    <input id="url" type="text" class="ml-3 form-control @error('url') is-invalid
                     @enderror" name="url" url="url" value="{{ old('url')?? $user->profile->url }}"
                     autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- image -->
        <div class="row offset-3">
            <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
            <input type="file" class="ml-3 form-control-file" id="image" name="image">

            @error('image')
            <strong>{{ $message }}</strong>
            @enderror

        </div>

        <!-- to submit -->
        <div class="row pt-4 offset-3">
            <button class="ml-3 btn btn-primary">SAVE PROFILE</button>
        </div>
    </form>
</div>
@endsection