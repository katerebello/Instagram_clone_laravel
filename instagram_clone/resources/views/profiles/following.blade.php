@extends('layouts.app')
@section('title','Following')
@section('content')
<div class="container card mt-5 p-4 mb-5">
    @foreach($followings as $following)
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="/profile/{{$following->user->id}}" class="ml-5">
                    <img src="/storage/{{$following->image}}"  class="rounded-circle" width="70" height="70" alt="">
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="/profile/{{$following->user->id}}" class="text-decoration-none text-dark font-weight-bold">{{$following->user->username}}</a>
            </div>
        </div>
        <hr>
    @endforeach
</div>
@endsection