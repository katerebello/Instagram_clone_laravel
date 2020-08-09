@extends('layouts.app')

@section('content')

<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf <!--csrf is used to authenticate that form before submitting the end point ie the add posts button in this case-->
    
    <!--above in form attributes the method should be get or post so actually its been overwritten with put or patch as there put and patch are not supported-->
    @method('PATCH')

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                        <input id="title" 
                           type="title"
                           class="form-control @error('title') is-invalid @enderror"
                           name="title"
                           value="{{ old('title') ?? $user->profile->title }}"
                           required autocomplete="title">

                            @error('title')
                                    <strong>{{ $errors->first('title') }}</strong>
                            @enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                        <input id="description" 
                           type="description"
                           class="form-control @error('description') is-invalid @enderror"
                           name="description"
                           value="{{ old('description')  ?? $user->profile->description }}"
                           required autocomplete="description">

                            @error('description')
                                    <strong>{{ $errors->first('description') }}</strong>
                            @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">Url</label>
                        <input id="url" 
                           type="url"
                           class="form-control @error('url') is-invalid @enderror"
                           name="url"
                           value="{{ old('url')  ?? $user->profile->url}}"
                           required autocomplete="url">

                            @error('url')
                                    <strong>{{ $errors->first('title') }}</strong>
                            @enderror
                </div>
         
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                            <strong>{{ $errors->first('image') }}</strong>
                    @enderror
                </div> 
                <div class="row  pt-2">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </div>
</form>

@endsection
