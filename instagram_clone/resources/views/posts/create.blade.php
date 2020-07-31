@extends('layouts.app')

@section('content')
<form action="/p" enctype="multipart/form-data" method="post">
    @csrf <!--csrf is used to authenticate that form before submitting the end point ie the add posts button in this case-->
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post caption</label>
                        <input id="caption" 
                           type="caption"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="caption"
                           value="{{ old('caption') }}"
                           required autocomplete="caption">

                            @error('caption')
                                    <strong>{{ $errors->first('caption') }}</strong>
                            @enderror
                </div>
         
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                            <strong>{{ $errors->first('image') }}</strong>
                    @enderror
                </div> 
                <div class="row  pt-2">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
    </div>
</form>
@endsection
