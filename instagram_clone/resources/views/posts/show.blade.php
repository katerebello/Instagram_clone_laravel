@extends('layouts.app')
@section('title','Post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-7 p-5">
            <img class="img-fluid w-75 float-right"   src="/storage/{{$post -> image}}" alt=""><!--in order to set an default image if user didnt provide one include a function in profiles model-->
        </div>
        <div class="col-5 p-5">
            <div class="d-flex align-items-center">
                <div>
                    <a href="/profile/{{$post->user->id}}">
                        <img src="{{ $post->user->profile->profileImage() }}" class=" rounded-circle img-fluid" style="max-width:50px" alt="">
                    </a>
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a class="text-decoration-none" href="/profile/{{$post->user->id}}" ><span class="text-dark ml-3">{{$post->user->username}}</span></a>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                <span class="font-weight-bold ">
                    <a href="/profile/{{$post->user->id}}" class="text-dark" style="text-decoration: none;">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>
        </div>
    </div>
</div>

@endsection
