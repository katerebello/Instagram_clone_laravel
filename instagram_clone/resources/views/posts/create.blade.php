@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">

        @csrf
        <div class="row offset-3">
            <div class="col-8 ">

                <div class="row">
                    <h3 class="pt-4 ml-3 h3" style="font-weight: bold;">ADD NEW POST</h3>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                    <input id="caption" type="text" class="ml-3 form-control @error('caption')
                     is-invalid @enderror" name="caption" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- image -->
        <div class="row offset-3">
            <label for="image" class="col-md-4 col-form-label ">Post Image</label>
            <input type="file" class="ml-3 form-control-file" id="image" name="image">

            @error('image')
            <strong>{{ $message }}</strong>
            @enderror

        </div>

        <!-- to submit -->
        <div class="row pt-4 offset-3">
            <button class="ml-3 btn btn-primary">Add New Post</button>
        </div>
    </form>

</div>
@endsection